<?php

namespace App\Http\Controllers;

use App\BlogCategory;
use Illuminate\Http\Request;
use Auth;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_categories = BlogCategory::with('user')->paginate(15);
        return view('blogs.category_index',compact('blog_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.category_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $data = new BlogCategory;
        $data->category_name = $request->category_name;
        $data->active_status = $request->active_status;
        $data->created_by = $id;
        $data->updated_by = $id;
        $data->save();
        flash(__('Blog category has been inserted successfully'))->success();
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
        $data = BlogCategory::where('id',$id)->firstOrFail();
        return view('blogs.category_edit',compact('data'));
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
        $userId = Auth::user()->id;

        BlogCategory::where('id',$id)->update([
            'category_name' => $request->category_name,
            'active_status' => $request->active_status,
            'created_by' => $userId,
            'updated_by' => $userId,
        ]);

        flash(__('Blog category has been updated successfully'))->success();

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
        try{
            BlogCategory::where('id',$id)->delete();
            flash(__('Blog category has been deleted successfully'))->success();
        }catch (\Exception $ex){
            flash(__('Opps blog category has not been deleted !'))->error();
        }
        return redirect()->back();
    }
}
