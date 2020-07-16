<?php

namespace App\Http\Controllers;


use App\Shop;
use App\Seller;
use App\BusinessSetting;
use Hash;

/*Previous in WebsiteController*/
use App\Faq;
use App\Blog;
use App\User;
use App\About;
use App\Brand;
use App\Event;
use App\Packeg;
use App\Region;
use App\Slider;
use App\AllPage;
use App\Perfume;
use App\Product;

use App\TopNote;
use App\BaseNote;
use App\Category;
use App\Language;
use App\AboutMenu;
use App\HeaderTop;
use App\PressList;
use Carbon\Carbon;
use App\CareerPage;
use App\FaqHelpful;
use App\MiddleNote;
use App\RecentView;
use App\Subscriber;
use App\BlogComment;
use App\CompareList;
use App\FaqCategory;
use App\FirstSlider;
use App\PressSetting;
use App\RecentlyView;
use App\SubscribMail;
use App\Subscription;
use App\ApplicantForm;
use App\ConsumerRight;
use App\NotesCategory;
use App\CareerPosition;
use App\GeneralSetting;
use App\MyblendProduct;
use App\ProductTopNote;
use App\ProductBaseNote;
use App\BlendSubscription;
use App\ProductMiddleNote;
use App\Mail\ApplicantMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{

    public function __construct()
    {
        $this->middleware('user', ['only' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop = Auth::user()->shop;
        return view('frontend.seller.shop', compact('shop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check() && Auth::user()->user_type == 'admin'){
            flash(__('Admin can not be a seller'))->error();
            return back();
        }
        else{
            return view('website.pages.seller_form');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = null;
        if(!Auth::check()){
            if(User::where('email', $request->email)->first() != null){
                flash(__('Email already exists!'))->error();
                return back();
            }
            if($request->password == $request->password_confirmation){
                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->user_type = "seller";
                $user->password = Hash::make($request->password);
                $user->save();
            }
            else{
                flash(__('Sorry! Password did not match.'))->error();
                return back();
            }
        }
        else{
            $user = Auth::user();
            if($user->customer != null){
                $user->customer->delete();
            }
            $user->user_type = "seller";
            $user->save();
        }

        if(BusinessSetting::where('type', 'email_verification')->first()->value != 1){
            $user->email_verified_at = date('Y-m-d H:m:s');
            $user->save();
        }

        $seller = new Seller;
        $seller->user_id = $user->id;
        $seller->save();

        if(Shop::where('user_id', $user->id)->first() == null){
            $shop = new Shop;
            $shop->user_id = $user->id;
            $shop->name = $request->name;
            $shop->address = $request->address;
            $shop->slug = preg_replace('/\s+/', '-', $request->name).'-'.$shop->id;

            if($shop->save()){
                auth()->login($user, false);
                flash(__('Your Shop has been created successfully!'))->success();
                return redirect()->route('shops.index');
            }
            else{
                $seller->delete();
                $user->user_type == 'customer';
                $user->save();
            }
        }

        flash(__('Sorry! Something went wrong.'))->error();
        return back();
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
        $shop = Shop::find($id);

        if($request->has('name') && $request->has('address')){
            $shop->name = $request->name;
            $shop->address = $request->address;
            $shop->slug = preg_replace('/\s+/', '-', $request->name).'-'.$shop->id;

            $shop->meta_title = $request->meta_title;
            $shop->meta_description = $request->meta_description;

            if($request->hasFile('logo')){
                $shop->logo = $request->logo->store('uploads/shop/logo');
            }

            if ($request->has('pick_up_point_id')) {
                $shop->pick_up_point_id = json_encode($request->pick_up_point_id);
            }
            else {
                $shop->pick_up_point_id = json_encode(array());
            }
        }

        elseif($request->has('facebook') || $request->has('google') || $request->has('twitter') || $request->has('youtube') || $request->has('instagram')){
            $shop->facebook = $request->facebook;
            $shop->google = $request->google;
            $shop->twitter = $request->twitter;
            $shop->youtube = $request->youtube;
            $shop->instagram = $request->instagram;
        }

        else{
            if($request->has('previous_sliders')){
                $sliders = $request->previous_sliders;
            }
            else{
                $sliders = array();
            }

            if($request->hasFile('sliders')){
                foreach ($request->sliders as $key => $slider) {
                    array_push($sliders, $slider->store('uploads/shop/sliders'));
                }
            }

            $shop->sliders = json_encode($sliders);
        }

        if($shop->save()){
            flash(__('Your Shop has been updated successfully!'))->success();
            return back();
        }

        flash(__('Sorry! Something went wrong.'))->error();
        return back();
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

    public function verify_form(Request $request)
    {
        if(Auth::user()->seller->verification_info == null){
            $shop = Auth::user()->shop;
            return view('frontend.seller.verify_form', compact('shop'));
        }
        else {
            flash(__('Sorry! You have sent verification request already.'))->error();
            return back();
        }
    }

    public function verify_form_store(Request $request)
    {
        $data = array();
        $i = 0;
        foreach (json_decode(BusinessSetting::where('type', 'verification_form')->first()->value) as $key => $element) {
            $item = array();
            if ($element->type == 'text') {
                $item['type'] = 'text';
                $item['label'] = $element->label;
                $item['value'] = $request['element_'.$i];
            }
            elseif ($element->type == 'select' || $element->type == 'radio') {
                $item['type'] = 'select';
                $item['label'] = $element->label;
                $item['value'] = $request['element_'.$i];
            }
            elseif ($element->type == 'multi_select') {
                $item['type'] = 'multi_select';
                $item['label'] = $element->label;
                $item['value'] = json_encode($request['element_'.$i]);
            }
            elseif ($element->type == 'file') {
                $item['type'] = 'file';
                $item['label'] = $element->label;
                $item['value'] = $request['element_'.$i]->store('uploads/verification_form');
            }
            array_push($data, $item);
            $i++;
        }
        $seller = Auth::user()->seller;
        $seller->verification_info = json_encode($data);
        if($seller->save()){
            flash(__('Your shop verification request has been submitted successfully!'))->success();
            return redirect()->route('dashboard');
        }

        flash(__('Sorry! Something went wrong.'))->error();
        return back();
    }

    /*WebsiteController*/
        public function changeLang($lang)
        {
            //        $language = Language::where('code', $lang)->first();
            //        if (!$language) $lang = 'en';
            //        session()->put('lang', strtolower($lang));
            //        return \redirect()->back();

            session()->put('locale', strtolower($lang));
            $language = Language::where('code', $lang)->first();
            flash(__('Language changed to ') . $language->name)->success();
            return redirect()->back();
        }

        public function websiteindex()
        {
            $firstSlider = FirstSlider::where('is_active', 1)->get();
            $socialLinks = GeneralSetting::select('facebook', 'instagram', 'twitter', 'linkedin', 'pinterest', 'snapchart', 'tiktok', 'youtube')->first();
            $sliders = Slider::where('published', 1)->orderBy('serial_no', 'ASC')->get();
            $blend_subs = BlendSubscription::get();
            $newArriaval = Product::where('status', 1)->latest()->take(4)->get();
            $category['spray'] = Category::where('slug', '=', 'spray')->first();
            // return $category['spray']->id;
            $products['spray'] = Product::join('brands', 'brands.id', '=', 'products.brand_id')->select('products.*', 'brands.name as brand_name')->where('category_id', '=', @$category['spray']->id)->latest()->take(8)->get();
            // return $products['spray'];
            $category['oil'] = Category::where('slug', '=', 'oil')->first();
            $products['oil'] = Product::join('brands', 'brands.id', '=', 'products.brand_id')->select('products.*', 'brands.name as brand_name')->where('category_id', '=', @$category['oil']->id)->latest()->take(8)->get();
            $category['ambiance'] = Category::where('slug', '=', 'ambiance')->first();
            $products['ambiance'] = Product::join('brands', 'brands.id', '=', 'products.brand_id')->select('products.*', 'brands.name as brand_name')->where('category_id', '=', @$category['ambiance']->id)->latest()->take(8)->get();

            $category['natural'] = Category::where('slug', '=', 'natural')->first();
            $products['natural'] = Product::join('brands', 'brands.id', '=', 'products.brand_id')->select('products.*', 'brands.name as brand_name')->where('category_id', '=', @$category['natural']->id)->latest()->take(8)->get();

            $category['essential'] = Category::where('slug', '=', 'essential')->first();
            $products['essential'] = Product::join('brands', 'brands.id', '=', 'products.brand_id')->select('products.*', 'brands.name as brand_name')->where('category_id', '=', @$category['essential']->id)->latest()->take(8)->get();

            $category['bakhoor'] = Category::where('slug', '=', 'bakhoor')->first();
            $products['bakhoor'] = Product::join('brands', 'brands.id', '=', 'products.brand_id')->select('products.*', 'brands.name as brand_name')->where('category_id', '=', @$category['bakhoor']->id)->latest()->take(8)->get();

            $reviews = Product::where('status', 1)->withCount('reviews')->orderBy('reviews_count', 'DESC')->take(4)->get();
            // return $reviews;
            return view('website.pages.index', compact('newArriaval', 'reviews', 'sliders', 'blend_subs', 'firstSlider', 'socialLinks', 'category', 'products'));
        }

        public function customersLogin()
        {
            if (Auth::check()) {
                return redirect()->route('customerDashboard');
            } else {
                return view('website.pages.users_login');
            }
        }



    //New Page desing login
        public function login1()
        {
            if (Auth::check()) {
                return redirect()->route('login1');
            } else {
                return view('auth.login1');
            }
        }



        public function customersRegister()
        {
            return view('website.pages.users_register');
        }


        public function productDetail(Request $request)
        {
            $product_id = $request->id;
            $detailedProduct = Product::find($product_id);
            $related = Product::with('brand')->take(4)->inRandomOrder()->get();
            $reviews = RecentView::where('product_id', $detailedProduct->id)->get();
            return view('website.pages.productDetail', compact('detailedProduct', 'related', 'reviews'));
        }

        // productList
        public function productList()
        {
            return view('website.pages.productList');
        }

        public function searchByCode(Request $request)
        {
            $code = $request->code;
            $detailedProduct = Product::with('category')->where('barcode', $code)->first();
            $related = Product::with('brand')->take(4)->inRandomOrder()->get();
            $mid = $detailedProduct->midNotes;
            $top = $detailedProduct->topNotes;
            $base = $detailedProduct->baseNotes;
            if (is_null($detailedProduct)) {

                return redirect()->back();
            } elseif ($detailedProduct != null && $detailedProduct->published) {
                updateCartSetup();
                if ($request->has('product_referral_code')) {
                    Cookie::queue('product_referral_code', $request->product_referral_code, 43200);
                    Cookie::queue('referred_product_id', $detailedProduct->id, 43200);
                }
                // return view('frontend.product_details', compact('detailedProduct'));

                return view('website.pages.productDetail', compact('detailedProduct', 'related', 'top', 'mid', 'base'));
            }
        }

        public function myblend()
        {
            $topnotes = TopNote::select('id', 'name')->get();
            $midnotes = MiddleNote::select('id', 'name')->get();
            $basenotes = BaseNote::select('id', 'name')->get();
            return view('website.pages.myblend', compact('topnotes', 'basenotes', 'midnotes'));
        }

        public function myblendAdd($proId)
        {
            $userId = Auth::user()->id;
            $myblendAdd = MyblendProduct::firstOrNew(['user_id' => $userId, 'product_id' => $proId]);
            $myblendAdd->user_id = $userId;
            $myblendAdd->product_id = $proId;
            $myblendAdd->save();
            return response()->json();
        }

        public function myblendSearch(Request $request)
        {
            //      $value='["1#top","1#mid","1#base"]';
            $data = json_decode(stripslashes($request->data));
            //      $data = json_decode(stripslashes($value));
            DB::enableQueryLog();
            //        return response()->json($data);
            $ProductQuery = Product::query();
            $topFazil = 0;
            $middleFazil = 0;
            $baseFazil = 0;
            foreach ($data as $row) {
                $tem = explode('#', $row);
                $item[$tem[1]][] = $tem[0];

                if ($tem[1] == "top") {
                    if ($topFazil == 0) {

                        $noteCtegory = NotesCategory::where('id', $tem[0])->get();
                        $ProductQuery->leftJoin('product_top_note', 'product_top_note.product_id', '=', 'products.id');
                        $topFazil++;
                    }
                    $ProductQuery->where('product_top_note.top_note_id', $tem[0]);
                } elseif ($tem[1] == 'mid') {
                    if ($middleFazil == 0) {
                        $noteCtegory = NotesCategory::where('id', $tem[0])->get();
                        $ProductQuery->leftJoin('middle_note_product', 'middle_note_product.product_id', '=', 'products.id');
                        $middleFazil++;
                    }
                    $ProductQuery->where('middle_note_product.middle_note_id', $tem[0]);
                } else {
                    if ($baseFazil == 0) {
                        $noteCtegory = NotesCategory::where('id', $tem[0])->get();
                        $ProductQuery->leftJoin('base_note_product', 'base_note_product.product_id', '=', 'products.id');
                        $baseFazil++;
                    }
                    $ProductQuery->where('base_note_product.base_note_id', $tem[0]);
                }
            }

            return response()->json($noteCtegory);
            $ProductQuery->select('products.id', 'products.name', 'products.featured_img', 'products.unit_price', 'products.category_id', 'products.brand_id', 'products.slug');

            $s = $ProductQuery->get();
            Log::info(DB::getQueryLog());
            $returnValue[0] = $s;
            $returnValue[1] = $s->count();
            return $returnValue;
        }
        //    public function myblendSearch(Request $request)
        //    {
        ////        $value='["1#top"]';
        //        $data = json_decode(stripslashes($request->data));
        //        DB::enableQueryLog();
        //        $ProductQuery = Product::query();
        //        $topFazil = 0;
        //        $middleFazil = 0;
        //        $baseFazil = 0;
        //        foreach ($data as $row) {
        //            $tem = explode('#', $row);
        ////            $item['ids'][]=$tem[0];
        //            $item[$tem[1]][] = $tem[0];
        //            if ($tem[1] == "top") {
        //                if ($topFazil == 0) {
        //                    $ProductQuery->leftJoin('product_top_note', 'product_top_note.product_id', '=', 'products.id');
        //                    $topFazil++;
        //                }
        //
        //                $ProductQuery->where('product_top_note.top_note_id', $tem[0]);
        //            } elseif ($tem[1] == 'mid') {
        //                if ($middleFazil == 0) {
        //                    $ProductQuery->leftJoin('middle_note_product', 'middle_note_product.product_id', '=', 'products.id');
        //                    $middleFazil++;
        //                }
        //                $ProductQuery->where('middle_note_product.middle_note_id', $tem[0]);
        //            } else {
        //                if ($baseFazil == 0) {
        //                    $ProductQuery->leftJoin('base_note_product', 'base_note_product.product_id', '=', 'products.id');
        //                    $baseFazil++;
        //                }
        //                $ProductQuery->where('base_note_product.base_note_id', $tem[0]);
        //            }
        //        }
        //
        //        $ProductQuery->select('products.id', 'products.name', 'products.featured_img', 'products.unit_price', 'products.category_id', 'products.brand_id', 'products.slug');
        //
        //        $s = $ProductQuery->get();
        //        Log::info(DB::getQueryLog());
        //        $returnValue[0] = $s;
        //        $returnValue[1] = $s->count();
        //        return $returnValue;
        //
        //    }


        public function brands()
        {

            $brands = Brand::withCount('products')->get();
            return view('website.pages.brands', compact('brands'));
        }

        public function brandProducts($id)
        {
            $products = Product::with('brand')->where('brand_id', $id)->paginate(9);
            $brandName = Brand::where('id', $id)->select('id', 'name')->firstOrFail();
            $countProduct = Product::select('id')->where('brand_id',$id)->count();
            $count = Product::where('brand_id', $id)->count();
            $categories = Brand::withCount(['products'                      
                            ])->orderBy('products_count', 'desc')->with('products')->get();
                            $male = Product::select('gender')->where('brand_id', $id)->where('gender','Male')->get();
                            $female = Product::select('gender')->where('brand_id', $id)->where('gender','Female')->get();
                            $unisex = Product::select('gender')->where('brand_id', $id)->where('gender','Unisex')->get();
            return view('website.pages.brandProducts', compact('products', 'count', 'categories', 'brandName', 'id','male','female','unisex','countProduct'));
         }

        public function notes()
        {
            $notes_categories = DB::table('notes_categories')->where('active_status', 1)->get();

            return view('website.pages.notes', compact('notes_categories'));
        }

        public function notesProducts(Request $request)
        {
            $products = '';
            $name = $request->name;
            $ids = explode('-', $request->id);
            $ids = explode('-', $request->id);
            $cid = $ids[0];
            $id = $ids[1];
            if ($name == 'top') {
                $notes = TopNote::find($id);
            } elseif ($name = 'base') {
                $notes = BaseNote::find($id);
            } else {
                $notes = MiddleNote::find($id);
            }
            $products = $notes->products;
            $notes_categories = NotesCategory::where('id', $cid)->firstOrFail();

            $notes_categories = DB::table('notes_categories')->where('active_status', 1)->find($cid);
            return view('website.pages.notesProducts', compact('notes_categories', 'notes', 'products'));
        }

        public function subscription()
        {
            $defaultPackeg = Packeg::where('type', 1)->get();
            return view('website.pages.subscriber', compact('defaultPackeg'));
        }

        public function perfumers()
        {

            $perfumers = Perfume::with('products')->get();
            $grouped = $perfumers->groupBy(function ($item, $key) {
                return $item->name[0];     //treats the name string as an array
            })
                ->sortBy(function ($item, $key) {      //sorts A-Z at the top level
                    return $key;
                });

            return view('website.pages.perfumers', compact('perfumers', 'grouped'));
        }

        public function colors()
        {

            return view('website.pages.colors');
        }

        public function samples()
        {

            $defaultPackeg = Packeg::where('type', 1)->get();
            return view('website.pages.samples', compact('defaultPackeg'));
        }

        public function astrology()
        {
            if (Auth::check()) {
                $userId = User::select('birth_date')->where('id', Auth::user()->id)->first();
                $astrology = Product::where('launch_date', $userId->birth_date)->get();
                return view('website.pages.astrology', compact('astrology'));
            } else {
                return redirect()->back()->with('error', 'Please Login with your user account first');
            }
        }

        public function barcode()
        {

            return view('website.pages.barcode');
        }

        public function accessories()
        {

            return view('website.pages.accessories');
        }

        public function CompareList()
        {
            return view('website.pages.compare_list');
        }

        public function blogs()
        {
            $blogs = Blog::with('blogCategory', 'user')->where('active_status', 1)->limit(3)->get();
            $middle_blogs = Blog::with('blogCategory', 'user')->where('active_status', 1)->limit(2)->get();
            $bottom_blogs = Blog::with('blogCategory', 'user')->where('active_status', 1)->get();
            $blogsImg = Blog::where('active_status', 1)->orderBy('id', 'ASC')->limit(5)->get();
            return view('website.pages.blogs', compact('blogs', 'blogsImg', 'middle_blogs', 'bottom_blogs'));
        }

        public function singleBlog($slug)
        {
            $singleBlog = Blog::with('blogCategory', 'user')->where('slug', $slug)->firstOrFail();
            $related_post = Blog::with('blogCategory', 'user')->where('category_id', $singleBlog->category_id)->limit(3)->get();
            $comments = BlogComment::where('blog_id', $singleBlog->id)->get();
            return view('website.pages.blog-details', compact('singleBlog', 'related_post', 'comments'));
        }

        public function perfumerDetail($id)
        {

            $perfumer = Perfume::where('id', $id)->with('products')->first();
            $products = Product::where('perfumer_id', $id)->with('brand')->get();
            $brands = $products->groupBY('brand_id', 'name');
            return view('website.pages.perfumerDetail', compact('perfumer', 'products', 'brands'));
        }

        // modified by rashed
        public function about()
        {
            $about_menus = AboutMenu::where('status', 1)->orderBy('serial', 'ASC')->get();
            $about = About::where('active_status', 1)->first();
            return view('website.pages.about', compact('about_menus', 'about'));
        }

        public function ForPress()
        {
            $data = PressSetting::where('active_status', 1)->first();
            $press_lists = PressList::where('active_status', 1)->take($data->number_of_post)->latest()->get();
            // return $press_lists;
            return view('website.pages.ForPress', compact('data', 'press_lists'));
        }

        public function PriceMatch()
        {
            $data['price_match'] = AllPage::where('slug', '=', 'price_match')->where('active_status', 1)->first();
            return view('website.pages.price_match', compact('data'));
        }

        public function CharitableGiving()
        {
            $data['charitable_giving'] = AllPage::where('slug', '=', 'charitable_giving')->where('active_status', 1)->first();
            return view('website.pages.CharitableGiving', compact('data'));
        }

        public function OnlineCommunity()
        {
            $data['pilicy'] = AllPage::where('slug', '=', 'online_community')->where('active_status', 1)->first();
            return view('website.pages.OnlineCommunity', compact('data'));
        }

        public function Authentication()
        {
            $data['pilicy'] = AllPage::where('slug', '=', 'authentication')->where('active_status', 1)->first();
            return view('website.pages.authentication', compact('data'));
        }

        public function RewardPoints()
        {
            $data['pilicy'] = AllPage::where('slug', '=', 'reward_points')->where('active_status', 1)->first();
            return view('website.pages.reward_points', compact('data'));
        }

        public function Accessibility()
        {
            $data['pilicy'] = AllPage::where('slug', '=', 'accessibility')->where('active_status', 1)->first();
            return view('website.pages.accessibility', compact('data'));
        }

        public function Agreement()
        {
            $data['pilicy'] = AllPage::where('slug', '=', 'user_agreement')->where('active_status', 1)->first();
            return view('website.pages.user_agreement', compact('data'));
        }

        public function LearnMore()
        {
            $HeaderTop = HeaderTop::where('active_status', 1)->first();
            return view('website.pages.learn_more', compact('HeaderTop'));
        }


        public function forBusiness()
        {
            $data['list'] = [];
            return view('website.pages.forBusiness', compact('data'));
        }

        public function bloggerProgram()
        {
            $data['list'] = [];
            return view('website.pages.bloggerProgram', compact('data'));
        }

        public function submitYourIdea()
        {
            $data['list'] = [];
            return view('website.pages.submitYourIdea', compact('data'));
        }

        public function personalRequest()
        {
            $data['list'] = [];
            return view('website.pages.personalRequest', compact('data'));
        }

        public function requestFragrance()
        {
            $data['pilicy'] = AllPage::where('slug', '=', 'fragrance')->where('active_status', 1)->first();
            return view('website.pages.requestFragrance', compact('data'));
        }

        public function subscriptionAgreement()
        {
            $data['list'] = [];
            return view('website.pages.subscriptionAgreement', compact('data'));
        }

        public function supplier()
        {
            $data['list'] = [];
            return view('website.pages.supplier', compact('data'));
        }

        public function yourFeedback()
        {
            $data['list'] = [];
            return view('website.pages.yourFeedback', compact('data'));
        }


        public function onlineShopping()
        {
            $data['pilicy'] = AllPage::where('slug', '=', 'online_shopping')->where('active_status', 1)->first();
            return view('website.pages.onlineShopping', compact('data'));
        }

        public function termsAndConditions()
        {
            $data['pilicy'] = AllPage::where('slug', '=', 'terms_condition')->where('active_status', 1)->first();
            return view('website.pages.termsAndConditions', compact('data'));
        }

        public function privacyPolicy()
        {
            $data['pilicy'] = AllPage::where('slug', '=', 'privacy_policy')->where('active_status', 1)->first();
            return view('website.pages.privacyPolicy', compact('data'));
        }

        public function cookies()
        {
            $data['pilicy'] = AllPage::where('slug', '=', 'cookies')->where('active_status', 1)->first();
            return view('website.pages.cookies', compact('data'));
        }

        public function returnRefundPolicy()
        {
            $data['pilicy'] = AllPage::where('slug', '=', 'refund_policy')->where('active_status', 1)->first();
            return view('website.pages.returnRefundPolicy', compact('data'));
        }

        public function shippingPolicy()
        {
            $data['pilicy'] = AllPage::where('slug', '=', 'shipping_policy')->where('active_status', 1)->first();
            return view('website.pages.shippingPolicy', compact('data'));
        }

        public function howToShop()
        {
            $data['pilicy'] = AllPage::where('slug', '=', 'how_to_shop')->where('active_status', 1)->first();
            return view('website.pages.howToShop', compact('data'));
        }

        public function faq()
        {
            $faqs = Faq::where('active_status', 1)->take(6)->orderBy("number_of_view", "desc")->get();
            $faq_categories = FaqCategory::where('active_status', 1)->get();
            $faq_categories = FaqCategory::where('active_status', 1)->get();
            return view('website.pages.faq', compact('faq_categories', 'faqs'));
        }

        public function faqCategory($id)
        {
            $faq_category = FaqCategory::where('id', $id)->first();
            $faq_category = FaqCategory::where('id', $id)->first();
            $faqs = Faq::where('active_status', 1)->where('category_id', $faq_category->id)->get();
            return view('website.pages.faqCategory', compact('faq_category', 'faqs'));
        }

        public function faqDetails($id)
        {
            $view_count = Faq::where('faqs.id', $id)->first();
            $view_count->number_of_view = $view_count->number_of_view + 1;
            $view_count->update();

            $recent_view = RecentView::where('user_id', Auth::user()->id)->where('faq_id', $id)->first();
            if ($recent_view == null) {
                $recent_view = new RecentView();
            }

            $recent_view->user_id = Auth::user()->id;
            $recent_view->faq_id = $id;
            $recent_view->updated_by = Carbon::now();
            $recent_view->save();


            $faq_count = Faq::all()->count();
            $faq_count_helpful = FaqHelpful::where('is_helpful', 1)->count();

            $faq = Faq::join('faq_categories', 'faq_categories.id', '=', 'faqs.category_id')
                ->select('faqs.*', 'faq_categories.name')->where('faqs.id', $id)->first();
            $faqs = Faq::where('active_status', 1)->where('category_id', $faq->category_id)->get();
            $related_faqs = Faq::where('active_status', 1)->where('category_id', $faq->category_id)->take(4)->latest()->get();
            $helpful = FaqHelpful::where('user_id', Auth::user()->id)->where('faq_id', @$faq->id)->first();
            $recent_views = RecentView::join('faqs', 'recent_views.faq_id', '=', 'faqs.id')->where('recent_views.user_id', Auth::user()->id)->select('recent_views.*', 'faqs.title')->take(4)->orderBy("updated_by", "desc")->get();
            return view('website.pages.faqDetails', compact('faq', 'faqs', 'helpful', 'faq_count', 'faq_count_helpful', 'related_faqs', 'recent_views'));
        }

        public function HelpfulYes($id)
        {
            $helpful = FaqHelpful::where('user_id', Auth::user()->id)->where('faq_id', $id)->first();
            if ($helpful == null) {
                $helpful = new FaqHelpful();
            }
            $helpful->user_id = Auth::user()->id;
            $helpful->faq_id = $id;
            $helpful->is_helpful = 1;
            $helpful->save();
            return redirect()->back();

            return redirect()->back();
        }

        public function HelpfulNo($id)
        {
            $helpful = FaqHelpful::where('user_id', Auth::user()->id)->where('faq_id', $id)->first();
            if ($helpful == null) {
                $helpful = new FaqHelpful();
            }
            $helpful->user_id = Auth::user()->id;
            $helpful->faq_id = $id;
            $helpful->is_helpful = 0;
            $helpful->save();

            return redirect()->back();
        }

        public function myAcount()
        {
            $data['list'] = [];
            return view('website.pages.myAcount', compact('data'));
        }

        public function myProfile()
        {
            $data['list'] = [];
            return view('website.pages.myProfile', compact('data'));
        }

        public function myCart()
        {
            $data['list'] = [];
            return view('website.pages.myCart', compact('data'));
        }

        public function myOrders()
        {
            $data['list'] = [];
            return view('website.pages.myOrders', compact('data'));
        }

        public function myWishList()
        {
            $data['list'] = [];
            return view('website.pages.myWishList', compact('data'));
        }

        public function myCompareList()
        {
            $compareLists = CompareList::with('product')->where('user_id', Auth::user()->id)->where('status', 1)->get();
            return view('website.pages.my_compare_list', compact('compareLists'));
        }

        public function RecentlyViewed()
        {
            $recentlyViewed = RecentlyView::with('product')
                ->where('user_id', Auth::user()->id)
                ->where('status', 1)
                ->orderBy('id', 'DESC')
                ->limit(25)
                ->get();
            return view('website.pages.recently_viewed', compact('recentlyViewed'));
        }


        public function productSearch(Request $request)
        {
            $keyword = $request->keyword;
            $id = $request->catId;

            if (is_null($keyword)) {

                if (is_numeric($id) == 1) {

                    $products = Product::where('category_id', $id)->where('status', 1)->latest()->paginate(12);
                } else {

                    $ar = explode("#", $id);
                    $products = Product::where('subcategory_id', $ar[1])->where('status', 1)->latest()->paginate(12);

                    if (is_numeric($id) == 1) {

                        $products = Product::where('category_id', $id)->where('status', 1)->latest()->paginate(12);
                    } else {

                        $ar = explode("#", $id);
                        $products = Product::where('subcategory_id', $ar[1])->where('status', 1)->latest()->paginate(12);
                    }
                }
            } else {

                if (is_numeric($id) == 1) {

                    $products = Product::where('category_id', $id)->where('name', 'LIKE', "%{$keyword}%")->where('status', 1)->latest()->paginate(12);
                } else {

                    $ar = explode("#", $id);
                    $products = Product::where('subcategory_id', $ar[1])->where('name', 'LIKE', "%{$keyword}%")->where('status', 1)->latest()->paginate(12);

                    if (is_numeric($id) == 1) {

                        $products = Product::where('category_id', $id)->where('name', 'LIKE', "%{$keyword}%")->where('status', 1)->latest()->paginate(12);
                    } else {

                        $ar = explode("#", $id);
                        $products = Product::where('subcategory_id', $ar[1])->where('name', 'LIKE', "%{$keyword}%")->where('status', 1)->latest()->paginate(12);
                    }
                }
                $count = count($products);
                $categories = Category::withCount('products')->orderBy('products_count', 'desc')->get();
                return view('website.pages.searchResult', compact('products', 'categories', 'count'));
            }
        }

        public function categoryProduct($id)
        {
            $products = Product::with('category')->where('category_id', $id)->paginate(9);
            $categoryName = Category::where('id', $id)->select('id', 'name')->firstOrFail();
            $countProduct = Product::select('id')->where('category_id',$id)->count();
            $count = Product::where('category_id', $id)->count();
            $categories = Category::withCount(['products'])->orderBy('products_count', 'desc')->with('products')->get();

            $male =   Product::select('gender')->where('category_id', $id)->where('gender','Male')->get();
            $female = Product::select('gender')->where('category_id', $id)->where('gender','Female')->get();
            $unisex = Product::select('gender')->where('category_id', $id)->where('gender','Unisex')->get();

            return view('website.pages.categoryProducts', compact('products', 'count', 'categories', 'categoryName', 'id','male','female','unisex','countProduct'));





            // $category = Category::findOrFail($id);
            // $products = Product::where('category_id', $category->id)->where('is_accessories', true)->where('status', 1)->paginate(12);
            // $count = Product::where('category_id', $category->id)->where('is_accessories', true)->count();
            // $brands = Brand::withCount(['products',
            //     'products as products_count' => function ($query) {
            //         $query->where('is_accessories', '=', 1);
            //     }
            //     ])->orderBy('products_count', 'desc')->get();

            // return view('website.pages.categoryProducts', compact('products', 'category', 'count', 'brands'));
        }


        public function mailSubscription(Request $request)
        {
            try {
                $data = Subscriber::insert([
                    'email' => $request->subscription_email
                ]);
                flash(__('Subscribed Successfully'))->success();
                return redirect()->back();
            } catch (\Exception $ex) {
                flash(__('Please try again'))->success();
                return redirect()->back();
            }
        }

        public function productByColors(Request $request)
        {
            $color = strtolower($request->colors);
            $output = "";
            $products = Product::whereJsonContains('colors', $color)->get(['id', 'slug', 'thumbnail_img']);
            if ($products) {
                foreach ($products as $key => $product) {
                    $output .=
                        '<div class="col-2">' .
                        '<a href=" ' . route('product', $product->slug) . ' "> ' .
                        '<img src=" ' . asset('public/' . $product->thumbnail_img) . ' " alt="image" width="75px" height="85">' .
                        '</a>' .
                        '</div>';
                }
                return \response()->json($output);
            }
        }

        public function addToCompare($id)
        {
            return $product = Product::find($id);
        }

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

        public function selectedPerfume(Request $request, $id)
        {

            if ($id == 1) {
                $title = 'Subscription Shipping & Review';
                $products = Product::where('subscription', 1)->get();
            } else {
                $title = 'Sample Shipping & Review';
                $products = Product::where('sample', 1)->get();
            }
            return view('website.pages.shipping_page', compact('title', 'products', 'id'));
        }


        // Country -region
        public function CountryRegion()
        {
            $regions= Region::where('active_status',1)->get();
            return view('website.pages.country_region',compact('regions'));
        }
        public function ajaxCountryList(Request $request)
       {

          $countries = DB::table('countries')->where('region_id', $request->id)->get();
          return response()->json([$countries]);
       }




        public function searchProduct(Request $request)
        {
            $products = Product::where('name', 'LIKE', "%{$request->keyword}%")->paginate(9);
            $count = Product::where('name', 'LIKE', "%{$request->keyword}%")->count();
            $categories = Category::withCount('products')->orderBy('products_count', 'desc')->with('products')->get();

            return view('website.pages.searchProducts', compact('products', 'count', 'categories'));
        }


        public function sortProduct($current, $value)
        {
            if ($value == "topRev") {

                $products = Product::where('name', 'LIKE', "%{$current}%")->withCount('reviews')->orderBy('reviews_count', 'desc')->paginate(9);
            } elseif ($value == "priceHigh") {

                $products = Product::orderBy('unit_price', 'desc')->paginate(9);
            } elseif ($value == "priceLow") {

                $products = Product::orderBy('unit_price', 'asc')->paginate(9);
            }

            if (isset($products)) {
                $count = count($products);
                $categories = Category::with('products')->get();
                return view('website.pages.sortProduct', compact('products', 'count', 'categories'));
            } else {

                return redirect()->back();
            }
        }

        public function sortProductBrand(Request $request)
        {
            $current = $request->brandid;
            $value = $request->value;
            $output = "";

            if ($value == "topRev") {

                $products = Product::where('brand_id', $current)->withCount('reviews')->orderBy('reviews_count', 'desc')->get();
            } elseif ($value == "priceHigh") {

                $products = Product::where('brand_id', $current)->orderBy('unit_price', 'desc')->get();
            } elseif ($value == "priceLow") {

                $products = Product::where('brand_id', $current)->orderBy('unit_price', 'asc')->get();
            }


            if (isset($products)) {
                foreach ($products as $key => $product) {
                    $output .=

                        '<div class="col-4 mb-30">' .
                        '<div class="single-product-carousel">' .
                        '<div class="single_tranding">' .
                        '<a href=" ' . route('product', $product->slug) . ' "> ' .
                        '<img src=" ' . url('public/') . '/' . $product->featured_img . ' " alt="image" width="75px" height="85">' .

                        '<div class="des">' .
                        ' <p class="title">' . $product->name . '</p>' .
                        ' <p class="brand">' . $product->perfumer->name . '</p>' .
                        ' <p class="price">' . home_base_price($product->id) . '</p>' .
                        '</div>' .
                        '</a>' .

                        '<div class="des-hover">' .
                        '<a href="javascript::void()"><span onclick="showAddToCartModal(' . $product->id . ')"' . 'data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span></a>' .
                        '<a href="javascript::void()"><span onclick="addToCompareList(' . $product->id . ')"' . 'data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to compare"><i class="fa fa-random"></i></span></a>' .
                        '<a href="javascript::void()"><span onclick="addToWishList(' . $product->id . ')"' . 'data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart"></i></span></a>' .
                        '</div>' .
                        '</div>' .
                        '</div>' .
                        '</div>';
                }

                return \response()->json($output);
            }
        }

        public function sortProductCategory(Request $request)
        {
            $current = $request->categoryId;
            $value = $request->value;
            $output = "";


            if ($value == "topRev") {

                $products = Product::where('category_id', $current)->withCount('reviews')->orderBy('reviews_count', 'desc')->get();
            } elseif ($value == "priceHigh") {

                $products = Product::where('category_id', $current)->orderBy('unit_price', 'desc')->get();
            } elseif ($value == "priceLow") {

                $products = Product::where('category_id', $current)->orderBy('unit_price', 'asc')->get();
            }

            if (isset($products)) {
                foreach ($products as $key => $product) {
                    $output .=

                        '<div class="col-4 mb-30">' .
                        '<div class="single-product-carousel">' .
                        '<div class="single_tranding">' .
                        '<a href=" ' . route('product', $product->slug) . ' "> ' .
                        '<img src=" ' . url('public/') . '/' . $product->featured_img . ' " alt="image" width="75px" height="85">' .

                        '<div class="des">' .
                        ' <p class="title">' . $product->name . '</p>' .
                        ' <p class="brand">' . $product->perfumer->name . '</p>' .
                        ' <p class="price">' . home_base_price($product->id) . '</p>' .
                        '</div>' .
                        '</a>' .

                        '<div class="des-hover">' .
                        '<a href="javascript::void()"><span onclick="showAddToCartModal(' . $product->id . ')"' . 'data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span></a>' .
                        '<a href="javascript::void()"><span onclick="addToCompareList(' . $product->id . ')"' . 'data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to compare"><i class="fa fa-random"></i></span></a>' .
                        '<a href="javascript::void()"><span onclick="addToWishList(' . $product->id . ')"' . 'data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart"></i></span></a>' .
                        '</div>' .
                        '</div>' .
                        '</div>' .
                        '</div>';
                }

                return \response()->json($output);
            }
        }

        public function ajaxLiveSearchBrand(Request $request)
        {
            $output = "";
            $products = Product::where('brand_id', $request->brandid)->where('name', 'LIKE', "%{$request->keyword}%")->get();

            if ($request->keyword == null) {
                $products = Product::where('brand_id', $request->brandid)->get();
            }
            if (isset($products)) {

                foreach ($products as $key => $product) {
                    $output .=

                        '<div class="col-4 mb-30">' .
                        '<div class="single-product-carousel">' .
                        '<div class="single_tranding">' .
                        '<a href=" ' . route('product', $product->slug) . ' "> ' .
                        '<img src=" ' . url('public/') . '/' . $product->featured_img . ' " alt="image" width="75px" height="85">' .

                        '<div class="des">' .
                        ' <p class="title">' . $product->name . '</p>' .
                        ' <p class="brand">' . $product->perfumer->name . '</p>' .
                        ' <p class="price">' . home_base_price($product->id) . '</p>' .
                        '</div>' .
                        '</a>' .

                        '<div class="des-hover">' .
                        '<a href="javascript::void()"><span onclick="showAddToCartModal(' . $product->id . ')"' . 'data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span></a>' .
                        '<a href="javascript::void()"><span onclick="addToCompareList(' . $product->id . ')"' . 'data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to compare"><i class="fa fa-random"></i></span></a>' .
                        '<a href="javascript::void()"><span onclick="addToWishList(' . $product->id . ')"' . 'data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart"></i></span></a>' .
                        '</div>' .
                        '</div>' .
                        '</div>' .
                        '</div>';
                }

                return \response()->json($output);
            }
        }


        public function productCategory(Request $request)
        {
            $output = "";

            $products = Product::where('category_id', $request->categoryId)->where('name', 'LIKE', "%{$request->keyword}%")->get();

            if ($request->keyword == null) {
                $products = Product::where('category_id', $request->categoryId)->get();
            }
            if (isset($products)) {


                foreach ($products as $key => $product) {
                    $output .=

                    '<div class="col-4 mb-30">' .
                    '<div class="single-product-carousel">' .
                    '<div class="single_tranding">' .
                    '<a href=" ' . route('product', $product->slug) . ' "> ' .
                    '<img src=" ' . url('public/') . '/' . $product->featured_img . '" alt="image" width="75px" height="85">' .

                    '<div class="des">' .
                    ' <p class="title">' . $product->name . '</p>' .
                    ' <p class="brand">' . $product->perfumer->name . '</p>' .
                    ' <p class="price">' . home_base_price($product->id) . '</p>' .
                    '</div>' .
                    '</a>' .

                    '<div class="des-hover">' .
                    '<a href="javascript::void()"><span onclick="showAddToCartModal(' . $product->id . ')"' . 'data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span></a>' .
                    '<a href="javascript::void()"><span onclick="addToCompareList(' . $product->id . ')"' . 'data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to compare"><i class="fa fa-random"></i></span></a>' .
                    '<a href="javascript::void()"><span onclick="addToWishList(' . $product->id . ')"' . 'data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart"></i></span></a>' .
                    '</div>' .
                    '</div>' .
                    '</div>' .
                    '</div>';
                }

                return \response()->json($output);
            }
        }


        // modified by rashed 12 June
        public function events()
        {
            $events = Event::where('active_status', 1)->get();
            // return $events;
            return view('website.pages.events', compact('events'));
        }

        public function eventSinglePage($id)
        {
            $event = Event::find($id);
            return view('website.pages.event-details', compact('event'));
        }

        public function careers($id)
        {
            $career_position = CareerPosition::where('active_status', 1)->where('id', @$id)->firstOrFail();
            return view('website.pages.careers', compact('career_position'));
        }


        public function availablePositions()
        {
            $careers = CareerPage::where('active_status', 1)->first();
            $career_positions = CareerPosition::where('active_status', 1)->get();
            return view('website.pages.availablePositions', compact('career_positions', 'careers'));
        }

        public function workingWithMyfrgranceme()
        {
            $careers = CareerPage::where('active_status', 1)->first();
            return view('website.pages.workingWithMyfrgranceme', compact('careers'));
        }

        public function consumerRights()
        {
            $consumer_right = ConsumerRight::where('active_status', 1)->first();
            return view('website.pages.consumerRights', compact('consumer_right'));
        }


        public function ApplicantFormSubmit(Request $request)
        {
            //validation
            $validator = Validator::make($request->all(), [
                'position_id' => 'required',
                'name' => 'required',
                'email' => 'required',
                'area_of_interest' => 'required',
                'cover_letter' => 'required',
                'resume' => 'required',
                'g-recaptcha-response' => 'required|captcha',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $applicant_form = new ApplicantForm();
            $applicant_form->position_id = $request->position_id;
            $applicant_form->name = $request->name;
            $applicant_form->email = $request->email;
            $applicant_form->area_of_interest = $request->area_of_interest;
            $applicant_form->cover_letter = $request->cover_letter;

            $resume = "";
            if ($request->file('resume') != "") {
                $file = $request->file('resume');
                $resume = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move('public/uploads/resume/', $resume);
                $resume = 'public/uploads/resume/' . $resume;
                $applicant_form->resume = $resume;
            }

            $pos = CareerPosition::where('id', $request->position_id)->first();
            $position = @$pos->title;
            $name = $request->name;
            $email = $request->email;
            $area_of_interest = $request->area_of_interest;
            $cover_letter = $request->cover_letter;
            $generalSettings = GeneralSetting::select('logo', 'email', 'phone', 'site_name')->firstOrFail();
            $logo = $generalSettings->logo;
            $siteName = $generalSettings->site_name;
            
            Mail::to($generalSettings->email)->send(new ApplicantMail($position, $name, $email, $area_of_interest, $cover_letter, $resume, $siteName, $logo));
            $applicant_form->save();
            return redirect()->back()->with('success', 'Your Application placed successfully');
        }
        public function rengeSlider(Request $request)
        {

            if ($request->ajax() && $request->start && $request->end) {
                $start = $request->start;
                $end = $request->end;
                $products = Product::where('unit_price', '>=', $start)->where('unit_price', '<=', $end)->get();
                dd($products);
            }
        }
}
