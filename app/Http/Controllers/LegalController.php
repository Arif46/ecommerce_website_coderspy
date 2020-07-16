<?php

namespace App\Http\Controllers;

use App\LegalFileManager;
use App\LegalFileType;
use Illuminate\Http\Request;
use Auth;
class LegalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $legals = LegalFileType::get();
        return view('legal.file_types_index',compact('legals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('legal.file_types_create');
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
                'name' => 'required|unique:legal_file_types|max:30',
            ]);
            $legal_type = new LegalFileType;
            $legal_type->name = $request->name;
            $legal_type->status = $request->status;
            $legal_type->save();
            flash(__('Legal type added successfully'))->success();
        }catch (\Exception $ex){
            flash(__('Opps something wrong'))->error();
        }
        return redirect()->back();

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
        $legal = LegalFileType::findOrFail($id);

        return view('legal.file_types_edit',compact('legal'));
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
        try {
            LegalFileType::where('id',$id)->update([
                'name'                => $request->name,
                'status'       => $request->status
            ]);
            flash(__('Packeg updated successfully'))->success();
        }catch (\Exception $ex){
            flash(__('Packeg did not updated successfully'))->error();
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            LegalFileType::where('id',$id)->delete();
            flash(__('Legal type has been deleted successfully'))->success();
        }catch (\Exception $ex){
            flash(__('Legal type did not deleted '))->error();
        }
        return redirect()->back();
    }
}
