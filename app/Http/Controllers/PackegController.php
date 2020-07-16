<?php

namespace App\Http\Controllers;

use App\Packeg;
use Illuminate\Http\Request;

class PackegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packegs = Packeg::orderBy('id','DESC')->get();
        return  view('packeg.index',compact('packegs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $defualt = Packeg::where('type',1)->get();
        return  view('packeg.create',compact('defualt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $packeg = new Packeg;
            $packeg->name = $request->name;
            $packeg->product_count = $request->product_count;
            $packeg->description = $request->description;
            $packeg->regular_price = $request->regular_price;
            $packeg->offer_price = $request->offer_price != ''?$request->offer_price:$request->regular_price;
            $packeg->status = $request->status;
            $packeg->type = $request->type == 1?1:0;
            $packeg->save();
            flash(__('Packeg created successfully'))->success();

        }catch (\Exception $ex){
            flash(__('Packeg did not created'))->error();
        }
        return redirect()->back();
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

        $packeg = Packeg::findOrFail($id);

        $defualt = Packeg::where('type',1)->get();
        return view('packeg.edit',compact('packeg','defualt'));
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
        try {
            $packeg = Packeg::where('id',$request->id)->update([
                'name'         => $request->name,
                'type'         => $request->type,
                'description'  => $request->description,
                'product_count'=> $request->product_count,
                'regular_price'=> $request->regular_price,
                'offer_price' => $request->offer_price != ''?$request->offer_price:$request->regular_price,
                'status'       => $request->status
            ]);

            flash(__('Packeg updated successfully'))->success();
        }catch (\Exception $ex){

            flash(__('Packeg did not updated successfully'))->success();
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Packeg::where('id',$id)->delete();
            flash(__('Packeg has been deleted successfully'))->success();
        }catch (\Exception $ex){
            flash(__('Packeg did not deleted '))->error();
        }
        return redirect()->back();
    }
}
