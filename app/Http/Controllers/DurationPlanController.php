<?php

namespace App\Http\Controllers;

use App\DurationPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DurationPlanController extends Controller
{
    public function index(){
        $durationPlans = DurationPlan::latest()->paginate(15);
        return view('subscription_queue.duration_plan',compact('durationPlans'));
    }

    public function addDuration(){
        return view('subscription_queue.add_duration_plan');
    }

    public function storeDuration(Request $request){
        $durationPlan = new DurationPlan();
        $durationPlan->name = $request->name;
        $durationPlan->save_percent = $request->save_percent;

        if ($durationPlan->save()) {
            flash('Duration plan added successfully')->success();
            return redirect()->route('duration.add');
        }
        else{
            flash('Something went wrong')->danger();
            return back();
        }
    }

    public function editDuration($id){
        $plan = DurationPlan::findOrFail(decrypt($id));
        return view('subscription_queue.edit_duration_plan', compact('plan'));
    }

    public function updateDuration(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'save_percent' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $durationPlan = DurationPlan::find($id);
        $durationPlan->name = $request->name;
        $durationPlan->save_percent = $request->save_percent;

        if ($durationPlan->save()) {
            flash('Duration plan update successfully')->success();
            return redirect()->route('duration.plan');
        }
        else{
            flash('Something went wrong')->danger();
            return back();
        }
    }
    public function destroyDuration($id)
    {
        $plan = DurationPlan::findOrFail($id);
        $plan->delete();
        if($plan){
            flash(__('Duration plan deleted successfully'))->success();
            return redirect()->route('duration.plan');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }


}
