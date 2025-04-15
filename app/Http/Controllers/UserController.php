<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\RedirectMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class UserController extends Controller
{
    //validation function
    public function profileValidator(array $data, $userId = null)
    {
        return Validator::make($data, [
            "name" => ["required", "string", "max:100", "min:3"],
            "email" => ["required", "string", "max:100", "min:6", "email", Rule::unique('users','email')->ignore($userId)],
            "password" => ["required", "min:8", 'max:20', 'string'],
            "phone" => ["required", "string", "min:10", "max:10",  Rule::unique('users','phone')->ignore($userId)],
            'profile_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            "gender" => ["required", "string", "min:4", 'max:6'],
            "dob" => ["required", 'date'],
        ]);
    }
    //register function
    public function register(Request $request)
    {

        //calling validator function and passing request data from frontend as argument
        $validator = $this->profileValidator($request->all());
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        //Moving images to local folder for saving image path in database
        if (isset($request->profile_image)) {
            $image = $request->profile_image;
            $image_new_name = time() . $image->getClientOriginalName();
            $image->move('images/user/', $image_new_name);
            $imagePath = 'images/user/' . $image_new_name;
        } else {
            $imagePath = 'images/user/default.jpg';
        }

        //for saving data in database through model
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->profile_image = $imagePath;
        $user->password = $request->password;
        $user->save();
        // User::create([
        //     'name'=>$request->name,
        //     'gender'=>$request->gender,
        //     'dob'=>$request->dob,
        //     'phone'=>$request->phone,
        //     'email'=>$request->email,
        //     'password'=>$request->password,
        //     'profile_image'=>$request->profile_images
        // ]);
        return redirect("/login");
    }

    //LOGIN function
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "email" => 'required|min:6|max:25|string|email|exists:users',
            "password" => 'required|min:8|max:25|string',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $user = User::where('email', $request->email)->first();
        if ($user->password !=$request->password) {
            return back()->withErrors(["password"=>"User password did not match"])->withInput();
        }
        Auth::login($user);
        if ($user->role == "employee") {
            return redirect('/employee/dashboard')->with('success','Logged in successfully as employee');
        } elseif ($user->role == "employer") {
            return redirect("/employer/dashboard")->with('success','Logged in successfully as employer');;
        } else {
            return redirect("/");
        }
    }
    public function profileBoard(){
        $user=Auth::user();
        return view("profile/profile", compact("user"));
    }
    public function editProfile(){
        $user=Auth::user();
        return view("profile/edit",compact('user'));

    }
    public function logout()
    {
        Auth::logout();
        return redirect("/")->with('success','Logged out successfully');
    }
    public function updateProfile(Request $request){
        $validator=$this->profileValidator($request->all(), Auth::id());
        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $user=User::find($request->id);
        if (isset($request->profile_image)) {
            $image = $request->profile_image;
            $image_new_name = time() . $image->getClientOriginalName();
            $image->move('images/user/', $image_new_name);
            $imagePath = 'images/user/' . $image_new_name;
        } else {
            $imagePath = $user->profile_image;
        }
        $user->update([
            'name'=>$request->name,
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>$request->password,
            'profile_image'=>$imagePath
        ]);
        return redirect("/profile");
    
    }
}
    
 
    
    

  


