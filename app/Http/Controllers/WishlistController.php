<?php

namespace App\Http\Controllers;

use App\CompareList;
use App\MyblendProduct;
use App\RecentlyView;
use App\SampleAndSubscription;
use Illuminate\Http\Request;
use Auth;
use App\Wishlist;
use App\Category;

class WishlistController extends Controller
{
    
    public function index()
    {
        $wishlists = Wishlist::where('user_id', Auth::user()->id)->paginate(9);
        return view('frontend.view_wishlist', compact('wishlists'));
    }
    public function CustomerProfile(Request $request)
    {
        if (Auth::user()->user_type == 'customer') {
            return view('website.pages.customer_profile');
        } elseif (Auth::user()->user_type == 'seller') {
            return view('website.pages.seller_profile');
        }
    }
        public function CustomerWishlists()
    {
        $wishlists = Wishlist::where('user_id', Auth::user()->id)->paginate(9);
        return view('website.pages.view_wishlist', compact('wishlists'));
    }

        public function MyBlend()
    {
        $myblends = MyblendProduct::with('product')->where('user_id', Auth::user()->id)->get();
        return view('website.pages.my_blend',compact('myblends'));
    }
        public function MySubscription()
    {
        $subscriptions = SampleAndSubscription::
                         with('subscriptionInfos.product','user')
                         ->where('user_id', Auth::user()->id)
                         ->where('type',1)
                         ->get();
        return view('website.pages.my_subscription',compact('subscriptions'));
    }
         public function MySample()
    {
        $subscriptions = SampleAndSubscription::
        with('subscriptionInfos')
            ->where('user_id', Auth::user()->id)
            ->where('type',2)
            ->get();
        return view('website.pages.my_sample',compact('subscriptions'));
    }
        public function MyOrders()
    {
        //$wishlists = Wishlist::where('user_id', Auth::user()->id)->paginate(9);
        return view('website.pages.my_orders');
    }
        public function MyAddress()
    {
        //$wishlists = Wishlist::where('user_id', Auth::user()->id)->paginate(9);
        return view('website.pages.my_address');
    }

            public function myCompareList()
    {
            $compareList = CompareList::where('user_id',Auth::user()->id)->get();
            $data['compareList'] = $compareList;
        return view('website.pages.my_compare_list',$data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        if(Auth::check()){
            $wishlist = Wishlist::where('user_id', Auth::user()->id)->where('product_id', $request->id)->first();
            if($wishlist == null){
                $wishlist = new Wishlist;
                $wishlist->user_id = Auth::user()->id;
                $wishlist->product_id = $request->id;
                $wishlist->save();
            }
            return view('frontend.partials.wishlist');
        }


        return 0;
    }

    public function remove(Request $request)
    {
        $wishlist = Wishlist::findOrFail($request->id);
        if($wishlist!=null){
            if(Wishlist::destroy($request->id)){
                return view('frontend.partials.wishlist');
            }
        }
    }
    public function myBlendRemove(Request $request)
    {
        $wishlist = MyblendProduct::findOrFail($request->id);
        if($wishlist!=null){
            if(MyblendProduct::destroy($request->id)){
                return response()->json();
            }
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
        //
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
}
