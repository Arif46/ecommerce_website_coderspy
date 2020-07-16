<?php

namespace App\Http\Controllers;

use Hash;
use App\Role;
use App\User;
use App\Staff;
use App\Country;
use App\Reference;
use App\Department;
use App\StaffRefer;
use App\Designation;
use App\OfficeDocFile;
use App\UserEducation;
use Illuminate\Http\Request;
use App\UserEmergencyContact;
use Illuminate\Support\Facades\Validator;


class StaffController extends Controller
{
   
  /////////////////department///////////////////////


     public function departmentindex()
    {
        $Department = Department::all();
        return view('staffs.department_index', compact('Department'));
    }

       public function departmentcreate()
    {
        
        return view('staffs.department_create');
    }
 

       public function departmentstore(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'dept_name' => 'required|unique:departments',
          
        ]);
        $department = new Department;
             $department->dept_name = $request->dept_name;
             $department->active_status = $request->active_status;
           if($department->save()){
                flash(__('Department has been inserted successfully'))->success();
                return redirect()->route('department.index');
            }
             flash(__('Something went wrong'))->error();
        return back();

    }

      public function departmentedit($id)
    {
        $Department = Department::findOrFail($id);

        return view('staffs.department_edit',compact('Department'));
    }


        public function departmentupdate(Request $request, $id)
    {
        $bank = Department::find($id);
        $bank->dept_name = $request->dept_name;
        $bank->active_status = $request->active_status;
        if($bank->save()){
            flash(__('Department been updated successfully'))->success();
            return redirect()->route('department.index');
        }
                else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }


        public function departmentdestroy($id)
    {
        $OfficeDocFile = Department::find($id);
        if(Department::destroy($id)){
            flash(__('Department has been deleted successfully'))->success();
            return redirect()->route('doc.index');
        }

        flash(__('Something went wrong'))->error();
        return back();
    }
  
  ///////////////////////////////////////////////  
 ////////////////////////Designation/////////////

     public function designationindex()
    {
        $Designation = Designation::all();
        return view('staffs.designation_index', compact('Designation'));
    }

       public function designationcreate()
    {
        
        return view('staffs.designation_create');
    }
 

       public function designationstore(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'des_name' => 'required|unique:designations',
          
        ]);
        $Designation = new Designation;
             $Designation->des_name = $request->des_name;
             $Designation->active_status = $request->active_status;
           if($Designation->save()){
                flash(__('Designation has been inserted successfully'))->success();
                return redirect()->route('designation.index');
            }
             flash(__('Something went wrong'))->error();
        return back();

    }

      public function designationedit($id)
    {
        $Designation = Designation::findOrFail($id);

        return view('staffs.designation_edit',compact('Designation'));
    }


        public function designationupdate(Request $request, $id)
    {
        $Designation = Designation::find($id);
        $Designation->des_name = $request->des_name;
        $Designation->active_status = $request->active_status;
        if($Designation->save()){
            flash(__('Designation been updated successfully'))->success();
            return redirect()->route('designation.index');
        }
                else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }


        public function designationdestroy($id)
    {
        $Designation = Designation::find($id);
        if(Designation::destroy($id)){
            flash(__('Department has been deleted successfully'))->success();
            return redirect()->route('doc.index');
        }

        flash(__('Something went wrong'))->error();
        return back();
    }
      /////////////////////////////////////////////   
     ////////////////////////Staff Profile/////////////

     public function profileindex()
    {
        $Users = User::join('departments','users.department_id','departments.id')
        ->join('designations','users.department_id','designations.id')
        ->select('users.*','departments.dept_name','designations.des_name')
        ->get();
        // return $Users;
        return view('staffs.profile_index', compact('Users'));
    }

       public function profilecreate()
    {
         $department = Department::all();
         $designation = Designation::all();
      return view('staffs.profile_create', compact('department','designation'));
      
    }
 

    public function profilestore(Request $request)
    {
        // return $request;


        $staff = new User();
        $staff->full_name = $request->full_name;
        $staff->father_name = $request->father_name;
        $staff->mother_name = $request->mother_name;
        $staff->nationality = $request->nationality;
        $staff->birth_date = $request->birth_date;
        $staff->phone = $request->phone;
        $staff->home_number = $request->home_number;
        $staff->email = $request->email;
        $staff->mailing_address = $request->mailing_address;
        $staff->id_number = $request->id_number;
        $staff->id_type = $request->id_type;
        $staff->id_expire_date = $request->id_expire_date;
        $staff->driving_license_number = $request->driving_license_number;
        $staff->driving_license_issue_date = $request->driving_license_issue_date;
        $staff->present_address = $request->present_address;
        $staff->country = $request->country;
        $staff->city = $request->city;

        $image = "";
        if ($request->file('image') != "") {
            $file = $request->file('image');
            $image = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/uploads/staff/', $image);
            $image = 'uploads/staff/' . $image;
            $staff->image = $image;
        }

        $staff->blood_group = $request->blood_group;
        $staff->religion = $request->religion;
        $staff->gender = $request->gender;
        $staff->marital_status = $request->marital_status;
        $staff->permanent_address = $request->permanent_address;
        $staff->employeer = $request->employeer;
        $staff->employee_code = $request->employee_code;
        $staff->visa_status = $request->visa_status;
        $staff->joining_date = $request->joining_date;
        $staff->department_id = $request->department_id;
        $staff->designation_id = $request->designation_id;
        $staff->basic_salary = $request->basic_salary;
        $staff->other_income = $request->other_income;
        $staff->commission_grade = $request->commission_grade;

        // signature 
        // $folderPath = public_path('uploads/staff/signature/');
        $image_parts = explode(";base64,", $request->signed);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        // $file = $folderPath . uniqid() . '.'.$image_type;
        $url = 'uploads/staff/signature/'.uniqid() . '.'.$image_type;
        file_put_contents(public_path($url), $image_base64);
        
        

        $staff->electronic_signature = $url;
        $staff->save();

        $i = 0;

        foreach ($request->degree as  $degree) {
            if ($degree != 'none') {
                $edu = new UserEducation();
                $edu->user_id = $staff->id;
                $edu->degree = $request->degree[$i];
                $edu->major = $request->major[$i];
                $edu->graduation_date = $request->graduation_date[$i];
                $edu->save();
            }
            $i++;
        }

        $ref = new Reference();
        $ref->user_id = $staff->id;
        $ref->refer_name = $request->refer_name;
        $ref->relationship = $request->relationship;
        $ref->refer_address = $request->refer_address;
        $ref->refer_mobile = $request->refer_mobile;
        $ref->refer_email = $request->refer_email;
        $ref->save();

        
        $EmgContact = new UserEmergencyContact();
        $EmgContact->user_id = $staff->id;
        $EmgContact->emer_cont_name = $request->emer_cont_name;
        $EmgContact->emer_cont_relationship = $request->emer_cont_relationship;
        $EmgContact->emer_cont_address = $request->emer_cont_address;
        $EmgContact->emer_cont_phone = $request->emer_cont_phone;
        $EmgContact->emer_cont_house_no = $request->emer_cont_house_no;
        $EmgContact->emer_cont_email = $request->emer_cont_email;
        $EmgContact->save();
        
        if($staff->save() && $ref->save() && $EmgContact->save() ){
            flash(__('Staff Create successfully'))->success();
            return redirect()->route('staff_profile.index');
        }
            flash(__('Something went wrong'))->error();
        return back();

    }

      public function profileedit($id)
    {
        // return $id;
        $department = Department::all();
        $designation = Designation::all();
        $user = User::where('id',$id)->first();
        // return $user;
        $edus = UserEducation::where('user_id',$user->id)->get();
        $ref = Reference::where('user_id',$user->id)->first();
        $EmgContact = UserEmergencyContact::where('user_id',$user->id)->first();


        return view('staffs.profile_edit',compact('department','designation','user','edus','ref','EmgContact'));
    }


        public function profileupdate(Request $request, $id)
    {
        $staff = User::where('id',$id)->first();
        $staff->full_name = $request->full_name;
        $staff->father_name = $request->father_name;
        $staff->mother_name = $request->mother_name;
        $staff->nationality = $request->nationality;
        $staff->birth_date = $request->birth_date;
        $staff->phone = $request->phone;
        $staff->home_number = $request->home_number;
        $staff->email = $request->email;
        $staff->mailing_address = $request->mailing_address;
        $staff->id_number = $request->id_number;
        $staff->id_type = $request->id_type;
        $staff->id_expire_date = $request->id_expire_date;
        $staff->driving_license_number = $request->driving_license_number;
        $staff->driving_license_issue_date = $request->driving_license_issue_date;
        $staff->present_address = $request->present_address;
        $staff->country = $request->country;
        $staff->city = $request->city;

        $image = "";
        if ($request->file('image') != "") {
            $file = $request->file('image');
            $image = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/uploads/staff/', $image);
            $image = 'uploads/staff/' . $image;
            $staff->image = $image;
        }

        $staff->blood_group = $request->blood_group;
        $staff->religion = $request->religion;
        $staff->gender = $request->gender;
        $staff->marital_status = $request->marital_status;
        $staff->permanent_address = $request->permanent_address;
        $staff->employeer = $request->employeer;
        $staff->employee_code = $request->employee_code;
        $staff->visa_status = $request->visa_status;
        $staff->joining_date = $request->joining_date;
        $staff->department_id = $request->department_id;
        $staff->designation_id = $request->designation_id;
        $staff->basic_salary = $request->basic_salary;
        $staff->other_income = $request->other_income;
        $staff->commission_grade = $request->commission_grade;

        if ($request->signed != "") {
            // signature 
            // $folderPath = public_path('uploads/staff/signature/');
            $image_parts = explode(";base64,", $request->signed);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            // $file = $folderPath . uniqid() . '.'.$image_type;
            $url = 'uploads/staff/signature/'.uniqid() . '.'.$image_type;
            file_put_contents(public_path($url), $image_base64);

            $staff->electronic_signature = $url;
        }
        $staff->save();


        $existing_degrees = UserEducation::where('user_id', $id)->get();

        foreach ($existing_degrees as  $existing_degree) {
            $deg = UserEducation::findOrfail($existing_degree->id);
            $deg->delete();
        }

        $i = 0;
        foreach ($request->degree as  $degree) {
            if ($degree != 'none') {
                $edu = new UserEducation();
                $edu->user_id = $staff->id;
                $edu->degree = $request->degree[$i];
                $edu->major = $request->major[$i];
                $edu->graduation_date = $request->graduation_date[$i];
                $edu->save();
            }
            $i++;
        }

        $ref = Reference::where('user_id',$id)->first();
        $ref->user_id = $staff->id;
        $ref->refer_name = $request->refer_name;
        $ref->relationship = $request->relationship;
        $ref->refer_address = $request->refer_address;
        $ref->refer_mobile = $request->refer_mobile;
        $ref->refer_email = $request->refer_email;
        $ref->save();

        
        $EmgContact = UserEmergencyContact::where('user_id',$id)->first();
        $EmgContact->user_id = $staff->id;
        $EmgContact->emer_cont_name = $request->emer_cont_name;
        $EmgContact->emer_cont_relationship = $request->emer_cont_relationship;
        $EmgContact->emer_cont_address = $request->emer_cont_address;
        $EmgContact->emer_cont_phone = $request->emer_cont_phone;
        $EmgContact->emer_cont_house_no = $request->emer_cont_house_no;
        $EmgContact->emer_cont_email = $request->emer_cont_email;
        $EmgContact->save();
        
        if($staff->save() && $ref->save() && $EmgContact->save() ){
            flash(__('Staff Info Updated successfully'))->success();
            return redirect()->route('staff_profile.index');
        }
            flash(__('Something went wrong'))->error();
        return back();
    }


        public function profiledestroy($id)
    {
        $staff = User::find($id);
        $staff->delete();

        $degrees = UserEducation::where('user_id', $id)->get();

        foreach ($degrees as  $degree) {
            $deg = UserEducation::findOrfail($degree->id);
            $deg->delete();
        }

        $ref = Reference::where('user_id',$id)->first();
        $ref->delete();

        $EmgContact = UserEmergencyContact::where('user_id',$id)->first();
        $EmgContact->delete();

        if($staff && $ref && $EmgContact){
            flash(__('Staff Profile has been deleted successfully'))->success();
            return redirect()->route('staff_profile.index');
        }

        flash(__('Something went wrong'))->error();
        return back();
    }
 ///////////////////////////////////////////// 

     public function docindex()
    {
        $OfficeDocFile = OfficeDocFile::all();
        return view('staffs.doc_file_index', compact('OfficeDocFile'));
    }

       public function doccreate()
    {
        
        return view('staffs.doc_file_create');
    }
 

       public function docstore(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'file_title' => 'required|unique:office_doc_files',
          
        ]);
        $bank = new OfficeDocFile;
             $bank->file_title = $request->file_title;
             $bank->status = $request->status;

         if ($request->file('file') != "") {
                $avatar_original_name = "";
                $file             = $request->file('file');
                $avatar_original = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move('public/uploads/officedoc/', $avatar_original);
                $avatar_original_name      = 'uploads/officedoc/' . $avatar_original;
                $bank->file = $avatar_original_name;
            }
   
            if($bank->save()){
                flash(__('File has been inserted successfully'))->success();
                return redirect()->route('doc.index');
            }
             flash(__('Something went wrong'))->error();
        return back();

    }

      public function docedit($id)
    {
        $department = Department::all();
         $designation = Designation::all();

        return view('staffs.doc_file_edit',compact('OfficeDocFile'));
    }


        public function docupdate(Request $request, $id)
    {
        $bank = OfficeDocFile::find($id);
        $bank->file_title = $request->file_title;
        $bank->status = $request->status;
       if ($request->file('file') != "") {
                $avatar_original_name = "";
                $file             = $request->file('file');
                $avatar_original = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move('public/uploads/officedoc/', $avatar_original);
                $avatar_original_name      = 'uploads/officedoc/' . $avatar_original;
                $bank->file = $avatar_original_name;
            }

        if($bank->save()){
            flash(__('File been updated successfully'))->success();
            return redirect()->route('doc.index');
        }
                else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }


        public function docdestroy($id)
    {
        $OfficeDocFile = OfficeDocFile::find($id);
        if(OfficeDocFile::destroy($id)){
            flash(__('File has been deleted successfully'))->success();
            return redirect()->route('doc.index');
        }

        flash(__('Something went wrong'))->error();
        return back();
    }


    public function index()
    {
        $staffs = Staff::all();
        return view('staffs.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('staffs.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'role_id' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'country' => 'required',
        ]);
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->gender = $request->gender;
        $user->salary = $request->salary;
        $user->birth_date = $request->birth_date;
        $user->phone = $request->mobile;
        $user->email = $request->email;
        $user->present_address = $request->present_address;
        $user->permanent_address = $request->permanent_address;
        $user->country = $request->country;
        $user->blood_group = $request->blood_group;
        $user->religion = $request->religion;
        $user->city = $request->city;
        $user->user_type = "staff";
        $user->password = Hash::make($request->password);
         if($request->hasFile('image')){
            $user->image = $request->file('image')->store('public/uploads/user');
        }
        if($user->save()){
            $staff = new Staff;
            $staff->user_id = $user->id;
            $staff->role_id = $request->role_id;
            if($staff->save()){
                flash(__('Staff has been inserted successfully'))->success();
                return redirect()->route('staffs.index');
            }
        }

        flash(__('Something went wrong'))->error();
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
        $staff = Staff::findOrFail(decrypt($id));
        $roles = Role::all();
        return view('staffs.edit', compact('staff', 'roles'));
    }



    public function update(Request $request, $id)
    {
        $staff = Staff::findOrFail($id);
        $user = $staff->user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->mobile;
        if(strlen($request->password) > 0){
            $user->password = Hash::make($request->password);
        }
        if($user->save()){
            $staff->role_id = $request->role_id;
            if($staff->save()){
                flash(__('Staff has been updated successfully'))->success();
                return redirect()->route('staffs.index');
            }
        }

        flash(__('Something went wrong'))->error();
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
        User::destroy(Staff::findOrFail($id)->user->id);
        if(Staff::destroy($id)){
            flash(__('Staff has been deleted successfully'))->success();
            return redirect()->route('staffs.index');
        }

        flash(__('Something went wrong'))->error();
        return back();
    }
}