<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;

class SampleController extends Controller
{

 
    public function sampleQueue(Request $request)
    {
        $data = User::find(1);
        return view('website.pages.samples.Queue');
    }

    public function sampleTracking(Request $request)
    {
        $data = User::find(1);
        return view('website.pages.samples.Tracking');
    }

    public function sampleManage(Request $request)
    {
        $data = User::find(1);
        return view('website.pages.samples.Manage');
    }

    public function sampleBS(Request $request)
    {
        if(Auth::check()){
            $userId = Auth::user()->id;
            $data=User::with('userCardInfo','ShippingInfo')->find($userId);
            return view('website.pages.samples.BillingShipping',compact('data'));
        }
        return redirect('customer-login');
    }

    public function sampleShipping(Request $request)
    {
        $data = User::find(1);
        return view('website.pages.samples.BillingShipping');
    }

    public function samplePersonalInfo(Request $request)
    {
        $data = User::find(1);
        return view('website.pages.samples.PersonalInfo');
    }
    public function samplePersonalPassword(Request $request)
    {
        $data = User::find(1);
        return view('website.pages.samples.PersonalPassword');
    }
    public function sampleOrder(Request $request)
    {
        $data = User::find(1);
        return view('website.pages.samples.sampleOrder');
    }
}
