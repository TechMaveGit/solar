<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\StaffMail;
use App\Models\JobOrder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class StaffController extends Controller
{


    public function index(Request $request){
        $staffs = User::where('user_type','2')->withCount('jobOrders')->orderBy('id','DESC')->get();
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
                'status'     => $request->status,
            ]);
            $data  = User::where('id', $user->id)->first();
            $password = $request->password;

            Mail::to($request->email)->send(new StaffMail($data, $password));

            return redirect()->route('admin.all-staff')->with('success','Staff Added Successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Something Went Wrong. Please Try Again!');
        }

    }

    public function edit(Request $request)
    {
        $id = base64_decode($request->id);
        $staff = User::whereId($id)->where('user_type','2')->first();
        if (!$staff) {
            return redirect()->back()->with('error', 'Staff not found or invalid.');
        }
        return view('staff.edit-staff',compact('staff'));

    }

    public function update(Request $request)
    {

        $staff = User::where('user_type','2')->find($request->id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $staff->id,
            'mobile' => 'required|numeric|digits_between:8,13|unique:users,mobile,' . $staff->id,
            'gender' => 'required',
            'password' => 'nullable|string|min:6',
        ]);

        try {
            $staff->name = $request->name;
            $staff->email = $request->email;
            $staff->dial_code = $request->dial_code;
            $staff->mobile = $request->mobile;
            $staff->gender = $request->gender;
            $staff->status = $request->status;
            $staff->user_type = '2';
            if($request->filled('password')){
                $staff->password = Hash::make($request->password);
            }
            $staff->save();
            return redirect()->route('admin.all-staff')->with('success','Staff Updated Successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Something Went Wrong. Please Try Again!');
        }

    }

    public function changeStatus(Request $request) {
        $id = $request->id;
        $staff = User::whereId($id)->where('user_type', '2')->first();

        if ($staff) {
            $staff->status = $staff->status == 1 ? 2 : 1;
            $staff->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }

    public function jobOrders(Request $request){

        $id = base64_decode($request->id);

        $jobOrders = JobOrder::where('staff_id',$id)->with(['client', 'staff'])->orderBy('id','desc')->get();


        return view('staff.staff-all-job-orders',compact('jobOrders'));

    }


}
