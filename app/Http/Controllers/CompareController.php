<?php

namespace App\Http\Controllers;

use App\CompareList;
use Illuminate\Http\Request;
use App\Category;
use Auth;
class CompareController extends Controller
{
    public function index(Request $request)
    {

        $categories = Category::all();
        return view('frontend.view_compare', compact('categories'));
    }

    //clears the session data for compare
    public function reset(Request $request)
    {
        $request->session()->forget('compare');
        return back();
    }

    //store comparing products ids in session
    public function addToCompare(Request $request)
    {
        if($request->session()->has('compare')){
            $compare = $request->session()->get('compare', collect([]));
            if(!$compare->contains($request->id)){
                if(count($compare) == 5){
                    $compare->forget(0);
                    $compare->push($request->id);
                }
                else{
                    $compare->push($request->id);
                }
            }
        }
        else{
            $compare = collect([$request->id]);
            $request->session()->put('compare', $compare);
        }

        return view('frontend.partials.compare');
    }
    public function addCompareList($id)
    {
        if(Auth::check()){
            $addToCompare = CompareList::where('user_id', Auth::user()->id)->where('products_id', $id)->first();
            if($addToCompare == null){
                $addToCompare = new CompareList;
                $addToCompare->user_id = Auth::user()->id;
                $addToCompare->products_id = $id;
                $addToCompare->status = 1;
                $addToCompare->save();
            }
            return response()->json($addToCompare);
        }
        return 0;
    }
    public function remove(Request $request)
    {
        $compare = CompareList::findOrFail($request->id);
        if($compare!=null){
            if(CompareList::destroy($request->id)){
                return response()->json();
            }
        }
    }
}
