<?php


namespace App\Http\Controllers\API;

use App\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Image;
use Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $successStatus = 200;
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */


    public function socialSignup(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $isUser = User::where('email', $request->email)->first();
        // if a user already registered
        if (!empty($isUser)) {
            //  $success['token'] =  $isUser->createToken('MyApp')->accessToken;
            return response()->json(['user' => $isUser]);
        }
        // if a user not already registered
        else {

            $input = $request->all();
            $input['email_verified_at'] = Carbon::now();
            $input['birth_date'] = Carbon::parse(($request->birth_date))->toDateString();
            if (isset($request->password)) {
                $input['password'] = bcrypt($request->password);
            }
            if ($request->file('avatar_original') != "") {
                $avatar_original_name = "";
                $file             = $request->file('avatar_original');
                $avatar_original = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move('public/uploads/users/', $avatar_original);
                $avatar_original_name      = 'public/uploads/users/' . $avatar_original;
                $input['avatar_original'] = $avatar_original_name;
            }
            $user = User::create($input);
            // $success['token'] =  $user->createToken('MyApp')->accessToken;
            $isUser = User::where('email', $request->email)->first();
            return response()->json(['user' => $isUser]);
        }
    }

    public function socialLogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $isUser = User::where('email', $request->email)->first();
        // if a user already registered
        if (!empty($isUser)) {
            $success['token'] =  $isUser->createToken('MyApp')->accessToken;
            return response()->json(['user' => $isUser]);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }





    public function userSignup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'xregister' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }


        if ($request->xregister == "yes") {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:5',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            }


            $input = $request->all();
            $input['email_verified_at'] = Carbon::now();
            $input['birth_date'] = Carbon::parse(($request->birth_date))->toDateString();
            if (isset($request->password)) {
                $input['password'] = bcrypt($request->password);
            }

            if ($request->file('avatar_original') != "") {
                $avatar_original_name = "";
                $file             = $request->file('avatar_original');
                $avatar_original = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move('public/uploads/users/', $avatar_original);
                $avatar_original_name      = 'public/uploads/users/' . $avatar_original;
                $input['avatar_original'] = $avatar_original_name;
            }
            $user = User::create($input);
            $success['token'] =  $user->createToken('MyApp')->accessToken;

            if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
                $loggedUser = Auth::user();
                return response()->json(['user' => $loggedUser]);
            } else {
                return response()->json(['error' => 'Unauthorised'], 401);
            }
        } else {

            $validator = Validator::make($request->all(), [
                'email' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            }

            $isUser = User::where('email', $request->email)->first();
            // if a user already registered
            if (!empty($isUser)) {
                $success['token'] =  $isUser->createToken('MyApp')->accessToken;
                return response()->json(['user' => $isUser]);
            }
            // if a user not already registered
            else {

                $input = $request->all();
                $input['email_verified_at'] = Carbon::now();
                $input['birth_date'] = Carbon::parse(($request->birth_date))->toDateString();
                if (isset($request->password)) {
                    $input['password'] = bcrypt($request->password);
                }
                if ($request->file('avatar_original') != "") {
                    $avatar_original_name = "";
                    $file             = $request->file('avatar_original');
                    $avatar_original = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                    $file->move('public/uploads/users/', $avatar_original);
                    $avatar_original_name      = 'public/uploads/users/' . $avatar_original;
                    $input['avatar_original'] = $avatar_original_name;
                }
                $user = User::create($input);
                $success['token'] =  $user->createToken('MyApp')->accessToken;
                $isUser = User::where('email', $request->email)->first();
                return response()->json(['user' => $isUser]);
            }
        }
    }


    public function userLogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:5',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            return response()->json(['user' => $user]);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    public function login(Request $request)
    {

        //normal register
        if ($request->type == "register") {

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:5',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            }
            $input = $request->all();
            $input['email_verified_at'] = Carbon::now();
            $input['birth_date'] = Carbon::parse(($request->birth_date))->toDateString();
            $input['password'] = bcrypt($input['password']);

            if ($request->file('avatar_original') != "") {
                $avatar_original_name = "";
                $file             = $request->file('avatar_original');
                $avatar_original = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move('public/uploads/users/', $avatar_original);
                $avatar_original_name      = 'uploads/users/' . $avatar_original;
                $input['avatar_original'] = $avatar_original_name;
            }
            $user = User::create($input);
            $success['token'] =  $user->createToken('MyApp')->accessToken;

            if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
                $loggedUser = Auth::user();
            }
            return response()->json(['user' => $loggedUser]);
        }

        //social login or register
        elseif ($request->type == "social") {

            $isUser = User::where('email', $request->email)->first();
            // if a user already registered
            if (!empty($isUser)) {
                $success['token'] =  $isUser->createToken('MyApp')->accessToken;
                return response()->json(['user' => $isUser]);
            }
            // if a user not already registered
            else {
                $validator = Validator::make($request->all(), [
                    'email' => 'required|email|unique:users',
                ]);
                $input = $request->all();
                $input['email_verified_at'] = Carbon::now();
                $input['password'] = bcrypt($input['password'] ?? (123456));
                // $input['image_url'] = $input['image_url'] ?? null;
                
                
                    if ($request->file('avatar_original') != "") {
                    $avatar_original_name = "";
                    $file             = $request->file('avatar_original');
                    $avatar_original = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                    $file->move('public/uploads/users/', $avatar_original);
                    $avatar_original_name      = 'uploads/users/' . $avatar_original;
                    $input['avatar_original'] = $avatar_original_name;
                }
                
                   if ($request->file('image_url') != "") {
                    $avatar_original_name2 = "";
                    $file2             = $request->file('image_url');
                    $avatar_original2 = md5($file2->getClientOriginalName() . time()) . "." . $file2->getClientOriginalExtension();
                    $file2->move('public/uploads/users/', $avatar_original2);
                    $avatar_original_name2      = 'uploads/users/' . $avatar_original2;
                    $input['image_url'] = $avatar_original_name2;
                }
                
                $user = User::create($input);
                $success['token'] =  $user->createToken('MyApp')->accessToken;
                $isUser = User::where('email', $request->email)->first();
                return response()->json(['user' => $isUser]);
            }
        }

        //login action
        elseif ($request->type == "login") {

            $validator = Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required|min:5',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            }

            if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
                $user = Auth::user();
                $success['token'] =  $user->createToken('MyApp')->accessToken;
                return response()->json(['user' => $user]);
            } else {
                return response()->json(['error' => 'Unauthorised'], 401);
            }
        } else {
            return response()->json(['error' => 'Invalid Action'], 401);
        }
    }



    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['email_verified_at'] = Carbon::now();
        $input['birth_date'] = date("Y-m-d", strtotime($request->birth_date));
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;
        $success['email_verified_at'] = Carbon::now();
        return response()->json(['success' => $success], $this->successStatus);
    }
    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    public function myProfile()
    {
        $user = User::where('id', Auth::id())->first(['name', 'email', 'balance', 'avatar', 'phone', 'address', 'country', 'city']);
        return response()->json(['user' => $user]);
    }


  public function updateProfile(Request $request)
    {
        if($request->type=="profile"){

            $user = Auth::user();
            $user->name = $request->name ?? $user->name;
            $user->email = $request->email ?? $user->email;
            $user->gender = $request->gender ?? $user->gender;
            $user->birth_date = $request->birth_date ?? $user->birth_date;
            $user->newsletter = $request->newsletter ?? $user->newsletter;
            $user->notification  = $request->notification ?? $user->notification;
            $user->sample = $request->sample ?? $user->sample;
            $user->public_profile = $request->public_profile ?? $user->public_profile;
            $user->save();
            return response()->json(['user' => $user]);
        }

        elseif($request->type=="password"){

            $user = Auth::user();

            $request->validate([
                'old_password' => 'required',
                'password' => 'required|max:40|min:6'
            ]);

            if($request->password != $request->password_confirmation){

                return response()->json(['error', 'New password & confirm password is mismatch ']);
            }

            if (!Hash::check($request->old_password, auth()->user()->password)) {

                return response()->json(['error', 'Your old password doesnt match']);

            }
            auth()->user()->update([
                'password' => bcrypt($request->password)
            ]);

            return response()->json(['user' => $user]);

        }

        else{

            return response()->json(['error','Invalid Action']);
        }


    }


    public function myWishlist()
    {
        $user = Wishlist::where('id', Auth::id())->first(['name', 'email', 'balance', 'avatar', 'phone', 'address', 'country', 'city']);
        return response()->json(['user' => $user]);
    }



    public function customerByEmail(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        return response()->json(['user' => $user]);
    }
    
        public function updateUserProfile(Request $request, $id){
//      if(empty($name)){
//          $validator = Validator::make(request()->all(), [
//          ]);
//
//          $validator->errors()->add('name', 'Id cannot be empty');
//          return response()->json(['error' => $validator->errors()], 401);
//      }

        $inputs = $request->input();
        $s=User::find($id);
        foreach($inputs as $key=>$value){
            if(isset($request->$key)){
                $s->$key=$value;
            }
        }
        $s->save();
        return $s;
    }
}
