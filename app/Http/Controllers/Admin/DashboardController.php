<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
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

        return view('dashboard.index',compact('totalStaff','totalClients'));
    }
}
