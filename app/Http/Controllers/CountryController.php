<?php

namespace App\Http\Controllers;

use App\Region;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    public function index(Request $request)
    {
        
        $sort_search =null;
        $countries = Country::join('regions','countries.region_id','regions.id')->select('countries.*','regions.name as region_name')->orderBy('id', 'ASC');
        if ($request->has('search')){
            $sort_search = $request->search;
            $countries = $countries->where('countries.name', 'like', '%'.$sort_search.'%');
        }
        $countries = $countries->paginate(15);
        
        return view('country.index', compact('countries', 'sort_search'));
    }

    public function create()
    {
        $regions = Region::where('active_status',1)->get();
        return view('country.create',compact('regions'));
    }

    public function store(Request $request)
    {
        //validation
        // return $request;
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:countries,name',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $country = new Country();
        $country->name = $request->name;
        $country->code = $request->code;
        $country->nicename = $request->nicename;
        $country->iso3 = $request->iso3;
        $country->numcode = $request->numcode;
        $country->phonecode = $request->phonecode;
        $country->region_id = $request->region_id;
        if($country->save()){
            flash(__('Country has been inserted successfully'))->success();
            return redirect()->route('country');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    public function edit($id)
    {
        $regions = Region::where('active_status',1)->get();
        $country = Country::findOrFail(decrypt($id));
        return view('country.edit', compact('country','regions'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:countries,name,'.$id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $country = Country::findOrFail($id);
        $country->name = $request->name;
        $country->code = $request->code;
        $country->nicename = $request->nicename;
        $country->iso3 = $request->iso3;
        $country->numcode = $request->numcode;
        $country->phonecode = $request->phonecode;
        $country->region_id = $request->region_id;
        $country->active_status = $request->active_status;
        if($country->update()){
            flash(__('Country has been updated successfully'))->success();
            return redirect()->route('country');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
        
    }

    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();
        if($country){
            flash(__('Country has been deleted successfully'))->success();
            return redirect()->route('country');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }
}