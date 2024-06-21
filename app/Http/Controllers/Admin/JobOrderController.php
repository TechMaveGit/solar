<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\JobOrder;
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

    public function store(Request $request){
        // dd($request->all());
        $installation = [
            'applicant_name' => $request->applicant_name,
            'installation_address' => $request->installation_address,
            'installation_eircode' => $request->installation_eircode,
            'installation_mprn' => $request->installation_mprn,
        ];

        $jobOrder = new JobOrder();
        $jobOrder->client_type = $request->client_type;
        $jobOrder->client_id = $request->client_id;
        $jobOrder->staff_id = $request->staff_id;
        $jobOrder->date = $request->date;
        $jobOrder->time = $request->time;
        $jobOrder->address = $request->address;
        $jobOrder->country = $request->country;
        $jobOrder->city = $request->city;
        $jobOrder->postal_code = $request->postal_code;

        $jobOrder->system_components = json_encode($installation);

        $jobOrder->save();
        if($jobOrder->save()){
            return response()->json(['success'=>'Data recorded Successfully.']);
        }
    }

    public function getClient(Request $request){
        $clients =[];
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
