<?php

namespace App\Http\Controllers;

use App\BaseNote;
use App\Brand;
use App\Category;
use App\MiddleNote;
use App\NotesCategory;
use App\Perfume;
use App\Product;
use App\TopNote;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Log;
use Nexmo\Response;

class LiveSearchController extends Controller
{
    public function index()
    {
        $notes_categories = DB::table('notes_categories')->where('active_status', 1)->get();

        return view('website.pages.notes', compact('notes_categories'));
    }
    public function search(Request $request)
    {
            $productsOne=TopNote::
                select('id','name','image','category_id')
                ->where('name','LIKE','%'.$request->livesearch."%")
                ->get();
            $productsTwo=MiddleNote::
                select('id','name','image','category_id')
                ->where('name','LIKE','%'.$request->livesearch."%")
                ->get();
            $productsThree=BaseNote::
                select('id','name','image','category_id')
                ->where('name','LIKE','%'.$request->livesearch."%")
                ->get();
             return (['productsOne'=>$productsOne,'productsTwo'=>$productsTwo,'productsThree' =>$productsThree]);
        }

    public function perfumeSearch(Request $request)
    {
        $perfume=Perfume::where('name','LIKE','%'.$request->livesearch."%")->get();
             return response()->json($perfume);
    }
    public function brandSearch(Request $request)
    {
        $brand=Brand::where('name','LIKE','%'.$request->livesearch."%")->get();
             return response()->json($brand);
    }

    public function myblendSearch(Request $request)
    {
      $value='["1#top","1#mid","1#base"]';
//        $data = json_decode(stripslashes($request->data));
      $data = json_decode(stripslashes($value));
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
                    $ProductQuery->leftJoin('product_top_note', 'product_top_note.product_id', '=', 'products.id');
                    $topFazil++;
                }
                $ProductQuery->where('product_top_note.top_note_id', $tem[0]);
            } elseif ($tem[1] == 'mid') {
                if ($middleFazil == 0) {
                    $ProductQuery->leftJoin('middle_note_product', 'middle_note_product.product_id', '=', 'products.id');
                    $middleFazil++;
                }
                $ProductQuery->where('middle_note_product.middle_note_id', $tem[0]);
            } else {
                if ($baseFazil == 0) {
                    $ProductQuery->leftJoin('base_note_product', 'base_note_product.product_id', '=', 'products.id');
                    $baseFazil++;
                }
                $ProductQuery->where('base_note_product.base_note_id', $tem[0]);
            }
        }

        $ProductQuery->select('products.id', 'products.name', 'products.featured_img', 'products.unit_price', 'products.category_id', 'products.brand_id', 'products.slug');

        $s = $ProductQuery->get();
        Log::info(DB::getQueryLog());
        $returnValue[0] = $s;
        $returnValue[1] = $s->count();
        return $returnValue;
    }


    public function getDescription($id){
        $product = Product::find($id)->description;
        return response()->json($id);
    }

    //brands gender products
    public function maleProduct($brandId){
        $product = Product::with('brand')->where('brand_id', $brandId)->where('gender','Male')->get();
        return response()->json($product);
    }
    public function femaleProduct($brandId){
        $product = Product::with('brand')->where('brand_id', $brandId)->where('gender','Female')->get();
        return response()->json($product);
    }
    public function unisexProduct($brandId){
        $product = Product::with('brand')->where('brand_id', $brandId)->where('gender','Unisex')->get();
        return response()->json($product);
    }
    //category gender products

    public function catmaleProduct($id){
        $product = Product::with('category')->where('category_id',$id)->where('gender','Male')->get();
        return response()->json($product);
    }

    public function catfemaleProduct($id){
        $product = Product::with('category')->where('category_id',$id)->where('gender','Female')->get();
        return response()->json($product);
    }

    public function catunisexProduct($id){
        $product = Product::with('category')->where('category_id',$id)->where('gender','Unisex')->get();
        return response()->json($product);
    }

    public function rengeSearch($min,$max,$id){
        $products = Product::with('brand')->whereBetween('unit_price', [$min, $max])->where('brand_id',$id)->orderBy('unit_price','ASC')->get();
        return response()->json($products);
    }
    public function catRengeSearch($min,$max,$id){
        $products = Product::with('category')->whereBetween('unit_price', [$min, $max])->where('category_id',$id)->orderBy('unit_price','ASC')->get();
        return response()->json($products);
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


    }
