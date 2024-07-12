<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BaseDocument;
use App\Models\JobOrder;
use App\Models\Notification;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $query = JobOrder::where('staff_id', auth()->user()->id)->with('client')->orderBy('id', 'DESC');

        if ($startDate && $endDate) {
            $query->whereBetween('date', [$startDate, $endDate]);
        } elseif ($startDate) {
            $query->where('date', '>=', $startDate);
        } elseif ($endDate) {
            $query->where('date', '<=', $endDate);
        }

        $jobs = $query->get();

        if ($jobs->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'No job orders found.',
                'all_job_orders' => [],
            ],200);
        }

        return response()->json([
            'status' => true,
            'message' => 'Data retrieved successfully.',
            'all_job_orders' => $jobs,
        ]);

    }

    public function viewJobOrder(Request $request)
    {

        $job = JobOrder::where('id',$request->id)->with(['client','base_documents'])->first();

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
                'job_order' => $mergedData,
                'image_root' => config('envoirment.IMAGE_API_PATH')
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Job order not found',
                'job_order' => null,
            ],404);
        }
    }

    public function updateJobOrder(Request $request){
        // dd(auth()->user()->id);
        $jobOrder = JobOrder::where(['id'=>$request->id,'staff_id'=>auth()->user()->id])->first();
        if ($jobOrder) {
            $validator = Validator::make($request->all(), [
                // 'client_type' => 'required',
                // 'client_id' => 'required',
                // 'staff_id' => 'required',
                // 'date' => 'required',
                // 'time' => 'required',
                'applicant_name' => 'required',
                'installation_eircode' => 'required',
                'solar_pv_system_size' => 'required',
                'company_name' => 'required',
                'customer_name' => 'required',
                'customer_eircode' => 'required',
                'installer_company_name' => 'required',
                'installer_company_address' => 'required',
                'rail_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'panel_label_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'panel_roof_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'fireman_switch_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'inverter_label_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'inverter_install_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'fuseboard_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'meter_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'battry_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'battry_label_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'diverter_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'certificate_image.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'certificate_image' => 'required|array',
            ]);

            try {
                if ($validator->passes()) {

                    $system_components = [
                        'pv_make' => $request->pv_make,
                        'pv_model' => $request->pv_model,
                        'pv_rating' => $request->pv_rating,
                        'pv_quantity' => $request->pv_quantity,
                        'ms_make' => $request->ms_make,
                        'ms_model' => $request->ms_model,
                        'ms_rating' => $request->ms_rating,
                        'ms_quantity' => $request->ms_quantity,
                        'inverter_make' => $request->inverter_make,
                        'inverter_model' => $request->inverter_model,
                        'inverter_rating' => $request->inverter_rating,
                        'inverter_quantity' => $request->inverter_quantity,
                        'inverter_make2' => $request->inverter_make2,
                        'inverter_model2' => $request->inverter_model2,
                        'inverter_rating2' => $request->inverter_rating2,
                        'inverter_quantity2' => $request->inverter_quantity2,
                        'inverter_make3' => $request->inverter_make3,
                        'inverter_model3' => $request->inverter_model3,
                        'inverter_rating3' => $request->inverter_rating3,
                        'inverter_rating3' => $request->inverter_rating3,
                        'inverter_quantity3' => $request->inverter_quantity3,
                        'energy_make' => $request->energy_make,
                        'energy_model' => $request->energy_model,
                        'energy_rating' => $request->energy_rating,
                        'energy_quantity' => $request->energy_quantity,
                        'battery_make' => $request->battery_make,
                        'battery_dc' => $request->battery_dc,
                        'battery_ac' => $request->battery_ac,
                        'battery_rating_kw' => $request->battery_rating_kw,
                        'battery_rating_kwh' => $request->battery_rating_kwh,
                        'battery_quantity' => $request->battery_quantity,
                    ];
                    $pv_inverts = [
                        'pv_manufacturer' => $request->pv_manufacturer,
                        'pv_model_type' => $request->pv_model_type,
                        'pv_model_performance' => $request->pv_model_performance,
                        'pv_number_modules' => $request->pv_number_modules,
                        'pv_short_circuit_current' => $request->pv_short_circuit_current,
                        'pv_open_circuit_voltage' => $request->pv_open_circuit_voltage,
                        'pv_mpp_voltage' => $request->pv_mpp_voltage,
                        'inverter_manufacturer' => $request->inverter_manufacturer,
                        'inverter_type' => $request->inverter_type,
                        'inverter_ac_nominal' => $request->inverter_ac_nominal,
                        'pv_inverter_quantity' => $request->pv_inverter_quantity,
                        'inverter_ac_maximum' => $request->inverter_ac_maximum,
                        'inverter_dc_maximum' => $request->inverter_dc_maximum,
                        'inverter_manufacturer_2' => $request->inverter_manufacturer_2,
                        'inverter_type_2' => $request->inverter_type_2,
                        'inverter_ac_nominal_2' => $request->inverter_ac_nominal_2,
                        'pv_inverter_quantity_2' => $request->pv_inverter_quantity_2,
                        'inverter_ac_maximum2' => $request->inverter_ac_maximum2,
                        'inverter_dc_maximum2' => $request->inverter_dc_maximum2,
                        'inverter_manufacturer_3' => $request->inverter_manufacturer_3,
                        'inverter_type_3' => $request->inverter_type_3,
                        'inverter_ac_nominal_3' => $request->inverter_ac_nominal_3,
                        'pv_inverter_quantity_3' => $request->pv_inverter_quantity_3,
                        'inverter_ac_maximum3' => $request->inverter_ac_maximum3,
                        'inverter_dc_maximum3' => $request->inverter_dc_maximum3,
                        'inverter_test_date' => $request->inverter_test_date,
                        'inverter_next_test_date' => $request->inverter_next_test_date,
                        'inverter_test_reason' => $request->inverter_test_reason,
                        'inverter_test2_reason' => $request->inverter_test2_reason,
                    ];
                    $design_and_installation = [
                        "design_installation_1" => $request->design_installation_1,
                        "design_installation_2" => $request->design_installation_2,
                        "design_installation_3" => $request->design_installation_3,
                        "design_installation_4" => $request->design_installation_4,
                        "design_installation_5" => $request->design_installation_5,
                        "design_installation_6" => $request->design_installation_6,
                        "design_installation_7" => $request->design_installation_7,
                        "design_installation_8" => $request->design_installation_8,
                        "design_installation_9" => $request->design_installation_9,
                        "design_installation_10" => $request->design_installation_10,
                        "overvoltage_1" => $request->overvoltage_1,
                        "overvoltage_2" => $request->overvoltage_2,
                        "overvoltage_3" => $request->overvoltage_3,
                        "overvoltage_4" => $request->overvoltage_4,
                        "special_factor_1" => $request->special_factor_1,
                        "special_factor_2" => $request->special_factor_2,
                        "special_factor_3" => $request->special_factor_3,
                        "marking_labelling_1" => $request->marking_labelling_1,
                        "marking_labelling_2" => $request->marking_labelling_2,
                        "marking_labelling_3" => $request->marking_labelling_3,
                        "marking_labelling_4" => $request->marking_labelling_4,
                        "marking_labelling_5" => $request->marking_labelling_5,
                        "marking_labelling_6" => $request->marking_labelling_6,
                        "marking_labelling_7" => $request->marking_labelling_7,
                        "general_installation_1" => $request->general_installation_1,
                        "general_installation_2" => $request->general_installation_2,
                        "general_installation_3" => $request->general_installation_3,
                    ];
                    $test_report_grid = [
                        "pv_generator_module1" => $request->pv_generator_module1,
                        "pv_generator_module2" => $request->pv_generator_module2,
                        "pv_generator_module3" => $request->pv_generator_module3,
                        "pv_generator_module4" => $request->pv_generator_module4,
                        "pv_generator_module5" => $request->pv_generator_module5,
                        "pv_generator_module6" => $request->pv_generator_module6,
                        "pv_generator_module7" => $request->pv_generator_module7,
                        "pv_generator_module8" => $request->pv_generator_module8,
                        "pv_generator_module9" => $request->pv_generator_module9,
                        "pv_generator_module10" => $request->pv_generator_module10,
                        "pv_generator_quantity1" => $request->pv_generator_quantity1,
                        "pv_generator_quantity2" => $request->pv_generator_quantity2,
                        "pv_generator_quantity3" => $request->pv_generator_quantity3,
                        "pv_generator_quantity4" => $request->pv_generator_quantity4,
                        "pv_generator_quantity5" => $request->pv_generator_quantity5,
                        "pv_generator_quantity6" => $request->pv_generator_quantity6,
                        "pv_generator_quantity7" => $request->pv_generator_quantity7,
                        "pv_generator_quantity8" => $request->pv_generator_quantity8,
                        "pv_generator_quantity9" => $request->pv_generator_quantity9,
                        "pv_generator_quantity10" => $request->pv_generator_quantity10,
                        "generator_parameters_voc1" => $request->generator_parameters_voc1,
                        "generator_parameters_voc2" => $request->generator_parameters_voc2,
                        "generator_parameters_voc3" => $request->generator_parameters_voc3,
                        "generator_parameters_voc4" => $request->generator_parameters_voc4,
                        "generator_parameters_voc5" => $request->generator_parameters_voc5,
                        "generator_parameters_voc6" => $request->generator_parameters_voc6,
                        "generator_parameters_voc7" => $request->generator_parameters_voc7,
                        "generator_parameters_voc8" => $request->generator_parameters_voc8,
                        "generator_parameters_voc9" => $request->generator_parameters_voc9,
                        "generator_parameters_voc10" => $request->generator_parameters_voc10,
                        "generator_parameters_isc1" => $request->generator_parameters_isc1,
                        "generator_parameters_isc2" => $request->generator_parameters_isc2,
                        "generator_parameters_isc3" => $request->generator_parameters_isc3,
                        "generator_parameters_isc4" => $request->generator_parameters_isc4,
                        "generator_parameters_isc5" => $request->generator_parameters_isc5,
                        "generator_parameters_isc6" => $request->generator_parameters_isc6,
                        "generator_parameters_isc7" => $request->generator_parameters_isc7,
                        "generator_parameters_isc8" => $request->generator_parameters_isc8,
                        "generator_parameters_isc9" => $request->generator_parameters_isc9,
                        "generator_parameters_isc10" => $request->generator_parameters_isc10,
                        "protection_device1" => $request->protection_device1,
                        "protection_device2" => $request->protection_device2,
                        "protection_device3" => $request->protection_device3,
                        "protection_device4" => $request->protection_device4,
                        "protection_device5" => $request->protection_device5,
                        "protection_device6" => $request->protection_device6,
                        "protection_device7" => $request->protection_device7,
                        "protection_device8" => $request->protection_device8,
                        "protection_device9" => $request->protection_device9,
                        "protection_device10" => $request->protection_device10,
                        "device_rated_value1" => $request->device_rated_value1,
                        "device_rated_value2" => $request->device_rated_value2,
                        "device_rated_value3" => $request->device_rated_value3,
                        "device_rated_value4" => $request->device_rated_value4,
                        "device_rated_value5" => $request->device_rated_value5,
                        "device_rated_value6" => $request->device_rated_value6,
                        "device_rated_value7" => $request->device_rated_value7,
                        "device_rated_value8" => $request->device_rated_value8,
                        "device_rated_value9" => $request->device_rated_value9,
                        "device_rated_value10" => $request->device_rated_value10,
                        "device_dc_rating1" => $request->device_dc_rating1,
                        "device_dc_rating2" => $request->device_dc_rating2,
                        "device_dc_rating3" => $request->device_dc_rating3,
                        "device_dc_rating4" => $request->device_dc_rating4,
                        "device_dc_rating5" => $request->device_dc_rating5,
                        "device_dc_rating6" => $request->device_dc_rating6,
                        "device_dc_rating7" => $request->device_dc_rating7,
                        "device_dc_rating8" => $request->device_dc_rating8,
                        "device_dc_rating9" => $request->device_dc_rating9,
                        "device_dc_rating10" => $request->device_dc_rating10,
                        "device_capacity1" => $request->device_capacity1,
                        "device_capacity2" => $request->device_capacity2,
                        "device_capacity3" => $request->device_capacity3,
                        "device_capacity4" => $request->device_capacity4,
                        "device_capacity5" => $request->device_capacity5,
                        "device_capacity6" => $request->device_capacity6,
                        "device_capacity7" => $request->device_capacity7,
                        "device_capacity8" => $request->device_capacity8,
                        "device_capacity9" => $request->device_capacity9,
                        "device_capacity10" => $request->device_capacity10,
                        "wiring_type1" => $request->wiring_type1,
                        "wiring_type2" => $request->wiring_type2,
                        "wiring_type3" => $request->wiring_type3,
                        "wiring_type4" => $request->wiring_type4,
                        "wiring_type5" => $request->wiring_type5,
                        "wiring_type6" => $request->wiring_type6,
                        "wiring_type7" => $request->wiring_type7,
                        "wiring_type8" => $request->wiring_type8,
                        "wiring_type9" => $request->wiring_type9,
                        "wiring_type10" => $request->wiring_type10,
                        "wiring_phase1" => $request->wiring_phase1,
                        "wiring_phase2" => $request->wiring_phase2,
                        "wiring_phase3" => $request->wiring_phase3,
                        "wiring_phase4" => $request->wiring_phase4,
                        "wiring_phase5" => $request->wiring_phase5,
                        "wiring_phase6" => $request->wiring_phase6,
                        "wiring_phase7" => $request->wiring_phase7,
                        "wiring_phase8" => $request->wiring_phase8,
                        "wiring_phase9" => $request->wiring_phase9,
                        "wiring_phase10" => $request->wiring_phase10,
                        "wiring_earth1" => $request->wiring_earth1,
                        "wiring_earth2" => $request->wiring_earth2,
                        "wiring_earth3" => $request->wiring_earth3,
                        "wiring_earth4" => $request->wiring_earth4,
                        "wiring_earth5" => $request->wiring_earth5,
                        "wiring_earth6" => $request->wiring_earth6,
                        "wiring_earth7" => $request->wiring_earth7,
                        "wiring_earth8" => $request->wiring_earth8,
                        "wiring_earth9" => $request->wiring_earth9,
                        "wiring_earth10" => $request->wiring_earth10,
                        "tm_voc1" => $request->tm_voc1,
                        "tm_voc2" => $request->tm_voc2,
                        "tm_voc3" => $request->tm_voc3,
                        "tm_voc4" => $request->tm_voc4,
                        "tm_voc5" => $request->tm_voc5,
                        "tm_voc6" => $request->tm_voc6,
                        "tm_voc7" => $request->tm_voc7,
                        "tm_voc8" => $request->tm_voc8,
                        "tm_voc9" => $request->tm_voc9,
                        "tm_voc10" => $request->tm_voc10,
                        "tm_isc1" => $request->tm_isc1,
                        "tm_isc2" => $request->tm_isc2,
                        "tm_isc3" => $request->tm_isc3,
                        "tm_isc4" => $request->tm_isc4,
                        "tm_isc5" => $request->tm_isc5,
                        "tm_isc6" => $request->tm_isc6,
                        "tm_isc7" => $request->tm_isc7,
                        "tm_isc8" => $request->tm_isc8,
                        "tm_isc9" => $request->tm_isc9,
                        "tm_isc10" => $request->tm_isc10,
                        "tm_irradiance1" => $request->tm_irradiance1,
                        "tm_irradiance2" => $request->tm_irradiance2,
                        "tm_irradiance3" => $request->tm_irradiance3,
                        "tm_irradiance4" => $request->tm_irradiance4,
                        "tm_irradiance5" => $request->tm_irradiance5,
                        "tm_irradiance6" => $request->tm_irradiance6,
                        "tm_irradiance7" => $request->tm_irradiance7,
                        "tm_irradiance8" => $request->tm_irradiance8,
                        "tm_irradiance9" => $request->tm_irradiance9,
                        "tm_irradiance10" => $request->tm_irradiance10,
                        "polarity_monitoring1" => $request->polarity_monitoring1,
                        "polarity_monitoring2" => $request->polarity_monitoring2,
                        "polarity_monitoring3" => $request->polarity_monitoring3,
                        "polarity_monitoring4" => $request->polarity_monitoring4,
                        "polarity_monitoring5" => $request->polarity_monitoring5,
                        "polarity_monitoring6" => $request->polarity_monitoring6,
                        "polarity_monitoring7" => $request->polarity_monitoring7,
                        "polarity_monitoring8" => $request->polarity_monitoring8,
                        "polarity_monitoring9" => $request->polarity_monitoring9,
                        "polarity_monitoring10" => $request->polarity_monitoring10,
                        "array_test_voltage1" => $request->array_test_voltage1,
                        "array_test_voltage2" => $request->array_test_voltage2,
                        "array_test_voltage3" => $request->array_test_voltage3,
                        "array_test_voltage4" => $request->array_test_voltage4,
                        "array_test_voltage5" => $request->array_test_voltage5,
                        "array_test_voltage6" => $request->array_test_voltage6,
                        "array_test_voltage7" => $request->array_test_voltage7,
                        "array_test_voltage8" => $request->array_test_voltage8,
                        "array_test_voltage9" => $request->array_test_voltage9,
                        "array_test_voltage10" => $request->array_test_voltage10,
                        "array_pos1" => $request->array_pos1,
                        "array_pos2" => $request->array_pos2,
                        "array_pos3" => $request->array_pos3,
                        "array_pos4" => $request->array_pos4,
                        "array_pos5" => $request->array_pos5,
                        "array_pos6" => $request->array_pos6,
                        "array_pos7" => $request->array_pos7,
                        "array_pos8" => $request->array_pos8,
                        "array_pos9" => $request->array_pos9,
                        "array_pos10" => $request->array_pos10,
                        "array_neg1" => $request->array_neg1,
                        "array_neg2" => $request->array_neg2,
                        "array_neg3" => $request->array_neg3,
                        "array_neg4" => $request->array_neg4,
                        "array_neg5" => $request->array_neg5,
                        "array_neg6" => $request->array_neg6,
                        "array_neg7" => $request->array_neg7,
                        "array_neg8" => $request->array_neg8,
                        "array_neg9" => $request->array_neg9,
                        "array_neg10" => $request->array_neg10,
                        "earth_continuty1" => $request->earth_continuty1,
                        "earth_continuty2" => $request->earth_continuty2,
                        "earth_continuty3" => $request->earth_continuty3,
                        "earth_continuty4" => $request->earth_continuty4,
                        "earth_continuty5" => $request->earth_continuty5,
                        "earth_continuty6" => $request->earth_continuty6,
                        "earth_continuty7" => $request->earth_continuty7,
                        "earth_continuty8" => $request->earth_continuty8,
                        "earth_continuty9" => $request->earth_continuty9,
                        "earth_continuty10" => $request->earth_continuty10,
                        "switchgear_functioning1" => $request->switchgear_functioning1,
                        "switchgear_functioning2" => $request->switchgear_functioning2,
                        "switchgear_functioning3" => $request->switchgear_functioning3,
                        "switchgear_functioning4" => $request->switchgear_functioning4,
                        "switchgear_functioning5" => $request->switchgear_functioning5,
                        "switchgear_functioning6" => $request->switchgear_functioning6,
                        "switchgear_functioning7" => $request->switchgear_functioning7,
                        "switchgear_functioning8" => $request->switchgear_functioning8,
                        "switchgear_functioning9" => $request->switchgear_functioning9,
                        "switchgear_functioning10" => $request->switchgear_functioning10,
                        "test_inverter_make1" => $request->test_inverter_make1,
                        "test_inverter_make2" => $request->test_inverter_make2,
                        "test_inverter_make3" => $request->test_inverter_make3,
                        "test_inverter_make4" => $request->test_inverter_make4,
                        "test_inverter_make5" => $request->test_inverter_make5,
                        "test_inverter_make6" => $request->test_inverter_make6,
                        "test_inverter_make7" => $request->test_inverter_make7,
                        "test_inverter_make8" => $request->test_inverter_make8,
                        "test_inverter_make9" => $request->test_inverter_make9,
                        "test_inverter_make10" => $request->test_inverter_make10,
                        "inverter_serial_no1" => $request->inverter_serial_no1,
                        "inverter_serial_no2" => $request->inverter_serial_no2,
                        "inverter_serial_no3" => $request->inverter_serial_no3,
                        "inverter_serial_no4" => $request->inverter_serial_no4,
                        "inverter_serial_no5" => $request->inverter_serial_no5,
                        "inverter_serial_no6" => $request->inverter_serial_no6,
                        "inverter_serial_no7" => $request->inverter_serial_no7,
                        "inverter_serial_no8" => $request->inverter_serial_no8,
                        "inverter_serial_no9" => $request->inverter_serial_no9,
                        "inverter_serial_no10" => $request->inverter_serial_no10,
                        "inverter_functioning1" => $request->inverter_functioning1,
                        "inverter_functioning2" => $request->inverter_functioning2,
                        "inverter_functioning3" => $request->inverter_functioning3,
                        "inverter_functioning4" => $request->inverter_functioning4,
                        "inverter_functioning5" => $request->inverter_functioning5,
                        "inverter_functioning6" => $request->inverter_functioning6,
                        "inverter_functioning7" => $request->inverter_functioning7,
                        "inverter_functioning8" => $request->inverter_functioning8,
                        "inverter_functioning9" => $request->inverter_functioning9,
                        "inverter_functioning10" => $request->inverter_functioning10,
                        "loss_1" => $request->loss_1,
                        "loss_2" => $request->loss_2,
                        "loss_3" => $request->loss_3,
                        "loss_4" => $request->loss_4,
                        "loss_5" => $request->loss_5,
                        "loss_6" => $request->loss_6,
                        "loss_7" => $request->loss_7,
                        "loss_8" => $request->loss_8,
                        "loss_9" => $request->loss_9,
                        "loss_10" => $request->loss_10,
                    ];

                    // $jobOrder->client_type = $request->client_type;
                    // $jobOrder->client_id = $request->client_id;
                    // $jobOrder->staff_id = auth()->user()->id;
                    // $jobOrder->date = $request->date;
                    // $jobOrder->time = $request->time;
                    // $jobOrder->address = $request->address;
                    // $jobOrder->country = $request->country;
                    // $jobOrder->city = $request->city;
                    // $jobOrder->postal_code = $request->postal_code;
                    // Installation Details
                    $jobOrder->applicant_name = $request->applicant_name;
                    $jobOrder->installation_address = $request->installation_address;
                    $jobOrder->installation_eircode = $request->installation_eircode;
                    $jobOrder->installation_mprn = $request->installation_mprn;
                    // System Details
                    $jobOrder->solar_pv_system_size = $request->solar_pv_system_size;
                    $jobOrder->battery_storage = $request->battery_storage;
                    $jobOrder->annual_estimated_yield = $request->annual_estimated_yield;
                    $jobOrder->yield_calculation = $request->yield_calculation;
                    $jobOrder->water_diverter = $request->water_diverter;
                    // PV registered company
                    $jobOrder->company_name = $request->company_name;
                    $jobOrder->company_number = $request->company_number;
                    $jobOrder->property_year_construction = $request->property_year_construction;
                    $jobOrder->cost_installation = $request->cost_installation;
                    //installer declaration/ details
                    $jobOrder->installer_name = $request->installer_name;
                    $jobOrder->installer_date = $request->installer_date;
                    $jobOrder->installer_completed_date = $request->installer_completed_date;
                    $jobOrder->installer_sign = $request->installer_sign;
                    //Homeowner/Applicant Declaration
                    $jobOrder->owner_name = $request->owner_name;
                    $jobOrder->owner_date = $request->owner_date;
                    $jobOrder->owner_sign = $request->owner_sign;
                    //Customer
                    $jobOrder->customer_name = $request->customer_name;
                    $jobOrder->customer_address = $request->customer_address;
                    $jobOrder->customer_eircode = $request->customer_eircode;
                    //Installation Contractor
                    $jobOrder->installer_company_name = $request->installer_company_name;
                    $jobOrder->installer_company_representative = $request->installer_company_representative;
                    $jobOrder->installer_company_address = $request->installer_company_address;
                    // PB System Description
                    $jobOrder->pv_manufacturer = $request->pv_manufacturer;
                    $jobOrder->pv_model_type = $request->pv_model_type;
                    $jobOrder->pv_model_performance = $request->pv_model_performance;
                    $jobOrder->pv_number_modules = $request->pv_number_modules;
                    $jobOrder->pv_short_circuit_current = $request->pv_short_circuit_current;
                    $jobOrder->pv_mpp_current = $request->pv_mpp_current;
                    $jobOrder->pv_open_circuit_voltage = $request->pv_open_circuit_voltage;
                    $jobOrder->pv_mpp_voltage = $request->pv_mpp_voltage;
                    //Electric Cert
                    $jobOrder->electric_cert_number = $request->electric_cert_number;
                    $jobOrder->electric_record_sheet = $request->electric_record_sheet;
                    $jobOrder->electric_re = $request->electric_re;
                    $jobOrder->electric_loop = $request->electric_loop;
                    $jobOrder->electric_rcdx1 = $request->electric_rcdx1;
                    $jobOrder->electric_rcdx5 = $request->electric_rcdx5;
                    //Test Results
                    $jobOrder->test_result = $request->test_result;
                    $jobOrder->test_result2 = $request->test_result2;
                    $jobOrder->test_result3 = $request->test_result3;
                    $jobOrder->tester_signature = $request->tester_signature;
                    $jobOrder->test_result_date = $request->test_result_date;
                    $jobOrder->test_remark = $request->test_remark;

                    $jobOrder->test_date = $request->test_date;
                    $jobOrder->test_signature = $request->test_signature;
                    $jobOrder->test_notes = $request->test_notes;
                    $jobOrder->notes = $request->notes;

                    $jobOrder->system_components = json_encode($system_components);
                    $jobOrder->pv_inverts = json_encode($pv_inverts);
                    $jobOrder->design_and_installation = json_encode($design_and_installation);
                    $jobOrder->test_report_grid = json_encode($test_report_grid);

                    $jobOrder->save();

                    $imagesToUpload = ['rail_image', 'panel_label_image',
                    'panel_roof_image','fireman_switch_image',
                    'inverter_label_image','inverter_install_image',
                    'fuseboard_image','meter_image','battry_image',
                    'battry_label_image','diverter_image'
                    ];
                    foreach ($imagesToUpload as $field) {
                        if ($request->hasFile($field)) {
                            $folderName = 'base_document';
                            $image = $request->file($field);
                            $filePath = $this->upload($image, $folderName);

                            $baseDocument = new BaseDocument();
                            $baseDocument->document = $filePath;
                            $baseDocument->document_type = $field;
                            $baseDocument->order_id = $jobOrder->id;
                            $baseDocument->save();
                        }
                    }
                    if ($request->hasFile('certificate_image')) {
                        foreach ($request->file('certificate_image') as $certificateImage) {
                            $folderName = 'base_document';
                            $filePath = $this->upload($certificateImage, $folderName);

                            $baseDocument = new BaseDocument();
                            $baseDocument->document = $filePath;
                            $baseDocument->document_type = 'certificate_image';
                            $baseDocument->order_id = $jobOrder->id;
                            $baseDocument->save();
                        }
                    }
                    return response()->json([
                        'status' => true,
                        'message' => 'Record updated successfully.',
                    ]);
                }
                return response()->json([
                    'status' => false,
                    'message' => $validator->errors()->first(),
                    'errors' => $validator->errors(),
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'message' => $th->getMessage(),
                ], 500);
            }
        } else {
            return response()->json([
                'status' => false,
                'message' => 'This Job order not found',
            ],404);
        }

    }

    public static function upload($image,$folderName)
    {
        $fileName = 'image_' . now()->format('YmdHisu') . '.' . $image->getClientOriginalExtension();
        $image->storeAs($folderName, $fileName, 'public');
        return $folderName.'/'.$fileName;
    }


    public function jobStatusChange(Request $request){

        $jobOrder = JobOrder::where(['id'=>$request->id,'staff_id'=>auth()->user()->id])->first();
        $status = $request->status;
        if ($jobOrder) {

            DB::beginTransaction();
            try{
                $notification = new Notification();
                $notification->status = $status;
                $notification->job_order_id = $request->id;
                $notification->staff_id = auth()->user()->id;
                $notification->save();

                $jobOrder->status = $status;
                $jobOrder->save();

                DB::commit();

                return response()->json([
                    'status' => true,
                    'message' => 'Status Change successfully!',
                ],200);
            }
            catch (\Throwable $th) {
                DB::rollBack();
                return response()->json([
                    'status' => false,
                    'message' => $th->getMessage(),
                ], 500);
            }

        } else {
            return response()->json([
                'status' => false,
                'message' => 'This Job order not found',
            ],404);
        }

    }

    public function jobOrderHistory(Request $request)
    {

        $jobHistory = JobOrder::where(['staff_id'=>auth()->user()->id,'status'=>'3'])->with('client')->orderBy('id', 'DESC')->get();

        if ($jobHistory->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'No job orders found.',
            ],200);
        }

        return response()->json([
            'status' => true,
            'message' => 'Data retrieved successfully.',
            'all_job_orders' => $jobHistory,
        ]);

    }


}
