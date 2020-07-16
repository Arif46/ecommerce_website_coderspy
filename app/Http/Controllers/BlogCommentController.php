<?php

namespace App\Http\Controllers;

use App\BlogComment;
use Illuminate\Http\Request;

class BlogCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $data = new BlogComment;
            $data->blog_id = $request->blog_id;
            $data->user_id = $request->user_id;
            $data->comments = $request->comments;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->url = $request->url;
            $data->is_notify_post_by_mail = $request->is_notify_post_by_mail !=''?1:0;
            $data->is_notify_pcomment_by_mail = $request->is_notify_pcomment_by_mail !=''?1:0;
            $data->save();
            return redirect()->back()->with('success','You commented successfully');
        }catch(\Exception $ex){
            return redirect()->back()->with('error','Opps did not commented ');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
