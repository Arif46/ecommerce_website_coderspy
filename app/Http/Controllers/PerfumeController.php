<?php

namespace App\Http\Controllers;

use App\Exports\ExportPerfume;
use App\Imports\ImportPerfume;
use App\Perfume;
use App\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel; 
class PerfumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search =null;
        $brands = Perfume::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $brands = $brands->where('name', 'like', '%'.$sort_search.'%');
        }
        $brands = $brands->paginate(15);
        return view('perfumes.index', compact('brands', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfumes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $brand = new Perfume();
        $brand->name = $request->name;
        $brand->position = $request->position;
        $brand->company  = $request->company ;
        $brand->education  = $request->education ;
        $brand->website  = $request->website ;
        $brand->about  = $request->about ;
        $brand->number_database  = $request->number_database ;
        if($request->hasFile('img')){
            $brand->img = $request->file('img')->store('uploads/perfumes');
        }

        if($brand->save()){
            flash(__('Perfume has been inserted successfully'))->success();
            return redirect()->route('perfumes.index');
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
        $brand = Perfume::findOrFail(decrypt($id));
        return view('perfumes.edit', compact('brand'));
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
        // return $request;
        $brand = Perfume::findOrFail($id);
        $brand->name = $request->name;
        $brand->position = $request->position;
        $brand->company  = $request->company ;
        $brand->education  = $request->education ;
        $brand->website  = $request->website ;
        $brand->about  = $request->about ;
        $brand->number_database  = $request->number_database ;

        if($request->hasFile('img')){
            $brand->img = $request->file('img')->store('uploads/perfumes');
        }
        if($brand->save()){
            flash(__('Perfume has been updated successfully'))->success();
            return redirect()->route('perfumes.index');
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
        $brand = Perfume::findOrFail($id);
        Product::where('perfumer_id', $brand->id)->delete();
        if(Perfume::destroy($id)){
            if($brand->img != null){
                //unlink($brand->logo);
            }
            flash(__('Perfume has been deleted successfully'))->success();
            return redirect()->route('perfumes.index');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    public function import(){
        Excel::import(new ImportPerfume(), request()->file('file'));
        return back();
    }
    public function export(){
        return Excel::download(new ExportPerfume(), 'perfumes.xlsx');
    }
}