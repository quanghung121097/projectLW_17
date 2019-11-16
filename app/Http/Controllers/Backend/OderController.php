<?php

namespace App\Http\Controllers\Backend;
use App\Models\Oder;
use App\Models\Oder_detail;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $oders=Oder::where('status','=','0')->orWhere('status','=','1')->orderBy('updated_at','desc')->paginate(10);
        
        return view('backend.oders.index')->with([
            'oders'=> $oders,
        ]);
        
    }
    public function finish()
    {   
        $oders=Oder::where('status','=','2')->orderBy('updated_at','desc')->paginate(10);
        
        return view('backend.oders.index')->with([
            'oders'=> $oders,
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oder=Oder::find($id);
        $oder_details=Oder_detail::with('product')->where('oder_id','=',$id)->paginate(10);
        return view('backend.oders.show')->with([
            'oder_details' => $oder_details,
            'oder' => $oder,
        ]);

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
    public function destroy($id)
    {
        //
    }
    public function udstatus($id)
    {
        $oder=Oder::find($id);
        if ($oder->status==0) {
            $oder->status=1;
            $oder->updated_at=\Carbon\Carbon::now('Asia/Ho_Chi_Minh');
            $oder->save();
            return redirect()->route('backend.oder.index');
            return;
        } 
        if($oder->status==1) {
            $oder->status=2;
            $oder->updated_at=\Carbon\Carbon::now('Asia/Ho_Chi_Minh');
            $oder->save();
            return redirect()->route('backend.oder.index');
            return;
            
        }

        
    }
}
