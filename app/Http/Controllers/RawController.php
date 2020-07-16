<?php

namespace App\Http\Controllers;

use Auth;
use PDF;
use App\Raw;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Mockery\Matcher\Not;
use Maatwebsite\Excel\Facades\Excel; 
use Illuminate\Support\Facades\Crypt;
use PHPExcel_Worksheet_Drawing;
use App\RawMaterialsDetails;
Use App\RawCategory;
Use App\RawUnit;
Use App\Supplier;
class RawController extends Controller
{
    
    public function rawindex()
        {
            $raws = Raw::all();
           
            return view('raw_material.raw.index', compact('raws'));    
        
        }

       public function  rawcreate()
      {
         $categories = RawCategory::all();
         $units = RawUnit::all();
         $suppliers = Supplier::all();
        return view('raw_material.raw.create',compact('categories','units','suppliers'));    
       }


          // public function rawPdf(){
          //   $Raw = Raw::all();
          //    $pdf = PDF::loadView('raw_material.raw_material_pdf', compact('Raw'))->setPaper('a4', 'portrait');  
          //   return $pdf->download('raw material.pdf');


          //  }

       
    public function rawstore(Request $request)

    {
       // dd($request);exit;
            $validator = Validator::make($request->all(), [
            'raw_name' => 'required',
            'serial_no' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'supplier_id' => 'required',
            'supplier_price' => 'required',
        ]);
        $raw = new Raw();
        $raw->raw_id = $request->raw_id;
        $raw->raw_name = $request->raw_name;
        $raw->serial_no = $request->serial_no;
        $raw->model = $request->model;
        $raw->category_id = $request->category_id;
        $raw->price = $request->price;
        $raw->unit = $request->unit;
        $raw->vat = $request->vat;
        $raw->tax = $request->tax;
        if($request->hasFile('image')){
            $raw->image = $request->file('image')->store('uploads/raw');
        }
        $supplier_price = $request->supplier_price;
        $raw->description = $request->description;
        $raw->active_status = $request->active_status;
        $raw->created_by = Auth()->id();
        //$number = count($supplier_id);  
        $result= $raw->save();

         if($request->supplier_id != ""){
            $suppliers = $request->supplier_id;
            $supplierPrice = $request->supplier_price;
            $count=0;
            foreach($suppliers as $supplier){
                $s= new RawMaterialsDetails();
                $s->raw_id= $raw->id;  
                $s->supplier_id= $supplier;  
                $s->supplier_price= $supplierPrice[$count++];  
                $s->save();

            }
         }   
       
        if($result)
            {
                flash(__('Raw has been inserted successfully'))->success();
                return redirect()->route('raw.index');
            }
             flash(__('Something went wrong'))->error();
            return back();
        }

       
    public function rawedit($id)
    {
        $categories = RawCategory::all();
        $units = RawUnit::all();
        $suppliers = Supplier::all();
        $raw = Raw::findOrFail(decrypt($id));
        return view('raw_material.raw.edit', compact('raw','categories','units','suppliers'));    
    }

   
    public function rawupdate(Request $request,$id)
    {

         // dd($request);exit;
            $validator = Validator::make($request->all(), [
            'raw_name' => 'required',
            'serial_no' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'supplier_id' => 'required',
            'supplier_price' => 'required',
        ]);
        $raw = Raw::find($id);
        $raw->raw_id = $request->raw_id;
        $raw->raw_name = $request->raw_name;
        $raw->serial_no = $request->serial_no;
        $raw->model = $request->model;
        $raw->category_id = $request->category_id;
        $raw->price = $request->price;
        $raw->unit = $request->unit;
        $raw->vat = $request->vat;
        $raw->tax = $request->tax;
        if($request->hasFile('image')){
            $raw->image = $request->file('image')->store('uploads/raw');
        }
        $supplier_price = $request->supplier_price;
        $raw->description = $request->description;
        $raw->active_status = $request->active_status;
        $raw->created_by = Auth()->id();
        //$number = count($supplier_id);  
        $result= $raw->save();

         if($request->supplier_id != ""){
            $suppliers = $request->supplier_id;
            $supplierPrice = $request->supplier_price;
            $count=0;
            foreach($suppliers as $supplier){
                $s = RawMaterialsDetails::where('raw_id',$raw->id)
                                        
                                        ->update(['supplier_id'=>$supplier,'supplier_price'=>$supplierPrice[$count++]]);

            }
         }   
       
        if($result)
            {
                flash(__('Raw has been updated successfully'))->success();
                return redirect()->route('raw.index');
            }
             flash(__('Something went wrong'))->error();
            return back();
    }

    public function rawdestroy($id)
    {
        $raw = Raw::find($id);
        $raw->delete();
        flash(__('Raw Info Deleted successfully'))->success();
        return redirect()->route('raw.index');
    }
















}
