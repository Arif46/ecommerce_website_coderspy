<?php

namespace App\Http\Controllers;

use App\GeneralSetting;
use App\LegalFileManager;
use App\LegalFileType;
use App\Mail\ExpiryMailSend;
use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Facades\Mail;
use Stripe\File;

class FileManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $managers= LegalFileManager::get();
        return view('legal.file_manage_index',compact('managers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $legalTypes = LegalFileType::where('status',1)->get();
        return view('legal.file_manage_create',compact('legalTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $validatedData = $request->validate([
                'name' => 'required|unique:legal_file_managers',
                'title' => 'required|unique:legal_file_managers',
            ]);
            $data = $request->all();
            $legal_type = new LegalFileManager;
            $legal_type->name = $request->name;
            $legal_type->type_id = $request->type_id;
            $legal_type->title = $request->title;
            $legal_type->expire_date = date('Y-m-d', strtotime($request->expire_date));
            $legal_type->status = $request->status;
            if ($request->file('file') != "") {
                $avatar_original_name = "";
                $file             = $request->file('file');
                $avatar_original = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move('public/uploads/legalFile/', $avatar_original);
                $avatar_original_name      = 'uploads/legalFile/' . $avatar_original;
                $legal_type->file = $avatar_original_name;
            }
            $legal_type->save();

            flash(__('Legal file added successfully'))->success();
        }catch (\Exception $ex){
            flash(__('Opps something wrong'))->error();
        }
        return redirect()->back();
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
        $legalTypes = LegalFileType::where('status',1)->get();
        $manage = LegalFileManager::findOrFail($id);

        return view('legal.file_manage_edit',compact('manage','legalTypes'));
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
        try{
            $data = $request->all();
            $legal_type = LegalFileManager::firstOrNew(['id'=>$id]);
            $legal_type->name = $request->name;
            $legal_type->type_id = $request->type_id;
            $legal_type->title = $request->title;
            $legal_type->expire_date = date('Y-m-d', strtotime($request->expire_date));
            $legal_type->status = $request->status;
            if ($request->file('file') != "") {
                $avatar_original_name = "";
                $file             = $request->file('file');
                $avatar_original = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move('public/uploads/legalFile/', $avatar_original);
                $avatar_original_name      = 'uploads/legalFile/' . $avatar_original;
                $legal_type->file = $avatar_original_name;
            }
            $legal_type->save();
            flash(__('Legal file updated successfully'))->success();
        }catch (\Exception $ex){
            flash(__('Opps something wrong'))->error();
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $filename = LegalFileManager::find($id);
                if(!empty($filename)){
                    @unlink(base_path('/public').'/'.$filename->file);
                }
            $filename->delete();
            flash(__('Legal file has been deleted'))->success();
        }catch (\Exception $ex){
            flash(__('Legal file did not deleted '))->error();
        }
        return redirect()->back();
    }

    public function expireMailSend(){
        try {
            $generalSettings = GeneralSetting::select('logo','email','phone','site_name')->firstOrFail();
            $logo = $generalSettings->logo;
            $siteEmail = $generalSettings->email;
            $phone = $generalSettings->phone;
            $siteName = $generalSettings->site_name;
            $fileData = LegalFileManager::select('file')->first();
            $file = $fileData->file;
            Mail::to('mohammad.abid.dev@gmail.com')->send(new ExpiryMailSend($logo,$siteEmail,$phone,$siteName,$file));

            flash(__('Mail sent successfully'))->success();
        }catch(\Exception $ex){
            return redirect()->back()->$ex->getMessage();
        }
        return redirect()->back();
    }
}
