<?php

namespace App\Http\Controllers;

use ImageOptimizer;
use App\GeneralSetting;
use App\BackgroundSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\BusinessSettingsController;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generalsetting = GeneralSetting::first();
        return view("general_settings.index", compact("generalsetting"));
    }
    

    public function logo()
    {
        $generalsetting = GeneralSetting::first();
        return view("general_settings.logo", compact("generalsetting"));
    }

    //updates the logo and favicons of the system
    public function storeLogo(Request $request)
    {
        $generalsetting = GeneralSetting::first();

        if($request->hasFile('logo')){
            $generalsetting->logo = $request->file('logo')->store('uploads/logo');
            //ImageOptimizer::optimize(base_path('public/').$generalsetting->logo);
        }

        if($request->hasFile('admin_logo')){
            $generalsetting->admin_logo = $request->file('admin_logo')->store('uploads/admin_logo');
            //ImageOptimizer::optimize(base_path('public/').$generalsetting->admin_logo);
        }

        if($request->hasFile('favicon')){
            $generalsetting->favicon = $request->file('favicon')->store('uploads/favicon');
            //ImageOptimizer::optimize(base_path('public/').$generalsetting->favicon);
        }

        if($request->hasFile('admin_login_background')){
            $generalsetting->admin_login_background = $request->file('admin_login_background')->store('uploads/admin_login_background');
            //ImageOptimizer::optimize(base_path('public/').$generalsetting->admin_login_background);
        }

        if($request->hasFile('admin_login_sidebar')){
            $generalsetting->admin_login_sidebar = $request->file('admin_login_sidebar')->store('uploads/admin_login_sidebar');
            //ImageOptimizer::optimize(base_path('public/').$generalsetting->admin_login_sidebar);
        }

        if($generalsetting->save()){
            flash('Logo settings has been updated successfully')->success();
            return redirect()->route('generalsettings.logo');
        }
        else{
            flash('Something went wrong')->error();
            return back();
        }
    }

    public function color()
    {
        $generalsetting = GeneralSetting::first();
        return view("general_settings.color", compact("generalsetting"));
    }

    //updates system ui color
    public function storeColor(Request $request)
    {
        $generalsetting = GeneralSetting::first();
        $generalsetting->frontend_color = $request->frontend_color;

        if($generalsetting->save()){
            flash('Color settings has been updated successfully')->success();
            return redirect()->route('generalsettings.color');
        }
        else{
            flash('Something went wrong')->error();
            return back();
        }
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
        //
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
        $generalsetting = GeneralSetting::first();
        $generalsetting->site_name = $request->name;
        $generalsetting->address = $request->address;
        $generalsetting->phone = $request->phone;
        $generalsetting->email = $request->email;
        $generalsetting->description = $request->description;
        $generalsetting->facebook = $request->facebook;
        $generalsetting->instagram = $request->instagram;
        $generalsetting->twitter = $request->twitter;
        $generalsetting->youtube = $request->youtube;
        $generalsetting->google_plus = $request->google_plus;
        $generalsetting->linkedin = $request->linkedin;
        $generalsetting->pinterest = $request->pinterest;
        $generalsetting->snapchart = $request->snapchart;
        $generalsetting->tiktok = $request->tiktok;
        $generalsetting->subs_head = $request->subs_head;
        $generalsetting->subs_middle = $request->subs_middle;
        $generalsetting->subs_bottom = $request->subs_bottom;

        if($generalsetting->save()){
            $businessSettingsController = new BusinessSettingsController;
            $businessSettingsController->overWriteEnvFile('APP_NAME',$request->name);

            flash('GeneralSetting has been updated successfully')->success();
            return redirect()->route('generalsettings.index');
        }
        else{
            flash('Something went wrong')->error();
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
        //
    }

    public function BackgroundImage()
    {
        $Back_Img = BackgroundSetting::first();
        return view("background_image.index", compact("Back_Img"));
    }
    public function BackgroundImageUpdate(Request $request)
    {
        $Back_Img = BackgroundSetting::first();

        $image = "";
        if ($request->file('image') != "") {
            $file = $request->file('image');
            $image = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/pattern/', $image);
            $image = 'public/website/img/pattern/' . $image;
            $Back_Img->image = $image;
        }
        if($Back_Img->save()){
            flash('Background Image has been updated successfully')->success();
            return redirect()->back();
        }
        else{
            flash('Something went wrong')->error();
            return back();
        }
    }
}