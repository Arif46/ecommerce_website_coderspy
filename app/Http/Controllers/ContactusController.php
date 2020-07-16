<?php

namespace App\Http\Controllers;

use App\GeneralSetting;
use App\Mail\SubscriptionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Auth;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Validator;

class ContactusController extends Controller
{
    public function index()
    {
        return view('website.pages.contact_us');
    }

    public function sendMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
     try{
         $orderId = '';
         $name = $request->first_name . $request->last_name;
         $email = $request->email;
         $phoneNumber = $request->phone;
         $inquiry = $request->inquiry;
         $subject = $request->subject;
         $message = $request->message;
         $orderId = $request->orderId;
         $generalSettings = GeneralSetting::select('logo', 'email', 'phone', 'site_name')->firstOrFail();
         $logo = $generalSettings->logo;
         $siteEmail = $generalSettings->email;
         $phone = $generalSettings->phone;
         $siteName = $generalSettings->site_name;
         Mail::to('abidhossain835428@gmail.com')->send(new ContactMail($name, $email, $phoneNumber, $inquiry, $subject, $message, $orderId, $siteEmail, $phone, $siteName,$logo));
         return redirect('/')->with('success', 'Your mail placed successfully');
     }catch(\Exception $ex){
         return redirect('/')->with('error', 'Mail did not sent!');
     }
    }
}