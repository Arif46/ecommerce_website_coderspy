<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RawCategory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use App\BankAccount;
use App\BankTransaction;
use App\IncomeTax;
use Auth;
use PDF;
use App\Http\Controllers\Controller;;
use Mockery\Matcher\Not;
use Maatwebsite\Excel\Facades\Excel; 
use PHPExcel_Worksheet_Drawing;
class RawCategoryController extends Controller
{
    public function index(){
    	 $categories = RawCategory::all();
          return view('raw_material.category.index', compact('categories'));  
    }
    public function create(){
          return view('raw_material.category.create');  
    }
    public function store(Request $request){
    	 $validator = Validator::make($request->all(), [
            'name' => 'required',

        ]);
       
        
    	$category = new RawCategory();
    	$category->name = $request->category; 
    	$category->active_status = $request->active_status; 	
    	$category->created_by = Auth()->id();  	
        if($category->save()){
            flash(__('Raw Category has been inserted successfully'))->success();
               return redirect()->route('raw.category.index');
          }
        flash(__('Something went wrong'))->error();
        return back();
    	
    }
    public function edit($id)
    {
    	$category = RawCategory::findOrFail(decrypt($id));
        return view('raw_material.category.edit', compact('category'));
    }
    public function update(Request $request, $id){
    	 $validator = Validator::make($request->all(), [
            'name' => 'required',

        ]);
       
        $category = RawCategory::find($id);
    	$category->name = $request->category; 
    	$category->active_status = $request->active_status; 	
    	$category->updated_by = Auth()->id();  	
        if($category->save()){
            flash(__('Raw Category has been updated successfully'))->success();
               return redirect()->route('raw.category.index');
          }
        flash(__('Something went wrong'))->error();
        return back();
    	
    }
    public function delete($id){
    	 $category = RawCategory::find($id);
    	 $category->delete();
    	 flash(__('Raw category Info Deleted successfully'))->success();
        return back();
    }
}
