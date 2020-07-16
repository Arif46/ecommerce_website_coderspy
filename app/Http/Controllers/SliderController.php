<?php

namespace App\Http\Controllers;

use App\FirstSlider;
use Illuminate\Http\Request;
use App\Slider;
use App\HomeSlider;
use DB;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $sliders = Slider::all();
        return view('sliders.index', compact('sliders','homeSlider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sliders.create');
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
        if($request->hasFile('photos')){
            foreach ($request->photos as $key => $photo) {
                $slider = new Slider;
                $slider->title = $request->title;
                $slider->short_description = $request->short_description;
                $slider->serial_no = $request->serial_no;
                $slider->link = $request->url;
                $slider->photo = $photo->store('storage/uploads/sliders');
                $slider->save();
            }
            flash(__('Slider has been inserted successfully'))->success();
        }
        return redirect()->route('home_settings.index');
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
        $slider = Slider::find($id);
        $slider->published = $request->status;
        if($slider->save()){
            return '1';
        }
        else {
            return '0';
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
        $slider = Slider::findOrFail($id);
        if(Slider::destroy($id)){
            //unlink($slider->photo);
            flash(__('Slider has been deleted successfully'))->success();
        }
        else{
            flash(__('Something went wrong'))->error();
        }
        return redirect()->route('home_settings.index');
    }

    public function firstSlider(Request $request){
        $firstSlider = FirstSlider::first();
        if($firstSlider){
            if($request->first_description){
                $firstSlider->first_description = $request->first_description;
            }
            if($request->second_description){
                $firstSlider->second_description = $request->second_description;
            }
                $firstSlider->is_active = $request->is_active;

            if($request->hasFile('first_image')){
                $firstSlider->first_image = $request->file('first_image')->store('uploads/slider/first_slider');
            }

            if($request->hasFile('second_image')){
                $firstSlider->second_image = $request->file('second_image')->store('uploads/slider/first_slider');
            }

            if($request->hasFile('third_image')){
                $firstSlider->third_image = $request->file('third_image')->store('uploads/slider/first_slider');
            }

            if($request->hasFile('forth_image')){
                $firstSlider->forth_image = $request->file('forth_image')->store('uploads/slider/first_slider');
            }
            try {
                $firstSlider->save();
                flash('Logo settings has been updated successfully')->success();
                return redirect()->back();
            }catch(\Exception $ex){
                flash('Logo settings has been updated successfully')->success();
                return redirect()->back();
            }
        }else{
            $firstSlider = new FirstSlider;
            if($request->first_description){
                $firstSlider->first_description = $request->first_description;
            }
            if($request->second_description){
                $firstSlider->second_description = $request->second_description;
            }

                $firstSlider->is_active = $request->is_active;

            if($request->hasFile('first_image')){
                $firstSlider->first_image = $request->file('first_image')->store('uploads/slider/first_slider');
            }

            if($request->hasFile('second_image')){
                $firstSlider->second_image = $request->file('second_image')->store('uploads/slider/first_slider');
            }

            if($request->hasFile('third_image')){
                $firstSlider->third_image = $request->file('third_image')->store('uploads/slider/first_slider');
            }

            if($request->hasFile('forth_image')){
                $firstSlider->forth_image = $request->file('forth_image')->store('uploads/slider/first_slider');
            }

            try {
                $firstSlider->save();
                flash('Logo settings has been updated successfully')->success();
                return redirect()->back();
            }catch(\Exception $ex){
                flash('Logo settings has been updated successfully')->success();
                return redirect()->back();
            }
        }


    }
    public function changeStatus(Request $request){
       $all = DB::table('sliders')->update(['status'=>0]);
       $slider = DB::table('sliders')->where('id',$request->slider_id)->update(['status'=>1]);
        return response()->json(['success'=>'status change successfully','slider'=>$slider,'all'=>$all]);
    }
}
