<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{



    public function index(Request $request){
        $staffs = User::where('user_type','2')->orderBy('id','DESC')->get();
        return view('staff.all-staff',compact('staffs'));
    }

    public function create(Request $request){
        return view('staff.add-staff');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|numeric|digits_between:8,13|unique:users,mobile',
            'gender' => 'required',
            'password' => 'required|min:6',
        ]);

        try {
            $user = User::create([
                'name'          => $request->name,
                'email'         => $request->email,
                'dial_code'     => $request->dial_code,
                'mobile'        => $request->mobile,
                'password'      => Hash::make($request->password),
                'user_type'     => '2',
                'gender'     => $request->gender,
            ]);
            $details  = User::where('id', $user->id)->first();
            return redirect()->back()->with('success','Register Successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Something Went Wrong. Please Try Again!');
        }

    }

    public function edit(Request $request)
    {
        $id = base64_decode($request->id);
        $staff = User::whereId($id)->first();
        return view('staff.edit-staff',compact('staff'));

    }

    public function update(Request $request)
    {

        $user = User::findOrFail($request->id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'mobile' => 'required|numeric|digits_between:8,13|unique:users,mobile,' . $user->id,
            'gender' => 'required',
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        try {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->email = $request->email;
            $user->email = $request->email;
            $user->email = $request->email;
            if($request->has('password')){
                $user->password = Hash::make($request->password);
            }
            return redirect()->back()->with('success','Register Successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Something Went Wrong. Please Try Again!');
        }

    }

}
