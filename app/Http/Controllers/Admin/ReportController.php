<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BaseDocument;
use App\Models\Client;
use App\Models\JobOrder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{


    public function report(Request $request)
    {
        $startDate= '';
        $endDate= '';
        $s_complete_date = '';
        $e_complete_date = '';
        $assigndate = $request->input('assigndate');
        $complete_date = $request->input('complete_date');
        if(isset($assigndate)){
            [$startDateString, $endDateString] = explode(' to ', $assigndate);
            $startDate = Carbon::createFromFormat('Y-m-d', trim($startDateString))->startOfDay();
            $endDate = Carbon::createFromFormat('Y-m-d', trim($endDateString))->endOfDay();
        }
        if(isset($complete_date)){
            [$startComString, $endComString] = explode(' to ', $complete_date);
            $s_complete_date = Carbon::createFromFormat('Y-m-d', trim($startComString))->startOfDay();
            $e_complete_date = Carbon::createFromFormat('Y-m-d', trim($endComString))->endOfDay();
        }

        // $startDate = $this->normalizeDate($request->input('start_date'));
        // $endDate = $this->normalizeDate($request->input('end_date'));
        // $s_complete_date = $this->normalizeDate($request->input('s_complete_date'));
        // $e_complete_date = $this->normalizeDate($request->input('e_complete_date'));
        $client_id = $request->input('client_id');
        $staff_id = $request->input('staff_id');

        $query = JobOrder::where('status','3')->with('client','staff')->orderBy('id','DESC');

        if($client_id){
            $query->where('client_id',$client_id);
        }
        if($staff_id){
            $query->where('staff_id',$staff_id);
        }


        if ($startDate && $endDate) {
            $query->whereBetween('date', [$startDate, $endDate]);
        }elseif ($startDate) {
            $query->where('date', '>=', $startDate);
        } elseif ($endDate) {
            $query->where('date', '<=', $endDate);
        }

        if ($s_complete_date && $e_complete_date) {
            $query->whereBetween('completed_date', [$s_complete_date, $e_complete_date]);
        }elseif ($s_complete_date) {
            $query->where('completed_date', '>=', $s_complete_date);
        } elseif ($e_complete_date) {
            $query->where('completed_date', '<=', $e_complete_date);
        }

        $jobOrders = $query->get();

        $staffs = User::where(['user_type'=>'2'])->orderBy('id','DESC')->get();
        $clients = Client::orderBy('id','DESC')->get();
        return view('report.reports', compact('jobOrders', 'assigndate', 'clients','staffs', 'client_id', 'staff_id','complete_date'));
    }

    public function viewPictures(Request $request)
    {
        $id = base64_decode($request->id);
        $pictures = BaseDocument::where('order_id',$id)->where('document_name','!=','pdf')->get();
        return view('report.view-pictures',compact('pictures'));
    }


    private function normalizeDate($date) {
        if (!$date) {
            return null;
        }

        try {
            return Carbon::createFromFormat('m/d/Y', $date)->format('Y-m-d');
        } catch (\Exception $e) {
            return null; // or handle the invalid date format as needed
        }
    }

}
