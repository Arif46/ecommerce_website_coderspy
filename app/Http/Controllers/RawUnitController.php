<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RawUnit;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Auth;
use PDF;
use App\Http\Controllers\Controller;;
use Mockery\Matcher\Not;
use Maatwebsite\Excel\Facades\Excel; 
use PHPExcel_Worksheet_Drawing;
class RawUnitController extends Controller
{
    public function index(){
    	   $units = RawUnit::all();
          return view('raw_material.unit.index', compact('units'));  
    }
    public function create(){
          return view('raw_material.unit.create');  
    }
    public function store(Request $request){
    	 $validator = Validator::make($request->all(), [
            'name' => 'required',

        ]);
       
        
    	$unit = new RawUnit();
    	$unit->name = $request->unit; 
    	$unit->active_status = $request->active_status; 	
    	$unit->created_by = Auth()->id();  	
        if($unit->save()){
            flash(__('Raw unit has been inserted successfully'))->success();
               return redirect()->route('raw.unit.index');
          }
        flash(__('Something went wrong'))->error();
        return back();
    	
    }
    public function edit($id)
    {
    	$unit = RawUnit::findOrFail(decrypt($id));
        return view('raw_material.unit.edit', compact('unit'));
    }
    public function update(Request $request, $id){
    	 $validator = Validator::make($request->all(), [
            'name' => 'required',

        ]);
       
        $unit = RawUnit::find($id);
    	$unit->name = $request->unit; 
    	$unit->active_status = $request->active_status; 	
    	$unit->updated_by = Auth()->id();  	
        if($unit->save()){
            flash(__('Raw unit has been updated successfully'))->success();
               return redirect()->route('raw.unit.index');
          }
        flash(__('Something went wrong'))->error();
        return back();
    	
    }
    public function delete($id){
    	 $unit = RawUnit::find($id);
    	 $unit->delete();
    	 flash(__('Raw unit Info Deleted successfully'))->success();
        return back();
    }
}
