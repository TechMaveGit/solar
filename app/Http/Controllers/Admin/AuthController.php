<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Common\ImageController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        if($request->isMethod('POST')){

            $validator = Validator::make($request->all(), [
                'email' => 'required|email|exists:users,email',
                'password' => 'required'
            ]);

            $remember_me = $request->has('remember_me') ? true : false;

            if (User::where(['status' => '0', 'email' => $request->email])->exists()) {
                $validator->errors()->add('email', 'Inactive user found.');
                return redirect()->back()->withErrors($validator)->withInput();
            }
            elseif (User::where(['user_type' => '2', 'email' => $request->email])->exists()) {
                $validator->errors()->add('email', 'User Not Found.');
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Check for validation failure after adding custom errors
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                // Perform login attempt if validation passes
                if (Auth::guard('admin')->attempt($request->only(['email', 'password']), $remember_me)) {
                    return redirect()->route('admin.dashboard');
                } else {
                    // Add custom error message if login attempt fails
                    $validator->errors()->add('email', 'Invalid email or password.');
                    return redirect()->back()->withErrors($validator)->withInput();
                }
            }
        }
        if(Auth::guard("admin")->user()){
            return redirect()->route('admin.dashboard');
        }
        return view('auth.login');
    }

    public function profile(Request $request)
    {
        $user = Auth::guard('admin')->user();
        return view('Admin.Auth.profile',compact('user'));
    }

    public function update_profile(Request $request)
    {
        $user = User::whereId(auth('admin')->user()->id)->first();
        // dd($request->all());
        $request->validate([
            'email'         => 'required|email|unique:users,email,' . $user->id,
            'mobile'        => 'required|numeric|digits_between:8,13|unique:users,mobile,' . $user->id,
            'name'          => 'required',
        ]);
        try {
            if($request->password !=''){
                $user_data['password']  = Hash::make($request->password);
            }
            $user_data['name']          = $request->name;
            $user_data['email']         = $request->email;
            $user_data['mobile']        = $request->mobile;
            User::whereId($user->id)->update($user_data);
            return redirect()->back()->with('success','Profile Updated Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','something went wrong');
        }

    }

    public function upload_profile(Request $request)
    {
        $dateFolder = 'Admin-profile';
        if($request->hasFile('profile_image')){
            $profile_images = $request->file('profile_image');
            $profile_image = ImageController::upload($profile_images,$dateFolder);
        }
        User::whereId(auth('admin')->user()->id)->update(['profile_image' => $profile_image]);
        return response()->json(['success' => 'Image uploaded successfully']);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('auth.login');
    }


}
