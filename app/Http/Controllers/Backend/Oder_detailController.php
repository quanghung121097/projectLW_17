<?php

namespace App\Http\Controllers\Backend;
use App\Models\Oder;
use App\Models\Oder_detail;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Oder_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($oder_id)
    {
        $products=Product::get();
        return view('backend.oders.create')->with([
            'products' => $products,
            'oder_id' => $oder_id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'quantity'         => 'required|numeric',
                'product_id'  => 'required|integer',
            ]
            
        );

        if ($validator->fails()){
            return back()
            ->withErrors($validator)
            ->withInput();
        }
        $sp = Product::find($request->get('product_id'));
        $price=$sp->sale_price;
        $oder = new Oder_detail();
        $oder->oder_id = $request->get('oder_id');
        $oder->quantity = $request->get('quantity');
        $oder->product_id = $request->get('product_id');
        $oder->subtotal = ($request->get('quantity'))*$price;
        $oder->save();
        $oder_details=Oder_detail::where('oder_id','=',$request->get('oder_id'))->get();
        $sum=0;
        foreach ($oder_details as $value) {
            $tong=$value->subtotal;
            $sum+=$tong;
        }
        $order=Oder::find($request->get('oder_id'));
        $order->total=$sum+($sum*0.1);
        $order->updated_at=\Carbon\Carbon::now('Asia/Ho_Chi_Minh');
        $order->save();
        return redirect()->route('backend.oder.show',$request->get('oder_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$oder_id)
    {
        Oder_detail::destroy($id);
        $oder_details=Oder_detail::where('oder_id','=',$oder_id)->get();

        $sum=0;
        foreach ($oder_details as $value) {
            $tong=$value->subtotal;
            $sum+=$tong;
        }
        $oder=Oder::find($oder_id);
        $oder->total=$sum+($sum*0.1);
        $oder->updated_at=\Carbon\Carbon::now('Asia/Ho_Chi_Minh');
        $oder->save();
        return redirect()->route('backend.oder.show',$oder_id);
    }
}
