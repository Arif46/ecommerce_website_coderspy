<?php

namespace App\Http\Controllers;

use App\Expense;
use App\ExpenseCategory;
use App\ExpenseSubCategory;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    


    public function expensestatement()
    {
        
        $expenses = Expense::with('expense_category','expense_subcategory')->orderBy('id','DESC')->paginate(15);
        return view('expense.expense_statement',compact('expenses'));
    }

    public function expenseReport(){

        $expenses = [];
        $categories = ExpenseCategory::get();
        
        return view('expense.expense_statement',compact('categories','expenses'));
    }

    public function getExpanseReport(Request $request){

        $expenses = Expense::with(['expense_category'])
                    ->whereBetween('expense_date', [$request->start_date, $request->start_date])
                    ->where('category_id', $request->category)
                    ->get();
                    
        $categories = ExpenseCategory::get();
        
        return view('expense.expense_statement',compact('categories','expenses'));
    }



    public function index()
    {
        $expenses = Expense::with('expense_category','expense_subcategory')->orderBy('id','DESC')->paginate(15);
        return view('expense.expense_index',compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exCategories = ExpenseCategory::where('active_status',1)->get();
        $exSubCategories = ExpenseSubCategory::where('active_status',1)->get();
        return view('expense.expense_create',compact('exCategories','exSubCategories'));
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
            $exCategory = Expense::firstOrNew(['id'=>$id]);;
            $exCategory->category_id = $request->category_id;
            $exCategory->sub_category_id = $request->sub_category_id;
            $exCategory->expense_date = date('Y-m-d', strtotime($request->expense_date));;
            $exCategory->amount = $request->amount;
            $exCategory->save();
            flash(__('Expense item added successfully'))->success();
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
    public function edit($id)
    {
        $exSubCat = ExpenseSubCategory::find($id);
        $exCategories = ExpenseCategory::where('active_status',1)->get();
        $expense = Expense::find($id);
        return view('expense.expense_edit',compact('exSubCat','exCategories','expense'));
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
            Expense::where('id',$id)->delete();
            flash(__('Expense deleted successfully'))->success();
        }catch (\Exception $ex){
            flash(__('Opps something wrong'))->error();
        }
        return redirect()->back();
    }
    public function getSubSubCategories($id)
    {
        $subcategory = ExpenseSubCategory::
            where("ex_category_id",$id)
            ->get();
        return response()->json($subcategory);
    }
}
