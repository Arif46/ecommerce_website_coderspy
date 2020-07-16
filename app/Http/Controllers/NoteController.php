<?php

namespace App\Http\Controllers;

use App\BaseNote;
use App\MiddleNote;
use App\Note;
use App\TopNote;
use App\NotesCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Mockery\Matcher\Not;

class NoteController extends Controller
{

    public function notecategoryindex(Request $request){
        $sort_search =null;
        $notes_categorys = NotesCategory::latest()->paginate(15);
        return view('notes_category.index',compact('notes_categorys','sort_search'));
    }

    public function notecategorycreate(){

        return view('notes_category.create');
    }

    public function notecategorystore(Request $request)
    {
          $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $NotesCategory = new NotesCategory();
        $NotesCategory->name = $request->name;
        $NotesCategory->description  = $request->description ;
        $NotesCategory->active_status  = $request->active_status; 
        if($request->hasFile('image')){
            $NotesCategory->image = $request->file('image')->store('uploads/notes_categories');
        }

        if($NotesCategory->save()){
            flash(__('Notes Category inserted successfully'))->success();
            return redirect()->route('notecategory.index');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    public function notecategorydestroy($id)
    {
        $NotesCategory = NotesCategory::find($id);
        $NotesCategory->delete();
        flash(__('Notes Category Deleted successfully'))->success();
        return redirect()->route('notecategory.index');
    }

    public function notecategoryedit($id){

        $NotesCategory = NotesCategory::findOrFail(decrypt($id));
        return view('notes_category.edit', compact('NotesCategory'));
    }

    public function notecategoryupdate(Request $request,$id){

            $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $NotesCategory = NotesCategory::find($id);
        $NotesCategory->name = $request->name;
        $NotesCategory->description  = $request->description ;
        $NotesCategory->active_status  = $request->active_status; 
        if($request->hasFile('image')){
            $NotesCategory->image = $request->file('image')->store('uploads/notes_categories');
        }

        if($NotesCategory->save()){
            flash(__('Notes Category Updated successfully'))->success();
            return redirect()->route('notecategory.index');
        }
         else{
            flash(__('Something went wrong'))->error();
            return back();
        }

    }

    public function topindex(){

        $notes = TopNote::latest()->paginate(15);
        return view('notes.index',compact('notes'));
    }

    public function topcreate(){
        $categories = NotesCategory::all();
      return view('notes.create', compact('categories'));
     
    }

    public function topstore(Request $request)
    {
            $validator = Validator::make($request->all(), [
            'name' => 'required|unique:top_notes,name',
            'category_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $note = new TopNote();
        $note->name = $request->name;
        $note->type = 'top';
        $note->slug = ('top@'.str_slug($request->name));
        $note->description  = $request->description ;
        $note->category_id  = $request->category_id ;
        if($request->hasFile('image')){
            $note->image = $request->file('image')->store('uploads/topnotes');
        }
          if($request->hasFile('banner_image')){
            $note->banner_image = $request->file('banner_image')->store('uploads/topnotes');
        }

        if($note->save()){
            flash(__('Note inserted successfully'))->success();
            return redirect()->route('topnote.index');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    public function topdestroy($id)
    {
        $note = TopNote::find($id);
        $note->delete();
        flash(__('Note Deleted successfully'))->success();
        return redirect()->route('topnote.index');
    }

    public function topedit($id){

        $note = TopNote::findOrFail(decrypt($id));
        $categories = TopNote::all();
        return view('notes.edit', compact('categories', 'note'));
    }

    public function topupdate(Request $request,$id){
          $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $note = TopNote::find($id);
        $note->name = $request->name;
        $note->type = 'top';
        $note->slug = ('top@'.str_slug($request->name));
        $note->description  = $request->description ;
        $note->category_id  = $request->category_id ;
        if($request->hasFile('image')){
            $note->image = $request->file('image')->store('uploads/topnotes');
        }
            if($request->hasFile('banner_image')){
            $note->banner_image = $request->file('banner_image')->store('uploads/topnotes');
        }

        if($note->save()){
            flash(__('Note inserted successfully'))->success();
            return redirect()->route('topnote.index');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }

    }



    public function middleindex(){

        $notes = MiddleNote::latest()->paginate(15);
        return view('middlenote.index',compact('notes'));

    }

    public function middlecreate(){
          $categories = NotesCategory::all();
          return view('middlenote.create', compact('categories'));

    }

    public function middlestore(Request $request)
    {
             $validator = Validator::make($request->all(), [
            'name' => 'required|unique:middle_notes,name',
            'category_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $note = new MiddleNote();
        $note->name = $request->name;
        $note->type = 'middle';
        $note->slug = ('middle@'.str_slug($request->name));
        $note->description  = $request->description ;
        $note->category_id  = $request->category_id ;
        if($request->hasFile('image')){
            $note->image = $request->file('image')->store('uploads/middlenotes');
        }
             if($request->hasFile('banner_image')){
            $note->banner_image = $request->file('banner_image')->store('uploads/middlenotes');
        }

        if($note->save()){
            flash(__('Note inserted successfully'))->success();
            return redirect()->route('middlenote.index');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    public function middledestroy($id)
    {
        $note = MiddleNote::find($id);
        $note->delete();
        flash(__('Note Deleted successfully'))->success();
        return redirect()->route('middlenote.index');
    }

    public function middleedit($id){

        $note = MiddleNote::findOrFail(decrypt($id));
        $categories = NotesCategory::all();
        return view('middlenote.edit', compact('categories', 'note'));
    }

    public function middleupdate(Request $request,$id){

           $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $note = MiddleNote::find($id);
        $note->name = $request->name;
        $note->type = 'middle';
        $note->slug = ('middle@'.str_slug($request->name));
        $note->description  = $request->description ;
        $note->category_id  = $request->category_id ;
        if($request->hasFile('image')){
            $note->image = $request->file('image')->store('uploads/middlenotes');
        }
        if($request->hasFile('banner_image')){
            $note->banner_image = $request->file('banner_image')->store('uploads/middlenotes');
        }

        if($note->save()){
            flash(__('Note inserted successfully'))->success();
            return redirect()->route('middlenote.index');
        }
                else{
            flash(__('Something went wrong'))->error();
            return back();
        }

    }


    public function baseindex(){


        $notes = BaseNote::latest()->paginate(15);
        return view('basenote.index',compact('notes'));
    }

    public function basecreate(){
       $categories = NotesCategory::all();
       return view('basenote.create', compact('categories'));

    }

    public function basestore(Request $request)
    {
           $validator = Validator::make($request->all(), [
               'name' => 'required|unique:base_notes,name',
            'category_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $note = new BaseNote();
        $note->name = $request->name;
        $note->type = 'base';
        $note->slug = ('base@'.str_slug($request->name));
        $note->description  = $request->description ;
        $note->category_id  = $request->category_id ;
        if($request->hasFile('image')){
            $note->image = $request->file('image')->store('uploads/basenotes');
        }
              if($request->hasFile('banner_image')){
            $note->banner_image = $request->file('banner_image')->store('uploads/basenotes');
        }

        if($note->save()){
            flash(__('Note inserted successfully'))->success();
            return redirect()->route('basenote.index');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    public function basedestroy($id)
    {
        $note = BaseNote::find($id);
        $note->delete();
        flash(__('Note Deleted successfully'))->success();
        return redirect()->route('basenote.index');
    }

    public function baseedit($id){

        $note = BaseNote::findOrFail(decrypt($id));
        $categories = NotesCategory::all();
       return view('basenote.edit', compact('categories', 'note'));
    }

    public function baseupdate(Request $request,$id){
           $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $note = BaseNote::find($id);
        $note->name = $request->name;
        $note->type = 'base';
        $note->slug = ('base@'.str_slug($request->name));
        $note->description  = $request->description ;
        $note->category_id  = $request->category_id ;
        if($request->hasFile('image')){
            $note->image = $request->file('image')->store('uploads/basenotes');
        }
           if($request->hasFile('banner_image')){
            $note->banner_image = $request->file('banner_image')->store('uploads/basenotes');
        }

        if($note->save()){
            flash(__('Note inserted successfully'))->success();
            return redirect()->route('basenote.index');
        }
                else{
            flash(__('Something went wrong'))->error();
            return back();
        }

    }
}
