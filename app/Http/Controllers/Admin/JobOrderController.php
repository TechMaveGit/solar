<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobOrderController extends Controller
{
    public function index(Request $request){
        return view('jobOrder.assigned-job-order');
    }

    public function create(Request $request){
        return view('jobOrder.create-job-order');
    }

    public function report(Request $request){
        return view('report.reports');
    }
}
