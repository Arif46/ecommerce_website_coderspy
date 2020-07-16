<?php

namespace App\Http\Controllers;

use App\ProductPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductPlanController extends Controller
{
    // product plan

    public function index(){
        $productPlans = ProductPlan::latest()->paginate(15);
        return view('subscription_queue.product_plan',compact('productPlans'));
    }

    public function addProductPlan(){
        return view('subscription_queue.add_product_plan');
    }

    public function storeProductPlan(Request $request){
        $productPlan = new ProductPlan();
        $productPlan->name = $request->name;
        $productPlan->qty = $request->qty;

        if ($productPlan->save()) {
            flash('ProductPlan plan added successfully')->success();
            return redirect()->route('product.plan.add');
        }
        else{
            flash('Something went wrong')->danger();
            return back();
        }
    }

    public function editProductPlan($id){
        $plan = ProductPlan::findOrFail(decrypt($id));
        return view('subscription_queue.edit_product_plan', compact('plan'));
    }

    public function updateProductPlan(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'qty' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $productPlan = ProductPlan::find($id);
        $productPlan->name = $request->name;
        $productPlan->qty = $request->qty;

        if ($productPlan->save()) {
            flash('Product plan update successfully')->success();
            return redirect()->route('product.plan');
        }
        else{
            flash('Something went wrong')->danger();
            return back();
        }
    }
    public function destroyProductPlan($id)
    {
        $plan = ProductPlan::findOrFail($id);
        $plan->delete();
        if($plan){
            flash(__('Product plan deleted successfully'))->success();
            return redirect()->route('product.plan');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }
}
