<?php

namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegionController extends Controller
{
    public function index(Request $request)
    {
        
        $sort_search =null;
        $regions = Region::orderBy('id', 'ASC');
        if ($request->has('search')){
            $sort_search = $request->search;
            $regions = $regions->where('name', 'like', '%'.$sort_search.'%');
        }
        $regions = $regions->paginate(15);
        return view('region.index', compact('regions', 'sort_search'));
    }

    public function create()
    {
        return view('region.create');
    }

    public function store(Request $request)
    {
        //validation
        // return $request;
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:regions,name',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $region = new Region();
        $region->name = $request->name;
        $region->area = $request->area;
        $region->note = $request->note;
        if($region->save()){
            flash(__('Region has been inserted successfully'))->success();
            return redirect()->route('region');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    public function edit($id)
    {
        $region = Region::findOrFail(decrypt($id));
        return view('region.edit', compact('region'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:regions,name,'.$id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $region = Region::findOrFail($id);
        $region->name = $request->name;
        $region->area = $request->area;
        $region->note = $request->note;
        $region->active_status = $request->active_status;
        if($region->update()){
            flash(__('Region has been updated successfully'))->success();
            return redirect()->route('region');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
        
    }

    public function destroy($id)
    {
        $region = Region::findOrFail($id);
        $region->delete();
        if($region){
            flash(__('Region has been deleted successfully'))->success();
            return redirect()->route('region');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }
}