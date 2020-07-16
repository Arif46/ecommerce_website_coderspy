<?php

namespace App\Http\Controllers;

use App\PressList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search =null;
        $press_lists = PressList::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $press_lists = $press_lists->where('name', 'like', '%'.$sort_search.'%');
        }
        $press_lists = $press_lists->paginate(15);
        return view('press_list.index', compact('press_lists', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('press_list.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        // return $request;
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'url' => 'required',
            'image' => 'required',
            'serial_number' => 'required|unique:press_lists,serial_number',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $Press_List = new PressList();
        $Press_List->title = $request->title;
        $Press_List->url = $request->url;
        $Press_List->note  = $request->note ;
        $Press_List->serial_number  = $request->serial_number ;
        
        if($request->hasFile('image')){
            $Press_List->image = $request->file('image')->store('uploads/press_list');
        }

        if($Press_List->save()){
            flash(__('Press has been inserted successfully'))->success();
            return redirect()->route('press_list');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Press_List = PressList::findOrFail(decrypt($id));
        return view('press_list.edit', compact('Press_List'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'url' => 'required',
            'serial_number' => 'required|unique:press_lists,serial_number,'.$id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $Press_List = PressList::findOrFail($id);
        $Press_List->title = $request->title;
        $Press_List->url = $request->url;
        $Press_List->note  = $request->note ;
        $Press_List->serial_number  = $request->serial_number ;
        
        if($request->hasFile('image')){
            $Press_List->image = $request->file('image')->store('uploads/press_list');
        }

        if($Press_List->update()){
            flash(__('Press has been updated successfully'))->success();
            return redirect()->route('press_list');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Press_List = PressList::findOrFail($id);
        $Press_List->delete();
        if($Press_List){
            flash(__('Press has been deleted successfully'))->success();
            return redirect()->route('press_list');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }
}