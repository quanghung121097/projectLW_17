<?php

namespace App\Http\Controllers\Backend;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products = Product::orderBy('updated_at','desc')->paginate(10);
        return view('backend.products.index')->with([
            'products' => $products]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::get();
        return view('backend.products.create')->with([
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {   
        $info_img = [];
        if ($request->hasFile('images')){
            $images = $request->file('images');
            foreach ($images as $key => $image){
                $namefile=$image->getClientOriginalName();
                $url='storage/products/'.$namefile;
                Storage::disk('public')->putFileAs('products',$image,$namefile);
                $info_img[]=[
                    'url'=>$url,
                    'name'=>$namefile
                ];


            }
        }else{
            echo 'Lỗi upfile';
        }

        $product = new Product();
        $product->name = $request->get('name');
        $product->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $product->category_id = $request->get('category_id');
        $product->origin_price = $request->get('origin_price');
        $product->sale_price = $request->get('sale_price');
        $product->content = $request->get('content');
        $product->status = $request->get('status');

        $product->user_id = Auth::user()->id;
        $save=$product->save();
        foreach ($info_img as $image) {
            $img = new Image();
            $img->name=$image['name'];
            $img->path=$image['url'];
            $img->product_id=$product->id;
            $img->save();
        }
        if ($save) {
            $request->session()->flash('success','Thêm mới thành công');
        } else {
            $request->session()->flash('error','Thêm mới không thành công');
        }
        return redirect()->route('backend.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        // $category = $product->category;
        return view('backend.products.show')->with(['product'=>$product]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=Auth::user();
        $product=Product::with('images')->find($id);

        $categories = Category::get();
        
        if ($user->can('update', $product)) {
            return view('backend.products.edit')->with([
             'product'=>$product,
             'categories'=>$categories,

         ]);
        }else {
            return view('backend.products.error');
        }
        
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::find($id);
        $data['name'] = $request->name;
        $data['slug'] = Str::slug($request->name);
        $data['category_id'] = $request->category_id;
        $data['content'] = $request->content;
        $data['origin_price'] = $request->origin_price;
        $data['sale_price'] = $request->sale_price;
        $data['status'] = $request->status;

        $validator = Validator::make($data,
            [
                'name'         => 'required|max:255|min:5|',
                'slug'         => 'required|max:255|min:5|unique:products,slug,'.$product->id,
                'category_id'  => 'integer',
                'content'      => 'required',
                'origin_price' => 'required|numeric',
                'sale_price'   => 'required|numeric',
                // 'images.*'     => 'image|max:2000',
                // 'images'       => 'required',
                'status'       => 'in:1,-1,0',
            ]
            
        );

        if ($validator->fails()){
            return back()
            ->withErrors($validator)
            ->withInput();
        }

        $product_id=$request->get('id');
        $product=Product::find($id);
        $product->name=$request->get('name');
        $product->updated_at=\Carbon\Carbon::now('Asia/Ho_Chi_Minh');
        $product->slug=\Illuminate\Support\Str::slug($request->get('name'));
        $product->category_id=$request->get('category_id');
        $product->origin_price=$request->get('origin_price');
        $product->sale_price=$request->get('sale_price');
        $product->content=$request->get('content');
        $product->status=$request->get('status');
        $save=$product->save();
        $info_img=[];
        if ($request->hasFile('images')){
            $images = $request->file('images');
            foreach ($images as $key => $image){
                $namefile=$image->getClientOriginalName();
                $url='storage/products/'.$namefile;
                Storage::disk('public')->putFileAs('products',$image,$namefile);
                $info_img[]=[
                    'url'=>$url,
                    'name'=>$namefile
                ];
            }
        }else{
            echo 'Lỗi upfile';
        }
        foreach ($info_img as $image) {
            $img = new Image();
            $img->name=$image['name'];
            $img->path=$image['url'];
            $img->product_id=$product_id;
            $img->save();
        }
        if ($save) {
            $request->session()->flash('update_success','edit thành công');
        } else {
            $request->session()->flash('update_error','edit không thành công');
        }
        return redirect()->route('backend.product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       product::destroy($id);
        // Xoá với id tương ứng 
        // Chuyển hướng về trang danh sách
       return redirect()->route('backend.product.index');
   }
   public function editimg($id)
   {
    $images=Image::where('product_id',$id)->get();
    return view('backend.products.editimg')->with([
     'images'=>$images,]);
}



public function deleteimg($id,$product_id)
{

   Image::destroy($id);

   return redirect()->route('backend.product.editimg',$product_id);
}
}
