<?php

namespace App\Http\Controllers;

use App\CompareList;
use App\GeneralSetting;
use App\Mail\ContactMail;
use DB;
use Auth;
use App\Blog;
use App\User;
use App\Brand;
use App\Event;
use App\MyList;
use App\Review;
use App\AllPage;
use App\Perfume;
use App\Product;
use App\TopNote;
use App\BaseNote;
use App\Category;
use App\Wishlist;
use App\PressList;
use Carbon\Carbon;
use App\MiddleNote;
use App\BlogComment;
use App\PressSetting;
use App\RecentlyView;
use App\FollowingUser;
use App\MyListProduct;
use App\LikeDislikeProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ApiController extends Controller
{
    public function allBrand()
    {
        $brands =  Brand::select('id', 'name', 'logo')->get()->groupBy(function ($item, $key) {
            return $item->name[0];
        })->sortBy(function ($item, $key) {
            return $key;
        });
        return response()->json([
            'allBrand' => $brands
        ]);
    }

    public function searchBrand($keyword)
    {

        $brands = Brand::where('name', 'LIKE', "%{$keyword}%")->get(['id', 'name', 'logo']);
        return response()->json([
            'brands' => $brands
        ]);
    }

    public function productByBrandId($id)
    {

        $products = Product::where('brand_id', $id)->with(['brand' => function ($query) {
            $query->select(['id', 'name']);
        }])->get(['id', 'name', 'thumbnail_img', 'brand_id']);
        $productCount = count($products);
        return response()->json([
            'products' => $products, 'productCount' => $productCount
        ]);
    }

    public function newProducts()
    {

        $products = Product::latest()->select('id', 'name', 'thumbnail_img', 'unit_price')->with('brand.name')->get();
        return response()->json([
            'products' => $products,
        ]);
    }



    public function barcodeSearch($barcode)
    {

        $product = Product::where('barcode', '=', $barcode)->with(['brand' => function ($query) {
            $query->select(['id', 'name']);
        }])->with(['category' => function ($query) {
            $query->select(['id', 'name']);
        }])->with('reviews', 'reviews.user', 'topNotes', 'midNotes', 'baseNotes')->get(['id', 'name', 'featured_img', 'unit_price', 'photos', 'gender', 'brand_id', 'category_id']);

        $brandId =  Product::where('barcode', '=', $barcode)->first()->brand_id;

        $matchingProducts = Product::where('brand_id', $brandId)->get(['id', 'name', 'thumbnail_img']);

        $recentView = session()->get('recentView');

        $p = Product::where('barcode', '=', $barcode)->with('brand')->first();

        if (isset($p)) {

            if (!$recentView) {
                $recentView = [
                    $p->id => [
                        "id" => $p->id,
                        "name" => $p->name,
                        "image" => $p->thumbnail_img,
                        "brand" => $p->brand->name,
                    ]
                ];
            } elseif (!isset($recentView[$p->id])) {

                $recentView = [
                    $p->id => [
                        "id" => $p->id,
                        "name" => $p->name,
                        "image" => $p->thumbnail_img,
                        "brand" => $p->brand->name,
                    ]
                ];
            }

            session()->put('recentView', $recentView);
        }


        return response()->json([
            'product' => $product, 'matchingProducts' => $matchingProducts
        ]);
    }


    public function singleProduct($id)
    {
        $product = Product::where('id', $id)->with(['brand' => function ($query) {
            $query->select(['id', 'name']);
        }])->with(['category' => function ($query) {
            $query->select(['id', 'name']);
        }])->with('reviews', 'reviews.user', 'topNotes', 'midNotes', 'baseNotes')->get(['id', 'name', 'featured_img', 'unit_price', 'photos', 'gender', 'brand_id', 'category_id', 'description']);

        $brandId = Product::find($id)->brand_id;

        $matchingProducts = Product::where('brand_id', $brandId)->get(['id', 'name', 'thumbnail_img']);

        $recentView = session()->get('recentView');

        $p = Product::where('id', $id)->with('brand')->first();

        if (isset($p)) {

            if (!$recentView) {
                $recentView = [
                    $id => [
                        "id" => $p->id,
                        "name" => $p->name,
                        "image" => $p->thumbnail_img,
                        "brand" => $p->brand->name,
                    ]
                ];
            } elseif (!isset($recentView[$id])) {

                $recentView = [
                    $id => [
                        "id" => $p->id,
                        "name" => $p->name,
                        "image" => $p->thumbnail_img,
                        "brand" => $p->brand->name,
                    ]
                ]; 
            }

            session()->put('recentView', $recentView);
        }


        return response()->json([
            'product' => $product, 'matchingProducts' => $matchingProducts
        ]);
    }


    public function allNotes()
    {

        try {
            $allNotes = [];
            $top = TopNote::select('id', 'name', 'image', 'type', 'slug')->get()->toArray();
            $mid = MiddleNote::select('id', 'name', 'image', 'type', 'slug')->get()->toArray();
            $base = BaseNote::select('id', 'name', 'image', 'type', 'slug')->get()->toArray();
            $allNotes =  array_merge($allNotes, $top, $mid, $base);

            return response()->json([
                'allNotes' => $allNotes
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }



    public function singleNoteProduct($slug)
    {

        $top = TopNote::where('slug', $slug)->first(['id', 'name', 'type', 'slug']);
        $mid = MiddleNote::where('slug', $slug)->first(['id', 'name', 'type', 'slug']);
        $base = BaseNote::where('slug', $slug)->first(['id', 'name', 'type', 'slug']);

        if (isset($top)) {
            $products =  TopNote::where('id', $top->id)->with('products')->get(['id', 'name', 'type', 'slug']);
            return response()->json([
                'products' => $products
            ]);
        }

        if (isset($mid)) {
            $products =  MiddleNote::where('id', $mid->id)->with('products')->get(['id', 'name', 'type', 'slug']);
            return response()->json([
                'products' => $products
            ]);
        }

        if (isset($base)) {

            $products =  BaseNote::where('id', $base->id)->with('products')->get(['id', 'name', 'type', 'slug']);
            return response()->json([
                'products' => $products
            ]);
        }
    }



    public function allPerfumer()
    {

        $perfumers = Perfume::all()->groupBy(function ($item, $key) {
            return $item->name[0];
        })
            ->sortBy(function ($item, $key) {
                return $key;
            });

        return response()->json([
            'perfumers' => $perfumers
        ]);
    }


    public function allProduct()
    {

        $products = Product::with('category', 'reviews', 'brand', 'perfumer', 'subcategory', 'stocks')->paginate(10);

        return response()->json([
            'products' => $products
        ]);
    }

    public function allCategory()
    {

        $categories = Category::with('subcategories', 'products')->paginate(10);

        return response()->json([
            'categories' => $categories
        ]);
    }



    public function allBaseNote()
    {
        $basenotes = BaseNote::all();
        return response()->json([
            'basenotes' => $basenotes
        ]);
    }


    public function allTopNote()
    {

        $topnotes = TopNote::all();
        return response()->json([
            'topnotes' => $topnotes
        ]);
    }


    public function allMiddleNote()
    {
        $middlenotes = MiddleNote::all();
        return response()->json([
            'middlenotes' => $middlenotes
        ]);
    }

    public function searchProduct($keyword)
    {


        $products = Product::where('name', 'LIKE', "%{$keyword}%")->with(['brand' => function ($query) {
            $query->select(['id', 'name']);
        }])->get(['id', 'name', 'thumbnail_img', 'unit_price', 'brand_id']);

        $productCount = $products->count();
        return response()->json([
            'products' => $products, 'productCount' => $productCount
        ]);
    }
    public function newProduct()
    {
        $products = Product::latest()->take(20)->with(['brand' => function ($query) {
            $query->select(['id', 'name']);
        }])->get(['id', 'name', 'featured_img', 'brand_id']);
        return response()->json([
            'products' => $products
        ]);
    }

    public function PrivacyPolicyApi()
    {
        $privacyPolicy = AllPage::where('slug', '=', 'privacy_policy')->where('active_status', 1)->first();
        return response()->json([
            'privacyPolicy' => $privacyPolicy
        ]);
    }

    public function updatePassowrdApi(Request $request)
    {
        $user = User::find($request->id);
        $user->password = Hash::make($request->new_password);
        $result = $user->save();
        $msg = "Password Changed Successfully ";
        return response()->json([
            'msg' => $msg
        ]);
    }

    public function community(Request $request)
    {
        try {
            $user = User::select('id', 'name', 'email', 'avatar_original', 'image_url')->where('user_type', 'customer')->orderBy('id','DESC')->get();
            $count = 0;
            foreach ($user as $u) {
                $follower_number = FollowingUser::where('follower_id', $u->id)->get()->count();
                $followers[$count]['id'] = $u->id;
                $followers[$count]['name'] = $u->name;
                $followers[$count]['email'] = $u->email;
                $followers[$count]['avatar_original'] = $u->avatar_original;
                $followers[$count]['image_url'] = $u->image_url;
                $followers[$count]['follower_number'] = $follower_number;
                $count++;
            }
            return response()->json(['followers' => $followers]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json(['error' => 'Unauthorised'], 401);
    }



    public function like(Request $request, $id)
    {
        try {
            $products = [];
            $likes = LikeDislikeProduct::where('user_id', $id)->where('is_like', 1)->get();
            foreach ($likes as $like) {
                $p = Product::select('id', 'name', 'thumbnail_img', 'unit_price', 'purchase_price', 'launch_date')->find($like->product_id);
                $products[] = $p;
            }
            return response()->json(['products' => $products]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json(['error' => 'Unauthorised'], 401);
    }

    public function dislike(Request $request, $id)
    {
        try {
            $products = [];
            $likes = LikeDislikeProduct::where('user_id', $id)->where('is_like', 0)->get();
            foreach ($likes as $like) {
                $p = Product::select('id', 'name', 'thumbnail_img', 'unit_price', 'purchase_price', 'launch_date')->find($like->product_id);
                $products[] = $p;
            }
            return response()->json(['products' => $products]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json(['error' => 'Unauthorised'], 401);
    }


    public function myRecentView(Request $request, $id)
    {
        try {
            $products = [];
            $recentViews = RecentlyView::where('user_id', $id)->get();
            foreach ($recentViews as $r) {
                $products[] = Product::select('id', 'name', 'thumbnail_img', 'unit_price', 'purchase_price', 'launch_date')->find($r->product_id);
            }
            return response()->json(['products' => $products]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }


    public function myWishlist(Request $request, $id)
    {
        try {
            $products = [];
            $whishlists = Wishlist::where('user_id', $id)->get();
            foreach ($whishlists as $r) {
                $products[] = Product::select('id', 'name', 'thumbnail_img', 'unit_price', 'purchase_price', 'launch_date')->find($r->product_id);
            }
            return response()->json(['products' => $products]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }



    public function myList(Request $request, $id)
    {
        try {
            $products = [];
            $whishlists = MyList::select('id', 'list_name', 'user_id')->where('user_id', $id)->get();
            // foreach ($whishlists as $r) {
            //     $products[] = Product::select('id', 'name', 'thumbnail_img', 'unit_price', 'purchase_price', 'launch_date')->find($r->product_id);
            // }
            return response()->json(['whishlists' => $whishlists]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function myListProduct(Request $request, $id)
    {
        try {
            $products = [];
            $lists = MyListProduct::where('list_id', $id)->get();;
            foreach ($lists as $r) {
                $products[] = Product::select('id', 'name', 'thumbnail_img', 'unit_price', 'purchase_price', 'launch_date')->find($r->product_id);
            }
            return response()->json(['products' => $products]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }


    public function birthdayProduct(Request $request, $id)
    {
        try {
            $getUser = User::find($id);
            if (!empty($getUser)) {
                $getBirthDayProducts = Product::where('launch_date', $getUser->birth_date)->get();
                if (!empty($getBirthDayProducts)) {
                    return response()->json(['getBirthDayProducts' => $getBirthDayProducts]);
                }
            }
            return response()->json(['getBirthDayProducts' => 'Opps no product match with your birthday']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }


    public function suggestionProducts(Request $request)
    {
        try {
            $suggestionProducts = Product::select('id', 'name', 'thumbnail_img', 'unit_price', 'purchase_price', 'launch_date')->orderBy('id', 'DESC')->limit(10)->get();

            return response()->json(['suggestionProducts' => $suggestionProducts]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function createList(Request $request)
    {
        try {

            $id = Auth::user()->id;
            $createList = new MyList;
            $createList->user_id = $id;
            $createList->list_name = $request->list_name;
            $createList->created_by = $id;
            $createList->updated_by = $id;
            $createList->save();

            return response()->json(['createList' => $createList]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function addToList(Request $request, $listId, $proId)
    {
        try {

            $id = Auth::user()->id;

            $myListProduct = new MyListProduct;
            $myListProduct->list_id = $listId;
            $myListProduct->product_id = $proId;
            $myListProduct->created_by = $id;
            $myListProduct->updated_by = $id;
            $myListProduct->save();

            return response()->json(['myListProduct' => $myListProduct]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }



    public function getProductByNotes(Request $request)
    {
        $id = $request->id;

        return $request->input();
        $type = "";
        try {
            if ($type == 'top') {
                $top = TopNote::where('id', $id)->first(['id', 'name', 'type', 'slug']);
            } elseif ($type == 'mid') {
                $mid = MiddleNote::where('id', $id)->first(['id', 'name', 'type', 'slug']);
            } else {
                $base = BaseNote::where('id', $id)->first(['id', 'name', 'type', 'slug']);
            }

            if (isset($top)) {
                $products =  TopNote::where('id', $top->id)->with('products')->get(['id', 'name', 'type', 'slug']);
                return response()->json([
                    'products' => $products
                ]);
            }

            if (isset($mid)) {
                $products =  MiddleNote::where('id', $mid->id)->with('products')->get(['id', 'name', 'type', 'slug']);
                return response()->json([
                    'products' => $products
                ]);
            }

            if (isset($base)) {
                $products =  BaseNote::where('id', $base->id)->with('products')->get(['id', 'name', 'type', 'slug']);
                return response()->json([
                    'products' => $products
                ]);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function productBrandSearch(Request $request)
    {
        $products = Product::where('name', 'LIKE', '%' . $request->search . "%")->get();
        $brands    = Brand::where('name', 'LIKE', '%' . $request->search . "%")->get();
        if ($products->count() > 0 || $brands->count() > 0) {
            return response()->json(['products' => $products, 'brands' => $brands]);
        } else {
            return response()->json(['error', 'No data found !!']);
        }
    }

    public function productBrandSearchNew(Request $request, $name)
    {
        try {
            $productBrandSearch = [];
            $brands = Brand::where('name', 'LIKE', "%{$name}%")->get(['id', 'name', 'logo'])->toArray();
            $products = Product::where('name', 'LIKE', "%{$name}%")->get(['id', 'name', 'thumbnail_img', 'unit_price', 'brand_id'])->toArray();

            if ($products && $brands) {
                return response()->json([
                    'products' => $products,
                    'brands' => $brands,
                ]);
            } elseif ($products) {
                return response()->json([
                    'products' => $products,
                ]);
            } elseif ($brands) {
                return response()->json([
                    'brands' => $brands,
                ]);
            } else {
                return response()->json([
                    'error' => 'No data found'
                ]);
            }
        } catch (\Exception $ex) {
            return response()->json([
                'error' => 'No data found'
            ]);
        }
    }

    public function getProduct($id)
    {
        $data = Product::where('id', $id)
            ->with(['topNotes', 'midNotes', 'baseNotes'])
            ->first();

        $product = [];
        $product['top'] = [];
        $product['middle'] = [];
        $product['base'] = [];

        foreach ($data->topNotes as $pro) {
            $arrayData = [
                'id' => $pro->id,
                'name' => $pro->name,
                'image' => $pro->image,
            ];
            array_push($product['top'], $arrayData);
        }

        foreach ($data->midNotes as $pro) {
            $arrayData = [
                'id' => $pro->id,
                'name' => $pro->name,
                'image' => $pro->image,
            ];
            array_push($product['middle'], $arrayData);
        }

        foreach ($data->baseNotes as $pro) {
            $arrayData = [
                'id' => $pro->id,
                'name' => $pro->name,
                'image' => $pro->image,
            ];
            array_push($product['base'], $arrayData);
        }

        return response()->json($product);
    }
    public function singleProductView($id)
    {
        $product = Product::where('id', $id)->with(['brand' => function ($query) {
            $query->select(['id', 'name']);
        }])->with(['category' => function ($query) {
            $query->select(['id', 'name']);
        }])->with('topNotes', 'midNotes', 'baseNotes')->get(['id', 'name', 'featured_img', 'unit_price', 'photos', 'gender', 'brand_id', 'category_id']);

        $brandId = Product::find($id)->brand_id;

        $matchingProducts = Product::where('brand_id', $brandId)->get(['id', 'name', 'thumbnail_img']);

        $recentView = session()->get('recentView');

        $p = Product::where('id', $id)->with('brand')->first();

        if (isset($p)) {

            if (!$recentView) {
                $recentView = [
                    $id => [
                        "id" => $p->id,
                        "name" => $p->name,
                        "image" => $p->thumbnail_img,
                        "brand" => $p->brand->name,
                    ]
                ];
            } elseif (!isset($recentView[$id])) {

                $recentView = [
                    $id => [
                        "id" => $p->id,
                        "name" => $p->name,
                        "image" => $p->thumbnail_img,
                        "brand" => $p->brand->name,
                    ]
                ];
            }

            session()->put('recentView', $recentView);
        }

        return response()->json([
            'product' => $product, 'matchingProducts' => $matchingProducts
        ]);
    }
    public function productRatings($id)
    {
        $allComments = Review::where('product_id', $id)->get();

        $ddd = Review::where('product_id', $id)->selectRaw('SUM(rating)/COUNT(user_id) AS avg_rating')->first()->avg_rating;
        $totalRating = number_format($ddd, 1, '.', '');
        return response()->json([
            'comments' => $allComments, 'totalRating' => $totalRating
        ]);
    }

    public function productReview(Request $request, $productId,$userId)
    {
        try { 
            $getPrviousRating = Review::where('product_id',$productId)->where('user_id',$userId)->count();
            
            if($getPrviousRating>0){

                $updatereview = Review::where('product_id',$productId)->where('user_id',$userId)->first();
                $getUser = User::select('id','full_name')->where('id',$userId)->first();
                 
                $updatereview->product_id = $productId;
                $updatereview->user_id = $userId;
                $updatereview->name = $getUser->full_name;
                $updatereview->rating = $request->rating;
                $updatereview->summary = 'null';
                $updatereview->comment = $request->comment;
                $updatereview->status = 1;
                $updatereview->viewed = 0;
                $updatereview->created_by = $userId;
                $updatereview->updated_by = $userId;
                $updatereview->save();

                return response()->json(['success', 'Your review updated successfully']);
            }else{
                $getUser = User::select('id','full_name')->where('id',$userId)->first();
                $review = new Review;
                $review->product_id = $productId;
                $review->user_id = $getUser->id;
                $review->rating  =  $request->rating;
                $review->name    =  $getUser->full_name;
                $review->summary = 'null';
                $review->comment = $request->comment;
                $review->status  = 1;
                $review->viewed  = 0;
                $review->created_by = $getUser->id;
                $review->updated_by = $getUser->id;
                $review->save();
                
            return response()->json(['success', 'Your review submit successfully']);
            }
        } catch (\Exception $ex) {
            return response()->json(['error', 'Sorry somthing wrong']);
        }
    }

    public function commentRatingsEdit($productId, $userId,$rating)
    {
        try {
            $updateRating=[];
            $getPrviousRating = Review::where('product_id',$productId)->where('user_id',$userId)->get();
            foreach ($getPrviousRating as $data){
                $updateRating = Review::
                    where('product_id',$productId)
                    ->where('user_id',$userId)
                    ->update(['rating'=>$rating]);
            }
            if($updateRating == 0){
                return response()->json(['success', 'Your rating updated successfully']);
            }else{
                return response()->json(['error', 'Sorry somthing wrong']);
            }
        } catch (\Exception $ex) {
            return response()->json(['error', 'Sorry somthing wrong']);
        }
    }



    // 05 July 2020
    public function termsAndConditions()
    {
        try {
            $data['terms_condition'] = AllPage::where('slug', '=', 'terms_condition')->where('active_status', 1)->first();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }



    public function privacyPolicy()
    {
        try {

            $data['privacy_policy'] = AllPage::where('slug', '=', 'privacy_policy')->where('active_status', 1)->first();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }


    public function returnRefundPolicy()
    {
        try {
            $data['refund_policy'] = AllPage::where('slug', '=', 'refund_policy')->where('active_status', 1)->first();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }


    public function shippingPolicy()
    {
        try {
            $data['shipping_policy'] = AllPage::where('slug', '=', 'shipping_policy')->where('active_status', 1)->first();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }



    public function events()
    {
        try {
            $data['events'] = Event::where('active_status', 1)->get();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }

    public function eventSinglePage($id)
    {
        try {
            $data['event_details'] = Event::find($id);
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }

    // blog api 

    public function blogs()
    {
        try {
            $data['blogs'] = Blog::select('id', 'title', 'image',  'created_at as published')->where('active_status', 1)->get();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }

    public function blogDetails($id)
    {
        try {
            $data['blog_details'] = Blog::select('id', 'title', 'image', 'description', 'created_at as published')->where('active_status', 1)->find($id);
            $data['blog_comments'] = BlogComment::where('blog_id', $id)->get();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }

    public function blogComments($id)
    {
        try {
            $data['blog_comments'] = BlogComment::where('blog_id', $id)->get();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }


    //charitableGiving
    public function charitableGiving()
    {
        try {
            $data['charitable_giving'] = AllPage::where('slug', '=', 'charitable_giving')->where('active_status', 1)->first();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }


    public function CounterfeitEducation()
    {
        try {
            $data['CounterfeitEducation'] = AllPage::where('slug', '=', 'authentication')->where('active_status', 1)->first();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }

    public function priceMatch()
    {
        try {
            $data['price_match'] = AllPage::where('slug', '=', 'price_match')->where('active_status', 1)->first();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }

    public function newsRoom()
    {
        try {
            $data['news_room_settings'] = PressSetting::where('active_status', 1)->first();
            $data['newsrooms'] = PressList::select('id', 'title', 'image', 'url', 'note', 'serial_number')->where('active_status', 1)->take($data['news_room_settings']->number_of_post)->latest()->get();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }











    // 07 JULY 2020 


      public function Perfumers()
    {
        try {
            $data['perfumers'] = Perfume::select('name', 'img', 'position', 'company', 'country', 'education', 'website', 'about', 'number_database')->get();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }


    public function PerfumersProducts($id)
    {
        try {
            $data['products'] = Product::where('perfumer_id',$id)->select('id', 'name', 'launch_date', 'unit_price', 'perfumer_id')->get();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }

    public function SingleProducts($id)
    {
        try {
            $data['products'] = Product::where('id',$id)->get();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }

    public function Astrology($id)
    {
        try {
            $user= User::find($id); 
            if($user->birth_date == null){
                $date=date('Y-m');
            }else{
                $date= $user->birth_date;
            }
            $data['products'] = Product::select('name', 'brand_id', 'category_id', 'subcategory_id', 'barcode', 'gender', 'launch_date', 'unit_price', 'thumbnail_img', 'featured_img', 'current_stock', 'slug', 'rating')->where('launch_date','LIKE', '%'. $date.'%')->get();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }
    public function accessories()
    {
        try {
            $data['products'] = Product::select('name', 'brand_id', 'category_id', 'subcategory_id', 'barcode', 'gender', 'launch_date', 'unit_price', 'thumbnail_img', 'featured_img', 'current_stock', 'slug', 'rating')->where('is_accessories',1)->get();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }
    public function compareList($id)
    {
        try {
            $data['compareList'] = CompareList::where('user_id',$id)->get();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }
    public function colorCode($id)
    {
        $codes = strtolower($id);
        try {
            $data['colorCode'] = Product::select('name', 'brand_id', 'category_id', 'subcategory_id', 'barcode', 'gender', 'launch_date', 'unit_price', 'thumbnail_img', 'featured_img', 'current_stock', 'slug', 'rating','colors')->where('colors','LIKE','%'.$codes.'%')->get();
            return response()->json($data);
        } catch (\Exception $ex) {
            return response()->json('error', 'Sorry somthing wrong');
        }
    }

    public function contactUs(Request $request)
    {
        try{
            $orderId = '';
            $name   = $request->first_name . $request->last_name;
            $email  = $request->email;
            $phoneNumber = $request->phone;
            $inquiry = $request->inquiry;
            $subject = $request->subject;
            $message = $request->message;
            $orderId = $request->orderId;
            $generalSettings = GeneralSetting::select('logo', 'email', 'phone', 'site_name')->firstOrFail();
            $logo    = $generalSettings->logo;
            $siteEmail = $generalSettings->email;
            $phone = $generalSettings->phone;
            $siteName = $generalSettings->site_name;
            Mail::to('hepali8060@chikd73.com')->send(new ContactMail($name, $email, $phoneNumber, $inquiry, $subject, $message, $orderId, $siteEmail, $phone, $siteName,$logo));
            return response()->json(['mailSent','Your mail placed successfully']);
        }catch(\Exception $ex){
            return response()->json(['error','sorry mail not sent']);
        }
    }

    public function subscriptioProducts(){
        $products = Product::with(['brand' => function ($query) {
            $query->select(['id', 'name']);
        }])->where('subscription',1)->get(['id', 'name', 'thumbnail_img', 'brand_id']);
        $productCount = count($products);
        return response()->json([
            'products' => $products, 'productCount' => $productCount
        ]);
    }
    
    public function sampleProducts(){
        $products = Product::with(['brand' => function ($query) {
            $query->select(['id', 'name']);
        }])->where('sample',1)->get(['id', 'name', 'thumbnail_img', 'brand_id']);
        $productCount = count($products);
        return response()->json([
            'products' => $products, 'productCount' => $productCount
        ]);
    }

}
