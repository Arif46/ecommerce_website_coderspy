<?php

namespace App\Http\Controllers;

use App\Expense;
use App\ExpenseCategory;
use Illuminate\Http\Request;

class ExpenseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exCategories = ExpenseCategory::get();
        return view('expense.ex_category_index',compact('exCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expense.ex_category_create');
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
            $validatedData = $request->validate([
                'name' => 'required|unique:legal_file_types',
            ]);
            $id=$request->id;
            $exCategory = ExpenseCategory::firstOrNew(['id'=>$id]);;
            $exCategory->name = $request->name;
            $exCategory->serial = $request->serial;
            $exCategory->description = $request->description;
            $exCategory->active_status = $request->active_status;
            $exCategory->save();
            flash(__('Category added successfully'))->success();
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
        $expenseCategory = ExpenseCategory::find($id);
        return view('expense.ex_category_edit',compact('expenseCategory'));
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
            ExpenseCategory::where('id',$id)->delete();
            flash(__('Category has been deleted successfully'))->success();
        }catch (\Exception $ex){
            flash(__('Category did not deleted '))->error();
        }
        return redirect()->back();
    }
}
