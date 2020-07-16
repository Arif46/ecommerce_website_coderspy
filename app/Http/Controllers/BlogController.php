<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use Illuminate\Http\Request;
use Auth;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('blogCategory','user')->paginate(20);
        return view('blogs.blog_post_index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogCategory::where('active_status',1)->get();
        return view('blogs.blog_post_create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $id = Auth::user()->id;
            $blog_post = new Blog;
            $blog_post->title = $request->title;
            $blog_post->slug = str_slug($request->title);
            $blog_post->category_id = $request->category_id;
            $blog_post->description = $request->description;
            $blog_post->active_status = $request->active_status;
            $blog_post->created_by = $id;
            $blog_post->updated_by = $id;

            if($request->hasFile('image')) {
                $image = $request->image;
                $blog_post->image = $image->store('uploads/blogs/post');
            }
            $blog_post->save();

            flash(__('Blog post has been inserted successfully'))->success();
            return redirect()->back();

        }catch (\Exception $ex){
            flash(__('Blog post has not been inserted successfully'))->success();
            return redirect()->back();
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = BlogCategory::where('active_status',1)->get();
        $blog = Blog::findOrFail($id);
        return view('blogs.blog_post_edit',compact('categories','blog'));
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

        try {
            if($request->hasFile('image')){
                $image = $request->image;
                Blog::where('id',$id)->update([
                    'title' => $request->title,
                    'slug' =>  str_slug($request->title),
                    'category_id' => $request->category_id,
                    'description' => $request->description,
                    'active_status' => $request->active_status,
                    'created_by' => $userId,
                    'updated_by' => $userId,
                    'image' => $image->store('uploads/blogs/post')
                ]);
            }else{
                Blog::where('id',$id)->update([
                    'title' => $request->title,
                    'slug' => str_slug($request->title),
                    'category_id' => $request->category_id,
                    'description' => $request->description,
                    'active_status' => $request->active_status,
                    'created_by' => $userId,
                    'updated_by' => $userId,
                ]);
            }
            flash(__('Blog post has been updated successfully'))->success();
        }catch (\Exception $ex){
            flash(__('Blog post has not been updated successfully'))->error();
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
            Blog::where('id',$id)->delete();
            flash(__('Blog post has been deleted successfully'))->success();
        }catch (\Exception $ex){
            flash(__('Blog post has not been deleted '))->error();
        }
        return redirect()->back();
    }
}
