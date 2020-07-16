<?php

namespace App\Http\Controllers;

use App\Expense;
use App\ExpenseCategory;
use App\ExpenseSubCategory;
use Illuminate\Http\Request;

class ExpenseSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exCategories = ExpenseSubCategory::orderBy('id','DESC')->paginate(15);
        return view('expense.ex_subcategory_index',compact('exCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exCategories = ExpenseCategory::where('active_status',1)->get();
        return view('expense.ex_subcategory_create',compact('exCategories'));
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

            $id=$request->id;
            $exCategory = ExpenseSubCategory::firstOrNew(['id'=>$id]);;
            $exCategory->ex_category_id = $request->ex_category_id;
            $exCategory->name = $request->name;
            $exCategory->serial = $request->serial;
            $exCategory->description = $request->description;
            $exCategory->active_status = $request->active_status;
            $exCategory->save();
            flash(__('Subcategory added successfully'))->success();
        }catch (\Exception $ex){
            flash(__('Opps something wrong'))->error();
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense ,$id)
    {
        $exSubCat = ExpenseSubCategory::find($id);
        $exCategories = ExpenseCategory::where('active_status',1)->get();
        return view('expense.ex_subcategory_edit',compact('exSubCat','exCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            ExpenseSubCategory::where('id',$id)->delete();
            flash(__('Sub-category deleted successfully'))->success();
        }catch (\Exception $ex){
            flash(__('ub-category did not deleted '))->error();
        }
        return redirect()->back();
    }
}
