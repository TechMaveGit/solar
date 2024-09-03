<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\JobOrder;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request){
        $clients = Client::withCount('jobOrders')->orderBy('id','DESC')->get();
        return view('client.clients',compact('clients'));
    }

    public function create(Request $request){
        return view('client.add-client');
    }

    public function store(Request $request){

        // dd($request->action);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients,email',
            'mobile' => 'required|numeric|digits_between:8,13|unique:clients,mobile',
            'gender' => 'required',
        ]);

        try {
            $Clint = Client::latest()->first();
            $latest_id = $Clint ? $Clint->id : 0;
            $new_id = $latest_id + 1;
            $client_id = 'CST'.$new_id;

            $client = new Client();
            $client->client_id = $client_id;
            $client->name = $request->name;
            $client->email = $request->email;
            $client->mobile = $request->mobile;
            $client->dial_code = $request->dial_code;
            $client->address = $request->address;
            $client->additional_information = $request->additional_information;
            $client->country = $request->country;
            $client->city = $request->city;
            $client->postal_code = $request->postal_code;
            $client->eircode = $request->eircode;
            $client->status = $request->status;
            $client->client_type = $request->client_type;
            $client->gender = $request->gender;
            if($client->save()){
                if($request->action == 'save_and_process') {
                    return redirect()->route('admin.create-job-order')
                    // ->with('success','Client Added Successfully!')
                    ->with('client', $client);
                } else {
                    return redirect()->route('admin.all-client')->with('success','Client Added Successfully!');
                }
                // return redirect()->route('admin.all-client')->with('success','Register Successfully!');
            }

        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Something Went Wrong. Please Try Again!');
        }
    }

    public function edit(Request $request){
        $id = base64_decode($request->id);

        $client = Client::findOrFail($id);
        if (!$client) {
            return redirect()->back()->with('error', 'client not found or invalid.');
        }

        return view('client.edit-client',compact('client'));

    }

    public function update(Request $request){
        // dd($request->all());

        $client = Client::find($request->id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients,email,' . $client->id,
            'mobile' => 'required|numeric|digits_between:8,13|unique:clients,mobile,' . $client->id,
            'gender' => 'required',
        ]);

        try {

            $client->name = $request->name;
            $client->email = $request->email;
            $client->mobile = $request->mobile;
            $client->dial_code = $request->dial_code;
            $client->address = $request->address;
            $client->additional_information = $request->additional_information;
            $client->country = $request->country;
            $client->city = $request->city;
            $client->postal_code = $request->postal_code ?? '';
            $client->eircode = $request->eircode;
            $client->status = $request->status;
            $client->client_type = $request->client_type;
            $client->gender = $request->gender;
            if($client->save()){
                return redirect()->route('admin.all-client')->with('success','Client Updated Successfully!');
            }

        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Something Went Wrong. Please Try Again!');
        }
    }

    public function changeStatus(Request $request){


        $id = $request->id;
        $client = Client::find($id);

        if ($client) {
            $client->status = $client->status == 1 ? 2 : 1;
            $client->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);

    }

    public function jobOrders(Request $request){

        $id = base64_decode($request->id);

        $jobOrders = JobOrder::where('client_id',$id)->with(['client', 'staff'])->orderBy('id','desc')->get();


        return view('client.client-job-orders',compact('jobOrders'));

    }

}
