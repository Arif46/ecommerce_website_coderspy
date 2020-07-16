<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('id','DESC')->paginate(20);
        return view('events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
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
            $blog_post = new Event;
            $blog_post->title = $request->title;
            $blog_post->url =   $request->url;
            $blog_post->date = $request->date;
            $blog_post->description = $request->description;
            $blog_post->active_status = $request->active_status;

            if($request->hasFile('img')) {
                $image = $request->img;
                $blog_post->img = $image->store('uploads/events');
            }
            if($request->hasFile('back_img')) {
                $backImage = $request->back_img;
                $blog_post->back_img = $backImage->store('uploads/events');
            }
            $blog_post->save();

            flash(__('Event has been inserted successfully'))->success();
            return redirect()->back();

        }catch (\Exception $ex){
            flash(__('Event has not been inserted successfully'))->success();
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Event::find($id);
        return view('events.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        try {
            if($request->hasFile('img') && $request->hasFile('back_img')){
                $image = $request->image;
                $backImage = $request->back_img;
                Event::where('id',$id)->update([
                    'title' => $request->title,
                    'url' =>  $request->url,
                    'description' => $request->description,
                    'date' => $request->date,
                    'active_status' => $request->active_status,
                    'img' => $image->store('uploads/events'),
                    'back_img' => $backImage->store('uploads/events')
                ]);
            }elseif($request->hasFile('img')){
                $image = $request->img;
                Event::where('id',$id)->update([
                'title' => $request->title,
                'url' =>  $request->url,
                'description' => $request->description,
                'date' => $request->date,
                'active_status' => $request->active_status,
                'img' => $image->store('uploads/events'),
            ]);
            }elseif($request->hasFile('back_img')){
                $backImage = $request->back_img;
                Event::where('id',$id)->update([
                'title' => $request->title,
                'url' =>  $request->url,
                'description' => $request->description,
                'date' => $request->date,
                'active_status' => $request->active_status,
                'back_img' => $backImage->store('uploads/events'),
            ]);
            }
            else{
                Event::where('id',$id)->update([
                    'title' => $request->title,
                    'url' =>  $request->url,
                    'description' => $request->description,
                    'date' => $request->date,
                    'active_status' => $request->active_status,
                ]);
            }
            flash(__('Event has been updated successfully'))->success();
        }catch (\Exception $ex){
            flash(__('Event has not been updated successfully'))->error();
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
        Event::where('id',$id)->delete();
        flash(__('Event has been deleted successfully'))->success();
    }catch (\Exception $ex){
        flash(__('Event post has not been deleted '))->error();
    }
        return redirect()->back();
    }
}
