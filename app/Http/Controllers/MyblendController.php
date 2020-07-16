<?php

namespace App\Http\Controllers;

use App\BlendSubscription;
use Illuminate\Http\Request;

class MyblendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = BlendSubscription::get();
        return view('myblend.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        if($request->id){
            $myblendSubs = BlendSubscription::first();

            if($request->my_blend_url){
                $myblendSubs->my_blend_url = $request->my_blend_url;
            }
            if($request->subscription_url){
                $myblendSubs->subscription_url = $request->subscription_url;
            }
            if($request->hasFile('my_blend')){
                $blend = $request->my_blend;
                $myblendSubs->my_blend = $blend->store('uploads/blendsub');
            }
            if($request->hasFile('my_blend')){
                $blend = $request->my_blend;
                $myblendSubs->my_blend = $blend->store('uploads/blendsub');
            }
            if($request->subscription){
                $subs = $request->subscription;
                $myblendSubs->subscription = $subs->store('uploads/blendsub');
            }

            if($myblendSubs->save()){
                flash(__('Data updated successfully'))->success();
                return redirect()->back();
            }
        }else{
            $myblendSubs = new BlendSubscription;

            if($request->my_blend_url){
                $myblendSubs->my_blend_url = $request->my_blend_url;
            }
            if($request->subscription_url){
                $myblendSubs->subscription_url = $request->subscription_url;
            }
            if($request->hasFile('my_blend')){
                $blend = $request->my_blend;
                $myblendSubs->my_blend = $blend->store('uploads/blendsub');
            }
            if($request->hasFile('my_blend')){
                $blend = $request->my_blend;
                $myblendSubs->my_blend = $blend->store('uploads/blendsub');
            }
            if($request->subscription){
                $subs = $request->subscription;
                $myblendSubs->subscription = $subs->store('uploads/blendsub');
            }

            if($myblendSubs->save()){
                flash(__('Data updated successfully'))->success();
                return redirect()->back();
            }
            }
        }
    }

