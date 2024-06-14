<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request){
        return view('client.clients');
    }

    public function create(Request $request){
        return view('client.add-client');
    }

    public function store(Request $request){

        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients,email',
            'mobile' => 'required|numeric|digits_between:8,13|unique:clients,mobile',
            'gender' => 'required',
        ]);

        try {
            $client = new Client();
            $client->name = $request->name;
            $client->email = $request->email;
            $client->mobile = $request->mobile;
            $client->dial_code = $request->dial_code;
            $client->address = $request->address;
            $client->additional_information = $request->additional_information;
            $client->country = $request->country;
            $client->city = $request->city;
            $client->postal_code = $request->postal_code;
            $client->status = $request->status;
            $client->client_type = $request->client_type;
            $client->gender = $request->gender;
            if($client->save()){
                return redirect()->route('admin.all-client')->with('success','Register Successfully!');
            }

        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Something Went Wrong. Please Try Again!');
        }
    }



}
