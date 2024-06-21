<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class JobOrderController extends Controller
{
    public function index(Request $request){
        return view('jobOrder.assigned-job-order');
    }

    public function create(Request $request){
        $staffs = User::where(['user_type'=>'2','status'=>'1'])->get();
        // $staffs = [];
        return view('jobOrder.create-job-order',compact('staffs'));
    }

    public function getClient(Request $request){
        // dd($request->client_type);
        // $clients =[];
        $client_type = $request->client_type;
        $clients = Client::where('client_type',$client_type)->get();
        $clientsOptions = '<option value="">Select an Option</option>';
        foreach ($clients as $client) {
            $clientsOptions .= '<option value="' . $client->id . '">' . $client->name . '</option>';
        }
        return response()->json(['clientsOptions' => $clientsOptions]);
    }

    public function report(Request $request){
        return view('report.reports');
    }

    public function show(Request $request){
        return view('jobOrder.view-job-order');
    }
}
