<?php

namespace App\Http\Controllers;

use App\About;
use App\Career;
use App\AllPage;
use App\HeaderTop;
use App\CareerPage;
use App\ConsumerRight;
use App\RequestFragrance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AllPageController extends Controller
{
   public function TermsCondition()
    {

        $policy = AllPage::where('slug','=','terms_condition')->first();
        // return $policy;
        return view('policies.policy_page', compact('policy'));
    }
   public function PrivacyPolicy()
    {

        $policy = AllPage::where('slug','=','privacy_policy')->first();
        // return $policy;
        return view('policies.policy_page', compact('policy'));
    }
   public function ShippingPolicy()
    {

        $policy = AllPage::where('slug','=','shipping_policy')->first();
        // return $policy;
        return view('policies.policy_page', compact('policy'));
    }
   public function RefundPolicy()
    {

        $policy = AllPage::where('slug','=','refund_policy')->first();
        // return $policy;
        return view('policies.policy_page', compact('policy'));
    }
   public function OnlineShopping()
    {

        $policy = AllPage::where('slug','=','online_shopping')->first();
        // return $policy;
        return view('policies.policy_page', compact('policy'));
    }
   public function HowToShop()
    {

        $policy = AllPage::where('slug','=','how_to_shop')->first();
        // return $policy;
        return view('policies.policy_page', compact('policy'));
    }
   public function ConsumerRights()
    {

        $consumer_right = ConsumerRight::where('active_status',1)->first();
        // return $policy;
        return view('consumer_right.consumer_right', compact('consumer_right'));
    }
   public function About()
    {

        $about = About::where('active_status',1)->first();
        // return $policy;
        return view('about.about', compact('about'));
    }
   public function CharitableGiving()
    {

        $policy = AllPage::where('slug','=','charitable_giving')->first();
        // return $policy;
        return view('policies.policy_page', compact('policy'));
    }
   public function OnlineCommunity()
    {

        $policy = AllPage::where('slug','=','online_community')->first();
        // return $policy;
        return view('policies.policy_page', compact('policy'));
    }
   public function Authentication()
    {

        $policy = AllPage::where('slug','=','authentication')->first();
        // return $policy;
        return view('policies.policy_page', compact('policy'));
    }
   public function PriceMatch()
    {

        $policy = AllPage::where('slug','=','price_match')->first();
        // return $policy;
        return view('policies.policy_page', compact('policy'));
    }
   public function RewardPoints()
    {

        $policy = AllPage::where('slug','=','reward_points')->first();
        // return $policy;
        return view('policies.policy_page', compact('policy'));
    }
   public function RequestFragrance()
    {
        $req_freags= RequestFragrance::where('active_status',1)->get();
        return view('req_fragrance.req_frag', compact('req_freags'));
    }
   public function SubscriptionAgreement()
    {

        $policy = AllPage::where('slug','=','subscription_agreement')->first();
        // return $policy;
        return view('policies.policy_page', compact('policy'));
    }
   public function Accessibility()
    {

        $policy = AllPage::where('slug','=','accessibility')->first();
        // return $policy;
        return view('policies.policy_page', compact('policy'));
    }
   public function UserAgreement()
    {

        $policy = AllPage::where('slug','=','user_agreement')->first();
        // return $policy;
        return view('policies.policy_page', compact('policy'));
    }
   public function HeaderTop()
    {

        $HeaderTops = HeaderTop::where('active_status',1)->first();
        // return $policy;
        return view('policies.header_top', compact('HeaderTops'));
    }

    //updates the policy pages
    public function PolicySubmit(Request $request){
        $policy = AllPage::where('slug', $request->slug)->first();
        $policy->details = $request->details;
        $policy->save();

        flash($request->name.' updated successfully');
        return back();
    }
    //updates the Header Top
    public function HeaderTopSubmit(Request $request){
        $HeaderTop = HeaderTop::where('active_status', 1)->first();
        $HeaderTop->title = $request->title;
        $HeaderTop->details = $request->details;
        $HeaderTop->save();

        flash($request->name.' updated successfully');
        return back();
    }
    //updates the cookies pages
    public function cookies(){
        $cookies = AllPage::where('slug','=','cookies')->first();
        return view('cookies.cookies', compact('cookies'));
    }
    public function cookiesUpdate(Request $request){
        $policy = AllPage::where('slug', $request->slug)->first();
        $policy->details = $request->details;
        $policy->save();

        flash($request->name.' updated successfully');
        return back();
    }
    public function ConsumerRightsUpdate(Request $request){

        $validator = Validator::make($request->all(), [
            'region' => 'required|max:200',
            'details' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $Consumer_Right = ConsumerRight::where('id', $request->id)->first();
        $Consumer_Right->region = $request->region;

        $img = "";
        if ($request->file('img') != "") {
            $file = $request->file('img');
            $img = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/uploads/consumer_rights/', $img);
            $img = 'public/uploads/consumer_rights/' . $img;
            $Consumer_Right->img = $img;
        }
        $Consumer_Right->details = $request->details;
        $Consumer_Right->save();

        flash($request->name.' updated successfully');
        return back();
    }
    
    public function Careers()
    {
        $career = CareerPage::where('active_status',1)->first();
        // return $policy;
        return view('career.career', compact('career'));
    }
    public function CareerUpdate(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200',
            'details' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $career_page = CareerPage::where('id', $request->id)->first();
        $career_page->title = $request->title;

        $img = "";
        if ($request->file('img') != "") {
            $file = $request->file('img');
            $img = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/uploads/career/', $img);
            $img = 'public/uploads/career/' . $img;
            $career_page->img = $img;
        }
        $career_page->details = $request->details;
        $career_page->save();

        flash($request->name.' updated successfully');
        return back();
    }
    public function AboutSubmit(Request $request){


        $about = About::where('active_status',1)->first();
        
//        $ultra_beauty_image = "";
        if ($request->file('ultra_beauty_image') != "") {
            $file = $request->file('ultra_beauty_image');
            $ultra_beauty_image = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $ultra_beauty_image);
            $ultra_beauty_image = 'public/website/img/about/' . $ultra_beauty_image;
            $about->ultra_beauty_image = $ultra_beauty_image;
        }
        $about->mission_title = $request->mission_title;
        $about->mission_text = $request->mission_text;
        $about->vision_title = $request->vision_title;
        $about->vision_text = $request->vision_text;
        $about->value_title = $request->value_title;
        $about->value_text = $request->value_text;
        $mission_img1 = "";
        if ($request->file('mission_img1') != "") {
            $file = $request->file('mission_img1');
            $mission_img1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $mission_img1);
            $mission_img1 = 'public/website/img/about/' . $mission_img1;
            $about->mission_img1 = $mission_img1;
        }

        $mission_img2 = "";
        if ($request->file('mission_img2') != "") {
            $file = $request->file('mission_img2');
            $mission_img2 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $mission_img2);
            $mission_img2 = 'public/website/img/about/' . $mission_img2;
            $about->mission_img2 = $mission_img2;
        }
        
        $about->story_text = $request->story_text;

        $story_img1 = "";
        if ($request->file('story_img1') != "") {
            $file = $request->file('story_img1');
            $story_img1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $story_img1);
            $story_img1 = 'public/website/img/about/' . $story_img1;
            $about->story_img1 = $story_img1;
        }
        $about->story_title1 = $request->story_title1;
        $about->story_text1 = $request->story_text1;
        $story_img2 = "";
        if ($request->file('story_img2') != "") {
            $file = $request->file('story_img2');
            $story_img2 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $story_img2);
            $story_img2 = 'public/website/img/about/' . $story_img2;
            $about->story_img2 = $story_img2;
        }
        $about->story_title2 = $request->story_title2;
        $about->story_text2 = $request->story_text2;
        $story_img3 = "";
        if ($request->file('story_img3') != "") {
            $file = $request->file('story_img3');
            $story_img3 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $story_img3);
            $story_img3 = 'public/website/img/about/' . $story_img3;
            $about->story_img3 = $story_img3;
        }
        $about->story_title3 = $request->story_title3;
        $about->story_text3 = $request->story_text3;
        $story_img4 = "";
        if ($request->file('story_img4') != "") {
            $file = $request->file('story_img4');
            $story_img4 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $story_img4);
            $story_img4 = 'public/website/img/about/' . $story_img4;
            $about->story_img4 = $story_img4;
        }
        $about->story_title4 = $request->story_title4;
        $about->story_text4 = $request->story_text4;

        $about->guest_text = $request->guest_text;

        $guest_img1 = "";
        if ($request->file('guest_img1') != "") {
            $file = $request->file('guest_img1');
            $guest_img1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $guest_img1);
            $guest_img1 = 'public/website/img/about/' . $guest_img1;
            $about->guest_img1 = $guest_img1;
        }

        $guest_img2 = "";
        if ($request->file('guest_img2') != "") {
            $file = $request->file('guest_img2');
            $guest_img2 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $guest_img2);
            $guest_img2 = 'public/website/img/about/' . $guest_img2;
            $about->guest_img2 = $guest_img2;
        }
        
        $guest_img3 = "";
        if ($request->file('guest_img3') != "") {
            $file = $request->file('guest_img3');
            $guest_img3 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $guest_img3);
            $guest_img3 = 'public/website/img/about/' . $guest_img3;
            $about->guest_img3 = $guest_img3;
        }

        $about->associate_text = $request->associate_text;

        
        
        $associate_img1 = "";
        if ($request->file('associate_img1') != "") {
            $file = $request->file('associate_img1');
            $associate_img1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $associate_img1);
            $associate_img1 = 'public/website/img/about/' . $associate_img1;
            $about->associate_img1 = $associate_img1;
        }
        
        $associate_img2 = "";
        if ($request->file('associate_img2') != "") {
            $file = $request->file('associate_img2');
            $associate_img2 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $associate_img2);
            $associate_img2 = 'public/website/img/about/' . $associate_img2;
            $about->associate_img2 = $associate_img2;
        }
        
        $associate_img3 = "";
        if ($request->file('associate_img3') != "") {
            $file = $request->file('associate_img3');
            $associate_img3 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $associate_img3);
            $associate_img3 = 'public/website/img/about/' . $associate_img3;
            $about->associate_img3 = $associate_img3;
        }
        
        $associate_img4 = "";
        if ($request->file('associate_img4') != "") {
            $file = $request->file('associate_img4');
            $associate_img4 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $associate_img4);
            $associate_img4 = 'public/website/img/about/' . $associate_img4;
            $about->associate_img4 = $associate_img4;
        }
        
        $associate_img5 = "";
        if ($request->file('associate_img5') != "") {
            $file = $request->file('associate_img5');
            $associate_img5 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $associate_img5);
            $associate_img5 = 'public/website/img/about/' . $associate_img5;
            $about->associate_img5 = $associate_img5;
        }
        
        $associate_img6 = "";
        if ($request->file('associate_img6') != "") {
            $file = $request->file('associate_img6');
            $associate_img6 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $associate_img6);
            $associate_img6 = 'public/website/img/about/' . $associate_img6;
            $about->associate_img6 = $associate_img6;
        }
        
        $associate_img7 = "";
        if ($request->file('associate_img7') != "") {
            $file = $request->file('associate_img7');
            $associate_img7 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $associate_img7);
            $associate_img7 = 'public/website/img/about/' . $associate_img7;
            $about->associate_img7 = $associate_img7;
        }

        $about->communitie_text = $request->communitie_text;

        $communitie_img1 = "";
        if ($request->file('communitie_img1') != "") {
            $file = $request->file('communitie_img1');
            $communitie_img1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $communitie_img1);
            $communitie_img1 = 'public/website/img/about/' . $communitie_img1;
            $about->communitie_img1 = $communitie_img1;
        }
        
        $communitie_img2 = "";
        if ($request->file('communitie_img2') != "") {
            $file = $request->file('communitie_img2');
            $communitie_img2 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $communitie_img2);
            $communitie_img2 = 'public/website/img/about/' . $communitie_img2;
            $about->communitie_img2 = $communitie_img2;
        }

        
        $about->communitie_text2 = $request->communitie_text2;

        $communitie_img3 = "";
        if ($request->file('communitie_img3') != "") {
            $file = $request->file('communitie_img3');
            $communitie_img3 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $communitie_img3);
            $communitie_img3 = 'public/website/img/about/' . $communitie_img3;
            $about->communitie_img3 = $communitie_img3;
        }
        
        $communitie_img4 = "";
        if ($request->file('communitie_img4') != "") {
            $file = $request->file('communitie_img4');
            $communitie_img4 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $communitie_img4);
            $communitie_img4 = 'public/website/img/about/' . $communitie_img4;
            $about->communitie_img4 = $communitie_img4;
        }

        $communitie_img5 = "";
        if ($request->file('communitie_img5') != "") {
            $file = $request->file('communitie_img5');
            $communitie_img5 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $communitie_img5);
            $communitie_img5 = 'public/website/img/about/' . $communitie_img5;
            $about->communitie_img5 = $communitie_img5;
        }
        
        $communitie_img6 = "";
        if ($request->file('communitie_img6') != "") {
            $file = $request->file('communitie_img6');
            $communitie_img6 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $communitie_img6);
            $communitie_img6 = 'public/website/img/about/' . $communitie_img6;
            $about->communitie_img6 = $communitie_img6;
        }
        $about->communitie_text3 = $request->communitie_text3;

        $communitie_img7 = "";
        if ($request->file('communitie_img7') != "") {
            $file = $request->file('communitie_img7');
            $communitie_img7 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/website/img/about/', $communitie_img7);
            $communitie_img7 = 'public/website/img/about/' . $communitie_img7;
            $about->communitie_img7 = $communitie_img7;
        }
        
        $about->communitie_text4 = $request->communitie_text4;
        $about->environment_text = $request->environment_text;
        $about->partner_text = $request->partner_text;
        $about->charity_text = $request->charity_text;

        $about->save();

        flash($request->name.' updated successfully');
        return back();
    }

}