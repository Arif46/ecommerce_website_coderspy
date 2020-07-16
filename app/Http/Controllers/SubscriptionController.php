<?php

namespace App\Http\Controllers;

use App\BillShipInfo;
use App\DurationPlan;
use App\UserCardInfo;
use DB;
use Auth;
use Hash;
use App\User;
use App\Product;
use App\GeneralSetting;
use Illuminate\Http\Request;
use App\Mail\SubscriptionMail;
use App\ProductPlan;
use App\SampleAndSubscription;
use App\SampleAndSubscriptionInfo;
use App\SubscriptionAssign;
use App\SubscriptionQueue;
use App\TempQueueList;
use Exception;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{

    public function choosePerfume($id)
    {
        if ($id == 1) {
            $title = 'Subscriptions Products';
            $products = Product::with('brand')->where('subscription', 1)->get();
        } else {
            $title = 'Sample Products';
            $products = Product::with('brand')->where('sample', 1)->get();
        }
        return view('website.pages.choose-perfume', compact('title', 'products', 'id'));
    }

    public function selectedPerfume(Request $request,$id)
    {
        
        if ($id == 1) {
            $title = 'Subscription Shipping & Review';

            $products = [];
            $productsData = [];
            foreach($request->product as $key => $productId)
            {
                if($productId!=null){
                    $products[] = ['product_id' => $productId];
                    $productsData[] = Product::where('id',$productId)->select('id','name','slug','featured_img','unit_price')->get();
                }

                
            }
        } else {
            $title = 'Sample Shipping & Review';

            $products = [];
            $productsData = [];
            foreach($request->product as $key => $productId)
            {
                if($productId!=null){
                    $products[] = ['product_id' => $productId];
                    $productsData[] = Product::where('id',$productId)->select('id','name','slug','featured_img','unit_price')->get();
                }
            }
        }

        if(Auth::check()){
            foreach($products as $product){
                $tempQueue = new TempQueueList();
                $tempQueue->user_id = Auth::user()->id;
                $tempQueue->product_id = $product['product_id'];
                $tempQueue->save();
            }

            return redirect()->route('subscriptionQueue');
            // return view('website.pages.shipping_page', compact('title', 'productsData', 'id'));
        }else{
            return view('website.pages.shipping_page', compact('title', 'productsData', 'id'));
        }
    }


    public function store(Request $request){
        try {

            DB::transaction(function()use($request){

                $subscription = new SampleAndSubscription();
                $subscription->subscription_amount = $request->subscription_amount;
                $subscription->shipping_charge = $request->shipping_charge;
                $subscription->user_id = $request->user_id;
                $subscription->email_address = $request->email_address;
                $subscription->type = $request->type;
                $subscription->payment_method = 1;
                $subscription->card_number = $request->card_number;
                $subscription->subscription_date = $request->payment_date;
                $subscription->cvc = $request->cvc;
                $subscription->card_holder = $request->card_holder;
                $subscription->apt_number = $request->apt_number;
                $subscription->billing_zip = $request->billing_zip;
                $subscription->first_name = $request->first_name;
                $subscription->last_name = $request->last_name;
                $subscription->country = $request->country;
                $subscription->city = $request->city;
                $subscription->state = $request->state;
                $subscription->zip_code = $request->zip_code;
                $subscription->street_address = $request->street_address;
                $subscription->save();

                foreach($request->product_id as $key => $pId){
                    $subInfo = new SampleAndSubscriptionInfo();
                    $subInfo->subscription_id = $subscription->id;
                    $subInfo->product_id = $request->product_id[$key];
                    $subInfo->product_price = $request->product_price[$key];
                    $subInfo->save();
                }

                //email information
                $name = $subscription->first_name;
                $email = $subscription->email_address;
                $shipping = $subscription->shipping_charge;
                $total = $subscription->subscription_amount;
                $date = $request->payment_date;
                $generalSettings = GeneralSetting::select('logo','email','phone','site_name')->firstOrFail();
                $logo = $generalSettings->logo;
                $siteEmail = $generalSettings->email;
                $phone = $generalSettings->phone;
                $siteName = $generalSettings->site_name;
                $id = $subscription->id;
                Mail::to($request->email_address)->send(new SubscriptionMail($name,$email,$shipping,$total,$date,$logo,$siteEmail,$phone,$siteName,$id));
        });
            if($request->type == 1){
                return redirect('/')->with('success','Your sucscription ordered successfully placed,please checke your mail');
            }else{
                return redirect('/')->with('success','Your sample successfully placed,please checke your mail');
            }
    }catch(\Exception $ex){
            return redirect('/')->with('error','Somwthing wend wrong');
        }
    }

    public function destroy($id){
        try{
            $subscription = SampleAndSubscription::findOrFail($id);
            $subscriptions = SampleAndSubscriptionInfo::where('subscription_id',$subscription->id)->get();
            foreach ($subscriptions as $sub){
                SampleAndSubscriptionInfo::where('id',$sub->id)->delete();
            }
            $subscription->delete();
            return redirect()->back()->with('success','Subscription deleted successfully');
        }catch(\Exception $ex){
            return redirect()->back()->with('success','Subscription did not deleted ');
        }
    }








    public function subscriptionQueue(Request $request)
    {
        $tempQueues = TempQueueList::with(['product'])
                        ->where('user_id', Auth::user()->id)
                        ->get();

        // $panddingItem = Product::where('subscription',1)->select('id','name','featured_img')->get();

        $queues = SubscriptionQueue::with(['product'])
                    ->where('user_id', Auth::user()->id)
                    ->get();

        $plan  = SubscriptionAssign::where('user_id', Auth::user()->id)
                    ->first();

        // $completeItem = Product::where('subscription',1)->select('id','name','featured_img')->get();
        return view('website.pages.subscriptions.Queue',compact('tempQueues','queues', 'plan'));
    }

    public function subscriptionTracking(Request $request)
    {
        $products = Product::get();
        return view('website.pages.subscriptions.Tracking',compact('products'));
    }

    public function subscriptionManage(Request $request)
    {
        $data=User::find(1);
        $productPlans = ProductPlan::where('active', true)->get();
        $durationPlans = DurationPlan::where('active', true)->get();
        $selectPackage = SubscriptionAssign::where('user_id', Auth::user()->id)
                        ->orderBy('id', 'DESC')
                        ->first();

        $subscriptionQueue = SubscriptionQueue::where('user_id', Auth::user()->id)
                            ->where('is_complete', false)
                            ->orderBy('id', 'desc')
                            ->first();

        return view('website.pages.subscriptions.Manage', compact('productPlans', 'durationPlans', 'selectPackage', 'subscriptionQueue'));
    }

    public function subscriptionBS(Request $request)
    {
        $data=User::find(1);
        return view('website.pages.subscriptions.BillingShipping');
    }

    public function subscriptionShipping(Request $request)
    {
        if(Auth::check()){
            $userId = Auth::user()->id;
            $data=User::with('userCardInfo','ShippingInfo')->find($userId);
            return view('website.pages.subscriptions.BillingShipping',compact('data'));
        }
        return redirect('customer-login');
    }

    public function subscriptionPersonalInfo(Request $request)
    {
        $data=User::find(1);
        return view('website.pages.subscriptions.PersonalInfo');
    }
    public function subscriptionPersonalPassword(Request $request)
    {
        if(Auth::check()){
            return view('website.pages.subscriptions.PersonalPassword');
        }
        return redirect('customer-login');
    }
    public function subscriptionOrder(Request $request)
    {
        $data=User::find(1);
        return view('website.pages.subscriptions.subscriptionOrder');
    }

    //change password
    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current_password'), $request->get('new_password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required'],
            'retype_password' => ['same:new_password'],
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");
    }

    public function userInfoUpdate(Request $request){

        try {
            $user = Auth::user();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = Auth::user()->email;
            $user->birth_date = $request->birth_date;
            $user->marriage_day = $request->marriage_day;
            $user->gender = $request->gender;
            $user->save();
            return redirect()->back()->with('success', 'Your Profile has been updated successfully!');
        }catch(\Exception $ex){
            return redirect()->back()->with('error','Your Profile did not updated successfully!');
        }
    }

    public function subscriptionCardUpdate(Request $request){
        try {
            $userId = Auth::user()->id;
            $cardInfo = UserCardInfo::firstOrNew(['user_id'=>$userId]);
            $cardInfo->user_id =$userId;
            $cardInfo->card_number = $request->card_number;
            $cardInfo->payment_date = $request->payment_date;
            $cardInfo->cvc = $request->cvc;
            $cardInfo->card_holder = $request->card_holder;
            $cardInfo->billing_zip = $request->billing_zip;
            $cardInfo->save();

            return redirect()->back()->with('success', 'Saved Successfully!');
        }catch(\Exception $ex){
            return redirect()->back()->with('error',$ex);
        }
    }

    public function subscriptionShipUpdate(Request $request){

        try {
            $userId = Auth::user()->id;
            $shipInfo = BillShipInfo::firstOrNew(['user_id'=>$userId]);
            $shipInfo->user_id =$userId;
            $shipInfo->first_name = $request->first_name;
            $shipInfo->last_name = $request->last_name;
            $shipInfo->apt = $request->apt;
            $shipInfo->country = $request->country;
            $shipInfo->state = $request->state;
            $shipInfo->city = $request->city;
            $shipInfo->street_address = $request->street_address;
            $shipInfo->phone_number = $request->phone_number;
            $shipInfo->land_mark = $request->land_mark;
            $shipInfo->house_no = $request->house_no;
            $shipInfo->flat_no = $request->flat_no;
            $shipInfo->save();
            return redirect()->back()->with('success', 'Saved Successfully!');
        }catch(\Exception $ex){
            return redirect()->back()->with('error',$ex);
        }
    }

    public function subscriptionShippingRegistration(Request $request){
        try {
             // save user
            $user = new User();
            $user->email = $request->email_address;
            $user->password = Hash::make($request->password);
            $user->full_name = $request->first_name;
            $user->user_type = "customer";
            $user->save();

            // billing info
            $userId = $user->id;
            $cardInfo = UserCardInfo::firstOrNew(['user_id'=>$userId]);
            $cardInfo->user_id =$userId;
            $cardInfo->card_number = $request->card_number;
            $cardInfo->payment_date = $request->payment_date;
            $cardInfo->cvc = $request->cvc;
            $cardInfo->card_holder = $request->card_holder;
            $cardInfo->billing_zip = $request->billing_zip;
            $cardInfo->save();
             
            // shipping address
            $shipInfo = BillShipInfo::firstOrNew(['user_id'=> $userId]);
            $shipInfo->user_id =$userId;
            $shipInfo->first_name = $request->first_name;
            $shipInfo->last_name = $request->last_name;
            $shipInfo->apt = $request->apt_number;
            $shipInfo->country = $request->country;
            $shipInfo->state = $request->state;
            $shipInfo->city = $request->city;
            $shipInfo->street_address = $request->street_address;
            $shipInfo->save();
           
            $credentials = [
                'email' => $request->email_address,
                'password' => $request->password,
            ];
        
        
            if (Auth::attempt($credentials)) {
                foreach($request->product_id as $proId){
                    $tempQueue = new TempQueueList();
                    $tempQueue->user_id = Auth::user()->id;
                    $tempQueue->product_id = $proId;
                    $tempQueue->save();
                }

                return redirect()->route('subscriptionQueue')
                        ->with('success', 'Saved Successfully!');
            }

        }catch(\Exception $ex){
            return redirect()->back()->with('error',$ex);
        }
    }

    // save subscription queue
    public function saveSubscriptionQueue(Request $request){
        $productId = $request->productId;

        $assign = SubscriptionAssign::where("user_id", Auth::user()->id)
                    ->first();
        if(!$assign){
            $assigned = new SubscriptionAssign();
            $assigned->user_id = Auth::user()->id;
            $assigned->product_plan_id = Auth::user()->id;
        }

        // get plan

        $productPlan = ProductPlan::where('active', true)
                        ->orderBy('id', 'ASC')
                        ->first();

        $durationPlan = DurationPlan::where('active', true)
                        ->orderBy('id', 'ASC')
                        ->first();                        

        $queue = SubscriptionQueue::where("user_id", Auth::user()->id)
                ->orderBy('id', 'DESC')
                ->first();

        try{
            $subscription = new SubscriptionQueue();
            $subscription->product_id = $productId;
            $subscription->user_id = Auth::user()->id;
            $subscription->month_id = date('m');
            $subscription->year = date('Y');
            $subscription->is_complete = false;
            $subscription->save();
            return "ok";
        }catch(\Exception $e){
            return $e->getMessage();
        }
            
    }

    public function saveSubscriptionPlan(Request $request){
        $userId = Auth::user()->id;
        try{
            $assign = SubscriptionAssign::where('user_id', $userId)
                ->update([
                    "product_plan_id" =>$request->productPlanId,
                    "duration_plan_id" =>$request->durationPlanId,
                    
                ]);
                return "Upgraded";
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function updateSkipMonth(Request $request){
        $userId = Auth::user()->id;

        try{
            $assign = SubscriptionAssign::where('user_id', $userId)
                ->where('id', $request->id)
                ->update([
                    "total_skip_month" =>$request->skipMonthId,
                    'start_queue' => ($request->month + $request->skipMonthId)+1
                    
                ]);
           if($assign){
                return "Skip month added successfully";
           }
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function updateFrequencyMonth(Request $request){
        $userId = Auth::user()->id;

        try{
            $assign = SubscriptionAssign::where('user_id', $userId)
                ->where('id', $request->id)
                ->update([
                    "frequency_month" =>$request->month,
                ]);
           if($assign){
                return "Change frequency month added successfully";
           }
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

}
