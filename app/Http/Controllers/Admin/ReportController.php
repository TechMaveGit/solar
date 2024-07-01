<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BaseDocument;
use App\Models\JobOrder;
use Illuminate\Http\Request;

class ReportController extends Controller
{


    public function report(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $query = JobOrder::where('status','3')->with('client','staff')->orderBy('id','DESC');

        if ($startDate && $endDate) {
            $query->whereBetween('date', [$startDate, $endDate]);
        }elseif ($startDate) {
            $query->where('date', '>=', $startDate);
        } elseif ($endDate) {
            $query->where('date', '<=', $endDate);
        }
        $jobOrders = $query->get();

        return view('report.reports', compact('jobOrders', 'startDate', 'endDate'));
    }

    public function viewPictures(Request $request)
    {
        $id = base64_decode($request->id);
        $pictures = BaseDocument::where('order_id',$id)->get();
        return view('report.view-pictures',compact('pictures'));
    }


}
