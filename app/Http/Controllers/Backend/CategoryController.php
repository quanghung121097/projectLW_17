<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(10);
        return view('backend.categories.index')->with([
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::get();
        $user=Auth::user();

        if ($user->can('create',$user)) {
            return view('backend.categories.create')->with([
                'categories' => $categories
            ]);
        }else {
            return view('backend.categories.error');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
     $logo = $request->file('logo');
     $namefile=$logo->getClientOriginalName();
     $url='storage/logo/'.$namefile;
     Storage::disk('public')->putFileAs('logo',$logo,$namefile);
     $category = new Category();
     $category->logo=$url;
     $category->name = $request->get('name');
     $category->slug = \Illuminate\Support\Str::slug($request->get('name'));
     $category->depth = $request->get('depth');
     $category->parent_id = $request->get('parent_id');

     $save=$category->save();
     if ($save) {
        $request->session()->flash('success','Thêm mới thành công');
    } else {
        $request->session()->flash('error','Thêm mới không thành công');
    }
    return redirect()->route('backend.category.index');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $user=Auth::user();
        $categories = Category::get();
        
        if ($user->can('update', $category)) {
            return view('backend.categories.edit')->with([
             'category'=>$category,
             'categories'=>$categories,

         ]);
        }else {
            return view('backend.categories.error');
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
        $category=category::find($id);
        $data['name'] = $request->name;
        $data['slug'] = Str::slug($request->name);
        $data['parent_id'] = $request->parent_id;
        $data['depth'] = $request->depth;
        $data['logo'] = $request->logo;

        $validator = Validator::make($data,
            [
                'name'         => 'required|max:255|min:2',
                'parent_id'   => 'required|integer',
                'logo'   =>  'required|image|max:2000',
                'depth' => 'required|numeric',
                'slug'         => 'required|max:255|min:2|unique:categories,slug,'.$category->id,
            ]
            
        );

        if ($validator->fails()){
            return back()
            ->withErrors($validator)
            ->withInput();
        }
        $logo = $request->file('logo');
        $namefile=$logo->getClientOriginalName();
        $url='storage/logo/'.$namefile;
        Storage::disk('public')->putFileAs('logo',$logo,$namefile);

        
        $category->logo=$url;
        $category->name=$request->get('name');
        $category->slug=\Illuminate\Support\Str::slug($request->get('name'));
        $category->parent_id=$request->get('parent_id');
        $category->depth=$request->get('depth');
        $category->updated_at=\Carbon\Carbon::now('Asia/Ho_Chi_Minh');
        $save=$category->save();
        if ($save) {
            $request->session()->flash('update_success','edit thành công');
        } else {
            $request->session()->flash('update_error','edit không thành công');
        }
        return redirect()->route('backend.category.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       category::destroy($id);
       return redirect()->route('backend.category.index');
   }
}
