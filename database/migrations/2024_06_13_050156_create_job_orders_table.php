<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_orders', function (Blueprint $table) {
            $table->id();
            $table->enum('client_type', ['1', '2'])->default('1')->comment('1=>Domestic, 2=>NonDomestic');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('staff_id');
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->enum('status', ['0', '1'])->default('0')->comment('0=>pending, 1=>completed');

            // Installation Details
            $table->string('applicant_name')->nullable();
            $table->string('installation_address')->nullable();
            $table->string('installation_eircode')->nullable();
            $table->string('installation_mprn')->nullable();
            // System Details 
            $table->string('solar_pv_system_size')->nullable();
            $table->string('battery_storage')->nullable();
            $table->string('annual_estimated_yield')->nullable();
            $table->string('yield_calculation')->nullable();
            $table->string('water_diverter')->nullable();

            // PV registered company
            $table->string('company_name')->nullable();
            $table->string('company_number')->nullable();
            $table->string('property_year_construction')->nullable();
            $table->string('cost_installation')->nullable();
            //installer details
            $table->string('installer_name')->nullable();
            $table->string('installer_date')->nullable();
            $table->string('installer_completed_date')->nullable();
            $table->string('installer_sign')->nullable();
            //Homeowner/Applicant Declaration
            $table->string('owner_name')->nullable();
            $table->string('owner_date')->nullable();
            $table->string('owner_sign')->nullable();
            //Part 2
            //Customer
            $table->string('customer_name')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('customer_eircode')->nullable();
            //Installation Contractor
            $table->string('installer_company_name')->nullable();
            $table->string('installer_company_representative')->nullable();
            $table->string('installer_company_address')->nullable();
            // PB System Description
            $table->string('pv_manufacturer')->nullable();
            $table->string('pv_model_type')->nullable();
            $table->string('pv_model_performance')->nullable();
            $table->string('pv_number_modules')->nullable();
            $table->string('pv_short_circuit_current')->nullable();
            $table->string('pv_mpp_current')->nullable();
            $table->string('pv_open_circuit_voltage')->nullable();
            $table->string('pv_mpp_voltage')->nullable();
            //Electric Cert
            $table->string('electric_cert_number')->nullable();
            $table->string('electric_record_sheet')->nullable();
            $table->string('electric_re')->nullable();
            $table->string('electric_loop')->nullable();
            $table->string('electric_rcdx1')->nullable();
            $table->string('electric_rcdx5')->nullable();
            //Test Results
            $table->string('test_result')->nullable();
            $table->string('test_result2')->nullable();
            $table->string('test_result3')->nullable();
            $table->string('tester_signature')->nullable();
            $table->string('test_result_date')->nullable();
            $table->string('test_remark')->nullable();

            $table->string('test_date')->nullable();
            $table->string('test_signature')->nullable();
            $table->string('test_notes')->nullable();
            $table->string('notes')->nullable();

            $table->json('system_components')->nullable();
            $table->json('pv_inverts')->nullable();
            $table->json('design_and_installation')->nullable();
            $table->json('test_report_grid')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_orders');
    }
};
