<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\JobOrder;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index(Request $request){

        $staffs = User::where(['user_type'=>'2'])->get();
        $totalStaff = count($staffs);

        $clients = Client::get();
        $totalClients = count($clients);

        $jobOrders = JobOrder::orderBy('id', 'desc')->get();
        $pendingOrders = $jobOrders->where('status','0');
        $totalJobOrders = $jobOrders->count();

        $notifications = Notification::orderBy('id', 'desc')->get();

        return view('dashboard.index',compact('totalStaff','totalClients','totalJobOrders','pendingOrders','notifications'));
    }
}
