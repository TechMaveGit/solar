<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\JobOrder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class JobOrderController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth:api');
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function JobOrders(Request $request)
    {

        $jobs = JobOrder::where('staff_id',auth()->user()->id)->with('client')->orderBy('id','DESC')->get();

        if ($jobs->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'No job orders found.',
                'data' => [],
            ],403);
        }

        return response()->json([
            'status' => true,
            'message' => 'Data retrieved successfully.',
            'data' => $jobs,
        ]);

    }

    public function singleJobOrder(Request $request)
    {

        $job = JobOrder::where('id',$request->id)->with(['client'])->first();

        if ($job) {
            $decoded_pv_inverts = json_decode($job->pv_inverts, true);
            $decoded_system_components = json_decode($job->system_components, true);
            $decoded_design_and_instt = json_decode($job->design_and_installation, true);
            $decoded_test_report_grid = json_decode($job->test_report_grid, true);

            if (!is_array($decoded_pv_inverts)) {
                $decoded_pv_inverts = [];
            }
            if (!is_array($decoded_system_components)) {
                $decoded_system_components = [];
            }
            if (!is_array($decoded_design_and_instt)) {
                $decoded_design_and_instt = [];
            }
            if (!is_array($decoded_test_report_grid)) {
                $decoded_test_report_grid = [];
            }

            $jobArray = $job->toArray();
            $mergedData = array_merge($jobArray, $decoded_pv_inverts,$decoded_system_components,$decoded_design_and_instt,$decoded_test_report_grid);

            unset(
                $mergedData['pv_inverts'],
                $mergedData['system_components'],
                $mergedData['design_and_installation'],
                $mergedData['test_report_grid']
            );
            return response()->json([
                'status' => true,
                'message' => 'Record Found',
                'data' => $mergedData,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Job order not found',
                'data' => null,
            ],404);
        }
    }


}
