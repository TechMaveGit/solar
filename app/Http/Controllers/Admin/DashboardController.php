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

        $jobOrders = JobOrder::with('client','staff','base_documents')->orderBy('id', 'desc')->get();

        $pendingOrders = $jobOrders->where('status','0');

        $completeOrders = $jobOrders->where('status','3')->sortByDesc('completed_date');
        $DomesticcompleteOrders = $completeOrders->where('client_type','1');
        $NONcompleteOrders = $completeOrders->where('client_type','2');
        // dd($DomesticcompleteOrders);
        $totalJobOrders = $jobOrders->count();
        $CountcompleteOrders = $completeOrders->count();
        $CountpendingOrders = $pendingOrders->count();

        $notifications = Notification::orderBy('id', 'desc')->get();

        return view('dashboard.index',compact('totalStaff','totalClients','totalJobOrders','pendingOrders','notifications','CountcompleteOrders','CountpendingOrders','DomesticcompleteOrders','NONcompleteOrders'));
    }
}
