<?php

namespace App\Http\Controllers;

use App\CareerPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CareerPositionController extends Controller
{
        public function index(Request $request)
    {
        $sort_search =null;
        $career_positions = CareerPosition::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $career_positions = $career_positions->where('title', 'like', '%'.$sort_search.'%');
        }
        $career_positions = $career_positions->paginate(15);
        return view('career_position.index', compact('career_positions', 'sort_search'));
    }

    public function create()
    {
        return view('career_position.create');
    }


    public function store(Request $request)
    {
        //validation
        // return $request;
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'details' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $career_position = new CareerPosition();
        $career_position->title = $request->title;
        $career_position->details = $request->details;

        if($career_position->save()){
            flash(__('Operation successful'))->success();
            return redirect()->route('career_position');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }



    public function edit($id)
    {
        $career_position = CareerPosition::findOrFail(decrypt($id));
        return view('career_position.edit', compact('career_position'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'details' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $career_position = CareerPosition::findOrFail($id);
        $career_position->title = $request->title;
        $career_position->details = $request->details;
        if($career_position->update()){
            flash(__('Updated successfully'))->success();
            return redirect()->route('career_position');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    public function destroy($id)
    {
        $career_position = CareerPosition::findOrFail($id);
        $career_position->delete();
        if($career_position){
            flash(__('Deleted successfully'))->success();
            return redirect()->route('career_position');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }
}