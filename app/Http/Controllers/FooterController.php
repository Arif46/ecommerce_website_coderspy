<?php

namespace App\Http\Controllers;

use App\Idea;
use App\Blogger;
use App\Contact;
use App\Feedback;
use App\AboutMenu;
use App\Distributor;
use App\PressContact;
use App\PressSetting;
use App\ApplicantForm;
use App\PersonalRequest;
use App\RequestFragrance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FooterController extends Controller
{
    public function ContactInfoStore(Request $request)
    {
        //validation
        // return $request;
        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $contact = new Contact();
        $contact->email = $request->email;
        $contact->contact_person = $request->contact_person;
        $contact->position = $request->position;
        $contact->phone = $request->phone;
        $contact->company_name = $request->company_name;
        $contact->postal_area = $request->postal_area;
        $contact->country = $request->country;
        $contact->company_phone = $request->company_phone;
        $contact->company_email = $request->company_email;
        $contact->no_of_employee = $request->no_of_employee;
        $contact->establishment_year = $request->establishment_year;
        $contact->distribution_area = $request->distribution_area;
        $contact->current_delarship = $request->current_delarship;
        $contact->save();
        return redirect()->back()->with('message','Operation successful');
    }
    public function BloggerStore(Request $request)
    {
        //validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $blogger = new Blogger();
        $blogger->name = $request->name;
        $blogger->email = $request->email;
        $blogger->country = $request->country;
        $blogger->blog_link = $request->blog_link;
        $blogger->no_of_readers = $request->no_of_readers;
        $blogger->vlog_link = $request->vlog_link;
        $blogger->no_of_subscribes = $request->no_of_subscribes;
        $blogger->facebook = $request->facebook;
        $blogger->twitter = $request->twitter;
        $blogger->instagram = $request->instagram;
        $blogger->linkedin = $request->linkedin;
        $blogger->pinterest = $request->pinterest;
        $blogger->snapchat = $request->snapchat;
        $blogger->tiktok = $request->tiktok;
        $blogger->youtube = $request->youtube;
        
        $blogger->message = $request->message;

        $portfolio = "";
        if ($request->file('portfolio') != "") {
            $file = $request->file('portfolio');
            $portfolio = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/frontend/footer/', $portfolio);
            $portfolio = 'public/frontend/footer/' . $portfolio;
            $blogger->portfolio = $portfolio;
        }
        $file = "";
        if ($request->file('file') != "") {
            $file1 = $request->file('file');
            $file = md5($file1->getClientOriginalName() . time()) . "." . $file1->getClientOriginalExtension();
            $file1->move('public/frontend/footer/', $file);
            $file = 'public/frontend/footer/' . $file;
            $blogger->file = $file;
        }

        $blogger->save();
        return redirect()->back()->with('message','Operation successful');
    }
    public function SupplierStore(Request $request)
    {
        //validation
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $distributor = new Distributor();
        $distributor->email = $request->email;
        $distributor->contact_person = $request->contact_person;
        $distributor->position = $request->position;
        $distributor->phone = $request->phone;
        $distributor->company_name = $request->company_name;
        $distributor->postal_area = $request->postal_area;
        $distributor->country = $request->country;
        $distributor->company_phone = $request->company_phone;
        $distributor->company_email = $request->company_email;
        $distributor->avg_annual_sale = $request->avg_annual_sale;
        $distributor->no_of_employee = $request->no_of_employee;
        $distributor->establishment_year = $request->establishment_year;
        $distributor->distribution_area = $request->distribution_area;
        $distributor->current_delarship = $request->current_delarship;
        $distributor->captcha = $request->captcha;
        $distributor->save();
        return redirect()->back()->with('message','Operation successful');
    }
    public function IdeaStore(Request $request)
    {
        // return $request;
        //validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $idea = new Idea();
        $idea->name = $request->name;
        $idea->gender = $request->gender;
        $idea->nationality = $request->nationality;
        $idea->phone = $request->phone;
        $idea->email = $request->email;
        $idea->age = $request->age;
        $idea->about_source = $request->about_source;
        $idea->product_using_time = $request->product_using_time;
        $idea->interested_product = $request->interested_product;
        $idea->other_source = $request->other_source;
        $idea->about_new_release = $request->about_new_release;
        $idea->suggest_product = $request->suggest_product;
        $idea->overall_experience = $request->overall_experience;
        $idea->impressed_product = $request->impressed_product;
        $idea->message = $request->message;
        $idea->captcha = $request->captcha;
        $idea->feedback = $request->feedback;
        $idea->save();
        return redirect()->back()->with('message','Operation successful');
    }
    public function PersonalRequestStore(Request $request)
    {
        //validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $idea = new PersonalRequest();
        $idea->name = $request->name;
        $idea->gender = $request->gender;
        $idea->nationality = $request->nationality;
        $idea->phone = $request->phone;
        $idea->email = $request->email;
        $idea->age = $request->age;
        $idea->about_source = $request->about_source;
        $idea->product_using_time = $request->product_using_time;
        $idea->interested_product = $request->interested_product;
        $idea->other_source = $request->other_source;
        $idea->about_new_release = $request->about_new_release;
        $idea->suggest_product = $request->suggest_product;
        $idea->overall_experience = $request->overall_experience;
        $idea->impressed_product = $request->impressed_product;
        $idea->message = $request->message;
        $idea->captcha = $request->captcha;
        // $idea->feedback = $request->feedback;
        $idea->save();
        return redirect()->back()->with('message','Operation successful');
    }
    public function FeedbackStore(Request $request)
    {
        //validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $idea = new Feedback();
        $idea->name = $request->name;
        $idea->gender = $request->gender;
        $idea->nationality = $request->nationality;
        $idea->phone = $request->phone;
        $idea->email = $request->email;
        $idea->age = $request->age;
        $idea->about_source = $request->about_source;
        $idea->product_using_time = $request->product_using_time;
        $idea->interested_product = $request->interested_product;
        $idea->other_source = $request->other_source;
        $idea->about_new_release = $request->about_new_release;
        $idea->suggest_product = $request->suggest_product;
        $idea->overall_experience = $request->overall_experience;
        $idea->impressed_product = $request->impressed_product;
        $idea->message = $request->message;
        $idea->captcha = $request->captcha;
        // $idea->feedback = $request->feedback;
        $idea->save();
        return redirect()->back()->with('message','Operation successful');
    }
    public function RequestFragrance(Request $request)
    {
        //validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $req_freag = new RequestFragrance();
        $req_freag->name = $request->name;
        $req_freag->gender = $request->gender;
        $req_freag->nationality = $request->nationality;
        $req_freag->phone = $request->phone;
        $req_freag->email = $request->email;
        $req_freag->age = $request->age;
        $req_freag->about_source = $request->about_source;
        $req_freag->product_using_time = $request->product_using_time;
        $req_freag->interested_product = $request->interested_product;
        $req_freag->other_source = $request->other_source;
        $req_freag->about_new_release = $request->about_new_release;
        $req_freag->suggest_product = $request->suggest_product;
        $req_freag->overall_experience = $request->overall_experience;
        $req_freag->impressed_product = $request->impressed_product;
        $req_freag->message = $request->message;
        // $req_freag->feedback = $request->feedback;
        $req_freag->save();
        return redirect()->back()->with('message','Operation successful');
    }
    public function ForPressStore(Request $request)
    {
        //validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $idea = new PressContact();
        $idea->name = $request->name;
        $idea->email = $request->email;
        $idea->message = $request->message;
        $idea->save();
        return redirect()->back()->with('message','Operation successful');
    }

    public function BloggerList()
    {
        $bloggers= Blogger::where('active_status',1)->get();
        return view('bloggers.blogger_list', compact('bloggers'));
    }

    public function Applicants()
    {
        $applicants= ApplicantForm::join('career_positions', 'career_positions.id','=', 'applicant_forms.position_id')->select('applicant_forms.*','career_positions.title')->where('applicant_forms.active_status',1)->get();
        return view('applicants.applicant_list', compact('applicants'));
    }
    public function DistributorList()
    {
        $distributors= Distributor::where('active_status',1)->get();
        return view('distributors.distributor_list', compact('distributors'));
    }
    public function IdeaList()
    {
        $ideas= Idea::where('active_status',1)->get();
        return view('idea.idea_list', compact('ideas'));
    }
    public function ContactList()
    {
        $contacts= Contact::where('active_status',1)->get();
        return view('contacts.contact_list', compact('contacts'));
    }
    public function PersonalRequestsList()
    {
        $PersonalRequests= PersonalRequest::where('active_status',1)->get();
        return view('personal_request.personal_request_list', compact('PersonalRequests'));
    }
    public function FeedbackList()
    {
        $feedbacks= Feedback::where('active_status',1)->get();
        return view('feedbacks.feedback_list', compact('feedbacks'));
    }
    public function PressContactList()
    {
        $press_contacts= PressContact::where('active_status',1)->get();
        return view('press_contacts.press_contact_list', compact('press_contacts'));
    }
    public function PressSetting()
    {
        $press_s= PressSetting::where('active_status',1)->first();
        // return $PressSetting;
        return view('for_press.press_setting', compact('press_s'));
    }

    public function PressSettingUpdate(Request $request){
        $press_setting = PressSetting::where('active_status', 1)->first();
        $press_setting->title=$request->title;
        $press_setting->name=$request->name;
        $press_setting->designation=$request->designation;
        $press_setting->company=$request->company;
        $press_setting->email=$request->email;


        $profile = "";
        if ($request->file('profile') != "") {
            $file = $request->file('profile');
            $profile = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/', $profile);
            $profile = '/website/img/' . $profile;
            $press_setting->profile = $profile;
        }
        $banner_image = "";
        if ($request->file('banner_image') != "") {
            $file = $request->file('banner_image');
            $banner_image = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/', $banner_image);
            $banner_image = '/website/img/' . $banner_image;
            $press_setting->banner_image = $banner_image;
        }
        $about_us_image = "";
        if ($request->file('about_us_image') != "") {
            $file = $request->file('about_us_image');
            $about_us_image = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/', $about_us_image);
            $about_us_image = '/website/img/' . $about_us_image;
            $press_setting->about_us_image = $about_us_image;
        }
        $press_setting->number_of_post=$request->number_of_post;
        $press_setting->save();

        flash('Press Settings Update Successfully')->success();
        return back();
    }
    public function AboutUsMenu()
    {
        $about_us_menus= AboutMenu::all();
        // return $PressSetting;
        return view('about_us.about_us_menu', compact('about_us_menus'));
    }

    public function AboutUsMenuUpdate(Request $request, $id){


        $new_serial=AboutMenu::find($request->id);
        $old_serial=$new_serial->serial;
        $current_serial=AboutMenu::where('serial',$request->serial)->first();

        $store = AboutMenu::find($request->id);
        $store->serial = null;
        $store->save();

        $current_serial->serial=$old_serial;
        $current_serial->save();

        $about_us_menu = AboutMenu::find($request->id);
        $about_us_menu->name=$request->name;
        $about_us_menu->serial=$request->serial;
        $about_us_menu->save();


        flash('Menu Update Successfully')->success();
        return back();
    }
    public function MenuActive($id)
    {
        $menu = AboutMenu::findOrfail($id);
        // dd($menu->status);
        $menu->status = 1;
        $menu->update();
        flash('Updated Successfully')->success();
        return back();
    }
    public function MenuDeactive($id)
    {
        $menu = AboutMenu::findOrfail($id);
        $menu->status = 0;
        $menu->update();
        flash('Updated Successfully')->success();
        return back();
    }

}