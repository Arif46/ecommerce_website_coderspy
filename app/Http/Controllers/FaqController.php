<?php

namespace App\Http\Controllers;

use App\Faq;
use App\FaqCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $sort_search =null;
        $faq_categorys = FaqCategory::orderBy('serial', 'ASC');
        if ($request->has('search')){
            $sort_search = $request->search;
            $faq_categorys = $faq_categorys->where('name', 'like', '%'.$sort_search.'%');
        }
        $faq_categorys = $faq_categorys->paginate(15);
        return view('faq_category.index', compact('faq_categorys', 'sort_search'));
    }

    public function create()
    {
        return view('faq_category.create');
    }

    public function store(Request $request)
    {
        //validation
        // return $request;
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:faq_categories,name',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $new_serial=FaqCategory::max('serial')+1;
        $faq_category = new FaqCategory();
        $faq_category->name = $request->name;
        $faq_category->serial  = $new_serial ;
        if($faq_category->save()){
            flash(__('Faq Category has been inserted successfully'))->success();
            return redirect()->route('faq_category');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    public function edit($id)
    {
        $faq_category = FaqCategory::findOrFail(decrypt($id));
        return view('faq_category.edit', compact('faq_category'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:faq_categories,name,'.$id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $faq_category = FaqCategory::findOrFail($id);
        $faq_category->name = $request->name;
        $faq_category->active_status = $request->active_status;
        if($faq_category->update()){
            flash(__('Faq Category has been updated successfully'))->success();
            return redirect()->route('faq_category');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
        
    }

    public function destroy($id)
    {
        $faq_category = FaqCategory::findOrFail($id);
        $faq_category->delete();
        if($faq_category){
            flash(__('FAQ Category has been deleted successfully'))->success();
            return redirect()->route('faq_category');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }
    public function Faqindex(Request $request)
    {
        $sort_search =null;
        $faqs = Faq::join('faq_categories','faq_categories.id','=','faqs.category_id')
        ->select('faqs.*','faq_categories.name as faq_name')
        ->orderBy('faqs.id', 'ASC');
        if ($request->has('search')){
            $sort_search = $request->search;
            $faqs = $faqs->where('title', 'like', '%'.$sort_search.'%');
        }
        $faqs = $faqs->paginate(15);
        return view('faq.index', compact('faqs', 'sort_search'));
    }

    public function Faqcreate()
    {
        $faq_categorys = FaqCategory::where('active_status',1)->get();
        return view('faq.create',compact('faq_categorys'));
    }

    public function Faqstore(Request $request)
    {
        //validation
        // return $request;
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $faq = new Faq();
        $faq->title = $request->title;
        $faq->category_id  = $request->category_id ;

        $image = "";
        if ($request->file('image') != "") {
            $file = $request->file('image');
            $image = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/frontend/footer/', $image);
            $image = '/frontend/footer/' . $image;
            $faq->image = $image;
        }
        $faq->number_of_view  = 0;
        $faq->description  = $request->description;
        if($faq->save()){
            flash(__('Faq has been inserted successfully'))->success();
            return redirect()->route('faq');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    public function Faqedit($id)
    {
        $faq_categories = FaqCategory::where('active_status',1)->get();
        $faq = Faq::findOrFail(decrypt($id));
        return view('faq.edit', compact('faq_categories','faq'));
    }

    public function Faqupdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $faq = Faq::findOrFail($id);
        $faq->title = $request->title;
        $faq->category_id  = $request->category_id ;

        $image = "";
        if ($request->file('image') != "") {
            $file = $request->file('image');
            $image = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/frontend/footer/', $image);
            $image = '/frontend/footer/' . $image;
            $faq->image = $image;
        }
        $faq->number_of_view  = 0;
        $faq->description  = $request->description;
        if($faq->update()){
            flash(__('Faq has been updated successfully'))->success();
            return redirect()->route('faq');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    public function Faqdestroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        if($faq){
            flash(__('FAQ  has been deleted successfully'))->success();
            return redirect()->route('faq');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }
}