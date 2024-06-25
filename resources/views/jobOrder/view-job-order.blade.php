@extends('layouts.main')
@section('app-title', 'View Job Order')
@section('main-content')
@php
    $system = json_decode($jobOrder->system_components);
    $pv_invert = json_decode($jobOrder->pv_inverts);
    $design_install = json_decode($jobOrder->design_and_installation);
    $test_report = json_decode($jobOrder->test_report_grid);
@endphp
<div class="nk-content nk-content-fluid">
    <div class="components-preview formMainContainer">

        <div class="nk-content-body">
            <div class="nk-block-head">

                <div class="nk-block-between-md g-4">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal customtitleBTMargin">View Job Order</h2>
                        <div class="nk-block-des">
                            <p>Here, you can efficiently generate detailed job orders for your clients!</p>
                        </div>
                    </div>
                    <div class="nk-block-head-content RightFilters">
                        <div class="rightfirmFlters">

                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-block nk-block-lg">
                <div class="card card-bordered">

                    <div class="row g-0 col-sep col-sep-md col-sep-xl">
                        <div class="col-md-12 col-xl-12">
                            <div class="card-inner stepNumberCard">
                                <ul class="nk-stepper-nav nk-stepper-nav-s1 stepper-nav is-vr">
                                    <li class="defaultTab">
                                        <div class="step-item">
                                            <div class="step-text">
                                                <div class="lead-text">Time Schedule</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="domesticFormTab">
                                        <div class="step-item">
                                            <div class="step-text">
                                                <div class="lead-text">Declaration of Works </div>

                                            </div>
                                        </div>
                                    </li>

                                    <li class="nondomesticTab">
                                        <div class="step-item">
                                            <div class="step-text">
                                                <div class="lead-text">NDMG Declaration of Works </div>

                                            </div>
                                        </div>
                                    </li>


                                    <li class="domesticFormTab">
                                        <div class="step-item">
                                            <div class="step-text">
                                                <div class="lead-text"> Inspection, Test and Commissioning Report
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nondomesticTab">
                                        <div class="step-item">
                                            <div class="step-text">
                                                <div class="lead-text"> Inspection, Test and Commissioning Report</div>

                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-12">
                            <div class="card-inner">
                                <div class="nk-stepper-content">
                                    <div class="nk-stepper-steps stepper-steps">
                                        <div class="nk-stepper-step defaultFormTabContent">
                                            <div class="innerfieldsContainer card-bordered">
                                                <h5 class="title mb-3">Add Time Schedule for this Job Order</h5>
                                                <div class="row ">

                                                    <div class="col-lg-6">
                                                        <div class="form-group"><label class="form-label">Client Type<div class="requiredField"></div></label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select js-select2" name="client_type" id="client_type" readonly disabled>
                                                                    <option value="">Select an Option</option>
                                                                    <option value="1" {{ $jobOrder->client_type==1 ? 'selected':'' }}>Domestic</option>
                                                                    <option value="2" {{ $jobOrder->client_type==2 ? 'selected':'' }}>Non-Domestic</option>
                                                                </select>
                                                                <span class="error client_type_err"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group"><label class="form-label">Client Name <div class="requiredField"></div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div>
                                                                <input type="text" value="@if(isset($jobOrder->client->name)){{  $jobOrder->client->name }}@endif" class="form-control" id="fv-Country" readonly disabled>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="form-group"><label class="form-label">Staff<div class="requiredField"></div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div>
                                                                <input type="text" value="@if(isset($jobOrder->staff)){{  $jobOrder->staff->name }}@endif" class="form-control" id="fv-Country" readonly disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><label class="form-label">
                                                                Date<div class="requiredField"></div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"><em
                                                                        class="icon ni ni-calendar-alt"></em></div>
                                                                <input type="text" name="date" value="{{ $jobOrder->date  }}" class="form-control date-picker" placeholder="mm/dd/yyyy" readonly disabled>
                                                                <span id="" class="error date_err"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="cp1-project-name"> Time<div class="requiredField"></div></label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" name="time" value="{{ $jobOrder->time }}"
                                                                    class="form-control time__pickers"
                                                                    id="timepicker" placeholder="Select Time"
                                                                    readonly="" disabled>
                                                                    <span id="" class="error time_err"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-message">Address</label>
                                                            <div class="form-control-wrap"><textarea
                                                                    class="form-control customtextarea form-control-sm"
                                                                    id="fv-message" name="address" readonly disabled
                                                                    placeholder="Write your Address">{{ $jobOrder->address }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Country</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" value="{{ $jobOrder->country }}"
                                                                    name="country" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-City">City</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" name="city" value="{{ $jobOrder->city }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Postal">Postal Code</label>
                                                            <div class="form-control-wrap">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" name="postal_code" value="{{ $jobOrder->postal_code }}" class="form-control" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="nk-stepper-step domestiocFormTabContent">
                                            <div class="ForTitileMain">
                                                <h1>Part 1 – Declaration of Works</h1>
                                            </div>
                                            <div class="innerfieldsContainer card-bordered">
                                                <h5 class="title mb-3">Installation Details</h5>
                                                <div class="row ">

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Applicant Name <div
                                                                    class="requiredField"></div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="applicant_name"
                                                                    name="applicant_name" value="{{ $jobOrder->applicant_name }}" readonly>
                                                                    <span id="applicant_name_err" class="error applicant_name_err"></span>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Installation Address</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="installation_address"
                                                                    name="installation_address" value="{{ $jobOrder->installation_address }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                > Installation Eircode <div
                                                                    class="requiredField"></div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="installation_eircode"
                                                                    name="installation_eircode" value="{{ $jobOrder->installation_eircode }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                > Installation MPRN</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="installation_mprn"
                                                                    name="installation_mprn" value="{{ $jobOrder->installation_mprn }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="filedsNote">
                                                        <p>*This will be the person claiming the SEAI grant
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">System Details </h5>
                                                <div class="row ">

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Solar PV System Size <div
                                                                    class="requiredField">*</div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control"
                                                                    placeholder="kWp*" id="solar_pv_system_size"
                                                                    name="solar_pv_system_size" value="{{ $jobOrder->solar_pv_system_size }}" readonly>
                                                                    <span id="" class="error solar_pv_system_size_err"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                > Battery Storage (if
                                                                applicable)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control"
                                                                    placeholder="kW/kWh" id="battery_storage"
                                                                    name="battery_storage" value="{{ $jobOrder->battery_storage }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Solar PV System Annual
                                                                Estimated Yield </label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control"
                                                                    placeholder="kWh**" id="annual_estimated_yield"
                                                                    name="annual_estimated_yield" value="{{ $jobOrder->annual_estimated_yield }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                > Method of Yield Calculation (e.g.,
                                                                PV Syst) </label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="yield_calculation"
                                                                    name="yield_calculation" value="{{ $jobOrder->yield_calculation }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                > Hot Water Diverter Installed?
                                                            </label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control"
                                                                    placeholder="Y/N?" id="water_diverter"
                                                                    name="water_diverter" value="{{ $jobOrder->water_diverter }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="filedsNote">
                                                        <p>* Total DC Installed Capacity at STC – (Nameplate
                                                            Capacity, NOT Flash Test)
                                                        </p>
                                                        <p>** AC kWh based on estimated calculation
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Solar PV Registered Company (MUST BE ON THE
                                                    NDMG SEAI SOLAR PV COMPANY
                                                    REGISTER)  </h5>
                                                <div class="row ">

                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="form-label"
                                                                >Company name <div
                                                                    class="requiredField">*</div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    id="company_name" name="company_name" value="{{ $jobOrder->company_name }}" readonly>
                                                                    <span id="" class="error company_name_err"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="form-label"
                                                                > Company Identification Number
                                                                 </label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    id="company_number" name="company_number" value="{{ $jobOrder->company_number }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="form-label"
                                                                > Property year of Construction (see
                                                                BER Cert)
                                                                 </label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                     name="property_year_construction" value="{{ $jobOrder->property_year_construction }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="form-label"
                                                                >Total cost of installation
                                                                (including parts, labour
                                                                and VAT)  </label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder="€"
                                                                    name="cost_installation" value="{{ $jobOrder->cost_installation }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">System Components </h5>
                                                <div class="card h-100 p-0">

                                                    <div class="card-inner p-0">
                                                        <table class="table nowrapTable table-bordered table-tranx">
                                                            <thead>
                                                                <tr class="tb-tnx-head">
                                                                    <th>Component</th>
                                                                    <th>Make</th>
                                                                    <th>Model</th>
                                                                    <th>Rating</th>
                                                                    <th>Quantity</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Solar PV Modules</th>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                             name="pv_make" value="{{ $system->pv_make ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            name="pv_model" value="{{ $system->pv_model ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col">
                                                                        <div class="form-control-wrap">
                                                                            <div class="form-text-hint">
                                                                                <span class="overline-title">Wp
                                                                                    at STC</span></div>
                                                                            <input type="text" name="pv_rating" class="form-control"
                                                                            value="{{ $system->pv_rating ?? '' }}" readonly>
                                                                        </div>
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            id="pv_quantity" name="pv_quantity" value="{{ $system->pv_quantity ?? '' }}" readonly>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Mounting System</th>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            id="ms_make" name="ms_make" value="{{ $system->ms_make ?? '' }}" readonly>
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            id="ms_model"
                                                                            name="ms_model" value="{{ $system->ms_model ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder="N/A "
                                                                            name="ms_rating" value="{{ $system->ms_rating ?? '' }}" readonly
                                                                            disabled></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            name="ms_quantity" value="{{ $system->ms_quantity ?? ''}}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Inverter</th>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            id="inverter_make" name="inverter_make" value="{{ $system->inverter_make ?? ''}}" readonly>
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            id="inverter_model" name="inverter_model" value="{{ $system->inverter_model ?? ''}}" readonly>
                                                                    </td>
                                                                    <td class="nk-tb-col">
                                                                        <div class="form-control-wrap">
                                                                            <div class="form-text-hint">
                                                                                <span class="overline-title">
                                                                                    kW</span></div>
                                                                            <input type="text" name="inverter_rating" class="form-control"
                                                                            value="{{ $system->inverter_rating ?? ''}}" readonly>
                                                                        </div>
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            name="inverter_quantity" value="{{ $system->inverter_quantity ?? ''}}" readonly></td>
                                                                </tr>

                                                                <tr>
                                                                    <th>Energy Meter </th>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            id="energy_make"
                                                                            name="energy_make" value="{{ $system->energy_make ?? ''}}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            id="energy_model"
                                                                            name="energy_model" value="{{ $system->energy_model ?? ''}}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder="N/A "
                                                                            value="{{ $system->energy_rating ?? '' }}" readonly
                                                                            name="energy_rating"
                                                                            disabled></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control"
                                                                            name="energy_quantity" value="{{ $system->energy_quantity ?? ''}}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Battery Energy
                                                                        Storage System </th>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control"
                                                                            name="battery_make" value="{{ $system->battery_make ?? ''}}" readonly></td>
                                                                    <td class="nk-tb-col">
                                                                        <div class="g">
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" name="battery_dc" value="DC Connected"
                                                                                    class="custom-control-input"
                                                                                    id="battery_dc2" @checked($system->battery_dc != '') disabled><label class="custom-control-label"
                                                                                    for="battery_dc2"
                                                                                    >DC Connected</label></div>
                                                                        </div>
                                                                        <div class="g">
                                                                            <div
                                                                                class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" name="battery_ac" value="AC Connected"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck8" @checked($system->battery_ac != '') disabled><label class="custom-control-label"
                                                                                    for="customCheck8"
                                                                                    >AC Connected
                                                                                </label></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="nk-tb-col">
                                                                        <div class="form-control-wrap mb-2">
                                                                            <div class="form-text-hint">
                                                                                <span class="overline-title">
                                                                                    kW</span></div>
                                                                            <input type="text" name="battery_rating_kw" class="form-control"
                                                                                value="{{ $system->battery_rating_kw ?? ''}}" readonly>
                                                                        </div>
                                                                        <div class="form-control-wrap">
                                                                            <div class="form-text-hint">
                                                                                <span class="overline-title">
                                                                                    kWh</span></div>
                                                                            <input type="text" name="battery_rating_kwh" class="form-control"
                                                                                value="{{ $system->battery_rating_kwh ?? ''}}" readonly>
                                                                        </div>
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text" class="form-control"
                                                                            name="battery_quantity" value="{{ $system->battery_quantity ?? ''}}" readonly></td>
                                                                </tr>
                                                                <!-- Add more rows as needed -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3"><span>Installer Declaration</span> (MUST BE
                                                    ON THE SEAI NDMG
                                                    SOLAR PV <span>INSTALLER </span>
                                                    REGISTER) </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="poinntsDesCription">
                                                                <p>By signing this Declaration of Works, the
                                                                    undersigned declares that; </p>
                                                                <ul class="DeclarationPoints">
                                                                    <li>The Solar PV system (and, if applicable,
                                                                        battery system) has been installed and
                                                                        commissioned at the above Installation
                                                                        Address on the Date of Works Completion.
                                                                    </li>
                                                                    <li>All works indicated are fully compliant with
                                                                        SEAI Non-Domestic Microgen Scheme- Code
                                                                        of Practice for Installers, SEAI Renewable
                                                                        Installer Register Terms and Conditions and
                                                                        SEAI
                                                                        Solar PV Installer Register Terms and
                                                                        Conditions. </li>
                                                                    <li>The electrical installation has been
                                                                        installed in accordance with I.S. 10101:2020
                                                                        and a Safe
                                                                        Electric certificate (‘RECI cert’) has been
                                                                        issued by a Registered Electrical Contractor
                                                                        for the
                                                                        electrical installation. </li>
                                                                    <li> I have completed an Inspection, Test and
                                                                        Commissioning Report for this solar
                                                                        installation and
                                                                        have given it to the homeowner. </li>
                                                                    <li> I have provided the homeowner with the
                                                                        required documentation to complete their
                                                                        claim
                                                                        application. </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="singatureRow row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label class="form-label"
                                                                        for="">Name (CAPITALS) </label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right">
                                                                        </div><input type="text"
                                                                            class="form-control" id="" name="installer_name" value="{{ $jobOrder->installer_name }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label
                                                                        class="form-label">Date</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right"><em
                                                                                class="icon ni ni-calendar-alt"></em>
                                                                        </div>
                                                                        <input type="text" name="installer_date" value="{{ $jobOrder->installer_date }}" readonly disabled
                                                                            class="form-control date-picker" placeholder="mm/dd/yyyy">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label
                                                                        class="form-label">DATE THE GRANT WORK WAS
                                                                        COMPLETED</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right"><em
                                                                                class="icon ni ni-calendar-alt"></em>
                                                                        </div>
                                                                        <input type="text" name="installer_completed_date"
                                                                            class="form-control date-picker"
                                                                            placeholder="mm/dd/yyyy" value="{{ $jobOrder->installer_completed_date }}" readonly disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label
                                                                        class="form-label">Signed: </label>
                                                                    <div class="form-control-wrap">

                                                                        <input type="text" name="installer_sign" class="form-control"
                                                                        value="{{ $jobOrder->installer_sign }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="Signature_title">
                                                <h2>Section to be completed by HOMEOWNER: </h2>
                                                <p>(Please note this declaration must be signed by the homeowner)
                                                </p>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Homeowner Declaration </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="poinntsDesCription">
                                                                <p>I declare that I am the owner of this dwelling
                                                                    and that the works detailed overleaf have been
                                                                    completed
                                                                    to my satisfaction. I confirm that I have paid
                                                                    the contractor in full or entered an agreed
                                                                    payment
                                                                    schedule contract for the works described. I
                                                                    understand that where my total expenditure is
                                                                    less than the
                                                                    fixed grant amount then the lower amount will be
                                                                    the grant payment. </p>
                                                                <p>I understand that all works may be inspected by
                                                                    SEAI or its agents. I undertake to facilitate
                                                                    any
                                                                    reasonable request to conduct the inspection /
                                                                    audit process.</p>

                                                            </div>
                                                        </div>

                                                        <div class="singatureRow row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label class="form-label"
                                                                        >Name (CAPITALS) </label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right">
                                                                        </div><input type="text"
                                                                            class="form-control" id="owner_name"
                                                                            name="owner_name" value="{{ $jobOrder->owner_name }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label
                                                                        class="form-label">Date</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right"><em
                                                                                class="icon ni ni-calendar-alt"></em>
                                                                        </div>
                                                                        <input type="text" name="owner_date" value="{{ $jobOrder->owner_date }}" readonly
                                                                            class="form-control"
                                                                            placeholder="mm/dd/yyyy">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <div class="form-group"><label
                                                                        class="form-label">Signed: </label>
                                                                    <div class="form-control-wrap">

                                                                        <input type="text" name="owner_sign" value="{{ $jobOrder->owner_sign }}" readonly class="form-control"
                                                                            placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="AdditionLLastNote">
                                                <h2>NOTE: </h2>
                                                <p>This Declaration of Works form should be returned with all other
                                                    completed documents relating to
                                                    this application. If any form is incomplete or missing, then the
                                                    request for payment will be returned.</p>
                                            </div>

                                        </div>

                                        <div class="nk-stepper-step NondomestiocFormTabContent">
                                            <div class="ForTitileMain">
                                                <h1>Part 1 – NDMG Declaration of Works </h1>
                                            </div>
                                            <div class="innerfieldsContainer card-bordered">
                                                <h5 class="title mb-3">Installation Details</h5>
                                                <div class="row ">

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Applicant Name <div
                                                                    class="requiredField"></div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="applicant_name"
                                                                    name="applicant_name" value="{{ $jobOrder->applicant_name }}" readonly>
                                                                    <span id="applicant_name_err" class="error applicant_name_err"></span>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Installation Address</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="installation_address"
                                                                    name="installation_address" value="{{ $jobOrder->installation_address }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                > Installation Eircode <div
                                                                    class="requiredField"></div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="installation_eircode"
                                                                    name="installation_eircode" value="{{ $jobOrder->installation_eircode }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                > Installation MPRN</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="installation_mprn"
                                                                    name="installation_mprn" value="{{ $jobOrder->installation_mprn }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="filedsNote">
                                                        <p>*This will be the person claiming the SEAI grant
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">System Details </h5>
                                                <div class="row ">

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Solar PV System Size <div
                                                                    class="requiredField">*</div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control"
                                                                    placeholder="kWp*" id="solar_pv_system_size"
                                                                    name="solar_pv_system_size" value="{{ $jobOrder->solar_pv_system_size }}" readonly>
                                                                    <span id="" class="error solar_pv_system_size_err"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                > Battery Storage (if
                                                                applicable)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control"
                                                                    placeholder="kW/kWh" id="battery_storage"
                                                                    name="battery_storage" value="{{ $jobOrder->battery_storage }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Solar PV System Annual
                                                                Estimated Yield </label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control"
                                                                    placeholder="kWh**" id="annual_estimated_yield"
                                                                    name="annual_estimated_yield" value="{{ $jobOrder->annual_estimated_yield }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                > Method of Yield Calculation (e.g.,
                                                                PV Syst) </label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="yield_calculation"
                                                                    name="yield_calculation" value="{{ $jobOrder->yield_calculation }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                > Hot Water Diverter Installed?
                                                            </label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control"
                                                                    placeholder="Y/N?" id="water_diverter"
                                                                    name="water_diverter" value="{{ $jobOrder->water_diverter }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="filedsNote">
                                                        <p>* Total DC Installed Capacity at STC – (Nameplate
                                                            Capacity, NOT Flash Test)
                                                        </p>
                                                        <p>** AC kWh based on estimated calculation
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Solar PV Registered Company (MUST BE ON THE
                                                    NDMG SEAI SOLAR PV COMPANY
                                                    REGISTER)  </h5>
                                                <div class="row ">

                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="form-label"
                                                                >Company name <div
                                                                    class="requiredField">*</div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    id="company_name" name="company_name" value="{{ $jobOrder->company_name }}" readonly>
                                                                    <span id="" class="error company_name_err"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="form-label"
                                                                > Company Identification Number
                                                                 </label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    id="company_number" name="company_number" value="{{ $jobOrder->company_number }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="form-label"
                                                                > Property year of Construction (see
                                                                BER Cert)
                                                                 </label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                     name="property_year_construction" value="{{ $jobOrder->property_year_construction }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="form-label"
                                                                >Total cost of installation
                                                                (including parts, labour
                                                                and VAT)  </label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder="€"
                                                                    name="cost_installation" value="{{ $jobOrder->cost_installation }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">System Components </h5>
                                                <div class="card h-100 p-0">

                                                    <div class="card-inner p-0">
                                                        <table class="table nowrapTable table-bordered table-tranx">
                                                            <thead>
                                                                <tr class="tb-tnx-head">
                                                                    <th>Component</th>
                                                                    <th>Make</th>
                                                                    <th>Model</th>
                                                                    <th>Rating</th>
                                                                    <th>Quantity</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Solar PV Modules</th>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                             name="pv_make" value="{{ $system->pv_make ?? ''}}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            name="pv_model" value="{{ $system->pv_model ?? ''}}" readonly></td>
                                                                    <td class="nk-tb-col">
                                                                        <div class="form-control-wrap">
                                                                            <div class="form-text-hint">
                                                                                <span class="overline-title">Wp
                                                                                    at STC</span></div>
                                                                            <input type="text" name="pv_rating" class="form-control"
                                                                            value="{{ $system->pv_rating ?? ''}}" readonly>
                                                                        </div>
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            id="pv_quantity" name="pv_quantity" value="{{ $system->pv_quantity ?? ''}}" readonly>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Mounting System</th>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            id="ms_make" name="ms_make" value="{{ $system->ms_make ?? '' }}" readonly>
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            id="ms_model"
                                                                            name="ms_model" value="{{ $system->ms_model ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder="N/A "
                                                                            name="ms_rating" value="{{ $system->ms_rating ?? '' }}" readonly
                                                                            disabled></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            name="ms_quantity" value="{{ $system->ms_quantity ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Inverter 1 </th>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            id="inverter_make" name="inverter_make" value="{{ $system->inverter_make ?? ''}}" readonly>
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            id="inverter_model" name="inverter_model" value="{{ $system->inverter_model ?? ''}}" readonly>
                                                                    </td>
                                                                    <td class="nk-tb-col">
                                                                        <div class="form-control-wrap">
                                                                            <div class="form-text-hint">
                                                                                <span class="overline-title">
                                                                                    kW</span></div>
                                                                            <input type="text" name="inverter_rating" class="form-control"
                                                                            value="{{ $system->inverter_rating ?? ''}}" readonly>
                                                                        </div>
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            name="inverter_quantity" value="{{ $system->inverter_quantity ?? ''}}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Inverter 2 (If App.) </th>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            id="inverter_make2" name="inverter_make2" value="{{ $system->inverter_make2 ?? ''}}" readonly>
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            name="inverter_model2" value="{{ $system->inverter_model2 ?? ''}}" readonly></td>
                                                                    <td class="nk-tb-col">
                                                                        <div class="form-control-wrap">
                                                                            <div class="form-text-hint">
                                                                                <span class="overline-title">
                                                                                    kW</span></div>
                                                                            <input type="text" name="inverter_rating2" class="form-control"
                                                                            value="{{ $system->inverter_rating2 ?? '' }}" disabled readonly>
                                                                        </div>
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control"
                                                                            name="inverter_quantity2" value="{{ $system->inverter_quantity2 ?? ''}}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Inverter 3 (If App.) </th>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" name="inverter_make3"
                                                                            value="{{ $system->inverter_make3 }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control"
                                                                            name="inverter_model3" value="{{ $system->inverter_model3 ?? ''}}" readonly></td>
                                                                    <td class="nk-tb-col">
                                                                        <div class="form-control-wrap">
                                                                            <div class="form-text-hint">
                                                                                <span class="overline-title">
                                                                                    kW</span></div>
                                                                            <input type="text" name="inverter_rating3" class="form-control"
                                                                            value="{{ $system->inverter_rating3 ?? ''}}" readonly>
                                                                        </div>
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            name="inverter_quantity3" value="{{ $system->inverter_quantity3 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Energy Meter </th>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            id="energy_make"
                                                                            name="energy_make" value="{{ $system->energy_make ?? ''}}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder=""
                                                                            id="energy_model"
                                                                            name="energy_model" value="{{ $system->energy_model ?? ''}}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control" placeholder="N/A "
                                                                            value="{{ $system->energy_rating ?? '' }}" readonly
                                                                            name="energy_rating"
                                                                            disabled></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control"
                                                                            name="energy_quantity" value="{{ $system->energy_quantity ?? ''}}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Battery Energy
                                                                        Storage System </th>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            class="form-control"
                                                                            name="battery_make" value="{{ $system->battery_make ?? ''}}" readonly></td>
                                                                    <td class="nk-tb-col">
                                                                        <div class="g">
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" name="battery_dc" value="DC Connected"
                                                                                    class="custom-control-input"
                                                                                    id="battery_dc2" @checked($system->battery_dc != '') disabled><label class="custom-control-label"
                                                                                    for="battery_dc2"
                                                                                    >DC Connected</label></div>
                                                                        </div>
                                                                        <div class="g">
                                                                            <div
                                                                                class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" name="battery_ac" value="AC Connected"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck8" @checked($system->battery_ac != '') disabled><label class="custom-control-label"
                                                                                    for="customCheck8"
                                                                                    >AC Connected
                                                                                </label></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="nk-tb-col">
                                                                        <div class="form-control-wrap mb-2">
                                                                            <div class="form-text-hint">
                                                                                <span class="overline-title">
                                                                                    kW</span></div>
                                                                            <input type="text" name="battery_rating_kw" class="form-control"
                                                                                value="{{ $system->battery_rating_kw ?? ''}}" readonly>
                                                                        </div>
                                                                        <div class="form-control-wrap">
                                                                            <div class="form-text-hint">
                                                                                <span class="overline-title">
                                                                                    kWh</span></div>
                                                                            <input type="text" name="battery_rating_kwh" class="form-control"
                                                                                value="{{ $system->battery_rating_kwh ?? ''}}" readonly>
                                                                        </div>
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text" class="form-control"
                                                                            name="battery_quantity" value="{{ $system->battery_quantity ?? ''}}" readonly></td>
                                                                </tr>
                                                                <!-- Add more rows as needed -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="Signature_title">
                                                <p>Non-Domestic Microgen Solar PV– Code of Practice for Installers
                                                </p>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3"><span>Installer Declaration</span> (MUST BE
                                                    ON THE SEAI NDMG
                                                    SOLAR PV <span>INSTALLER </span>
                                                    REGISTER) </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="poinntsDesCription">
                                                                <p>By signing this Declaration of Works, the
                                                                    undersigned declares that; </p>
                                                                <ul class="DeclarationPoints">
                                                                    <li>The Solar PV system (and, if applicable,
                                                                        battery system) has been installed and
                                                                        commissioned at the above Installation
                                                                        Address on the Date of Works Completion.
                                                                    </li>
                                                                    <li>All works indicated are fully compliant with
                                                                        SEAI Non-Domestic Microgen Scheme- Code
                                                                        of Practice for Installers, SEAI Renewable
                                                                        Installer Register Terms and Conditions and
                                                                        SEAI
                                                                        Solar PV Installer Register Terms and
                                                                        Conditions. </li>
                                                                    <li>The electrical installation has been
                                                                        installed in accordance with I.S. 10101:2020
                                                                        and a Safe
                                                                        Electric certificate (‘RECI cert’) has been
                                                                        issued by a Registered Electrical Contractor
                                                                        for the
                                                                        electrical installation. </li>
                                                                    <li>I have completed an Inspection, Test and
                                                                        Commissioning Report for this solar
                                                                        installation
                                                                        and have given it to the applicant. </li>
                                                                    <li>I have provided the applicant with the
                                                                        required documentation to complete their
                                                                        claim
                                                                        application. </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="singatureRow row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label class="form-label"
                                                                        for="">Name (CAPITALS) </label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right">
                                                                        </div><input type="text"
                                                                            class="form-control" id="" name="installer_name" value="{{ $jobOrder->installer_name }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label
                                                                        class="form-label">Date</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right"><em
                                                                                class="icon ni ni-calendar-alt"></em>
                                                                        </div>
                                                                        <input type="text" name="installer_date" value="{{ $jobOrder->installer_date }}" readonly disabled
                                                                            class="form-control date-picker" placeholder="mm/dd/yyyy">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label
                                                                        class="form-label">DATE THE GRANT WORK WAS
                                                                        COMPLETED</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right"><em
                                                                                class="icon ni ni-calendar-alt"></em>
                                                                        </div>
                                                                        <input type="text" name="installer_completed_date"
                                                                            class="form-control date-picker"
                                                                            placeholder="mm/dd/yyyy" value="{{ $jobOrder->installer_completed_date }}" readonly disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label
                                                                        class="form-label">Signed: </label>
                                                                    <div class="form-control-wrap">

                                                                        <input type="text" name="installer_sign" class="form-control"
                                                                        value="{{ $jobOrder->installer_sign }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="Signature_title">
                                                <h2>Section to be completed by the Applicant: </h2>
                                                <p>(Please note this declaration must be signed by the applicant)
                                                </p>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Applicant Declaration </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="poinntsDesCription">
                                                                <p>I declare that I am the owner of this premises
                                                                    and that the works detailed overleaf have been
                                                                    completed to my satisfaction. I confirm that I
                                                                    have paid the contractor in full or entered an
                                                                    agreed
                                                                    payment schedule contract for the works
                                                                    described. I understand that where my total
                                                                    expenditure
                                                                    is less than the fixed grant amount then the
                                                                    lower amount will be the grant payment.
                                                                    I understand that all works may be inspected by
                                                                    SEAI or its agents. I undertake to facilitate
                                                                    any
                                                                    reasonable request to conduct the inspection /
                                                                    audit process.</p>

                                                            </div>
                                                        </div>

                                                        <div class="singatureRow row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label class="form-label"
                                                                        >Name (CAPITALS) </label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right">
                                                                        </div><input type="text"
                                                                            class="form-control" id="owner_name"
                                                                            name="owner_name" value="{{ $jobOrder->owner_name }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label
                                                                        class="form-label">Date</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right"><em
                                                                                class="icon ni ni-calendar-alt"></em>
                                                                        </div>
                                                                        <input type="text" name="owner_date" value="{{ $jobOrder->owner_date }}" readonly
                                                                            class="form-control"
                                                                            placeholder="mm/dd/yyyy">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <div class="form-group"><label
                                                                        class="form-label">Signed: </label>
                                                                    <div class="form-control-wrap">

                                                                        <input type="text" name="owner_sign" value="{{ $jobOrder->owner_sign }}" readonly class="form-control"
                                                                            placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="AdditionLLastNote">
                                                <h2>NOTE: </h2>
                                                <p>This Declaration of Works form should be returned with all other
                                                    completed documents relating
                                                    to this application. If any form is incomplete or missing, then
                                                    the request for payment will be
                                                    returned</p>
                                            </div>

                                        </div>








                                        <div class="nk-stepper-step domestiocFormTabContent" >
                                            <div class="ForTitileMain">
                                                <h1>Part 2 – Inspection, Test and Commissioning Report</h1>
                                            </div>
                                            <div class="Signature_title">
                                                <h2>Test Report for grid-connected photovoltaic systems</h2>
                                                <p>according to EN 62446, Annex A
                                                </p>
                                            </div>
                                            <div class="innerfieldsContainer card-bordered">
                                                <h5 class="title mb-3">Customer </h5>
                                                <div class="row ">

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Customer Name<div
                                                                    class="requiredField">*</div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control"
                                                                    name="customer_name" value="{{ $jobOrder->customer_name }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Customer Address</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="customer_address"
                                                                    name="customer_address" value="{{ $jobOrder->customer_address }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                > Customer Eircode <div
                                                                    class="requiredField">*</div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control"
                                                                    name="customer_eircode" value="{{ $jobOrder->customer_eircode }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Installation Contractor </h5>
                                                <div class="row ">

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Company Name<div
                                                                    class="requiredField">*</div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="installer_company_name"
                                                                    name="installer_company_name" value="{{ $jobOrder->customer_eircode }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Company Representative</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="installer_company_representative"
                                                                    name="installer_company_representative" value="{{ $jobOrder->customer_eircode }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                > Company Address:<div
                                                                    class="requiredField">*</div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="installer_company_address"
                                                                    name="installer_company_address" value="{{ $jobOrder->customer_eircode }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="Signature_title">
                                                <h2>PB System Description</h2>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">PV Module</h5>
                                                <div class="row ">

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Manufacturer</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="pv_manufacturer" value="{{ $jobOrder->pv_manufacturer }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Module Type</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="pv_model_type" value="{{ $jobOrder->pv_model_type }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >PV Module Performance</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="pv_model_performance" value="{{ $jobOrder->pv_model_performance }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Number of Modules</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="pv_number_modules" value="{{ $jobOrder->pv_number_modules }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Short Circuit Current Isc
                                                                (A)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="pv_short_circuit_current" value="{{ $jobOrder->pv_short_circuit_current }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >MPP Current (A)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="pv_mpp_current" value="{{ $jobOrder->pv_mpp_current }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Open Circuit Voltage Voc
                                                                (V)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="pv_open_circuit_voltage" value="{{ $jobOrder->pv_open_circuit_voltage }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >MPP Voltage (V)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="pv_mpp_voltage" value="{{ $jobOrder->pv_mpp_voltage }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">PV Inverters</h5>
                                                <div class="row ">

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country15">Manufacturer</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="inverter_manufacturer" value="{{ $pv_invert->inverter_manufacturer ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country16">Inverter Type</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="inverter_type" value="{{ $pv_invert->inverter_type ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country17">AC Nominal Power (W)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="inverter_ac_nominal" value="{{ $pv_invert->inverter_ac_nominal ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country18">Inverter Quantity</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="pv_inverter_quantity" value="{{ $pv_invert->pv_inverter_quantity ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country19">AC Maximum Power (W)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="inverter_ac_maximum" value="{{ $pv_invert->inverter_ac_maximum ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country20">DC Maximum Power (W)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="inverter_dc_maximum" value="{{ $pv_invert->inverter_dc_maximum ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><label class="form-label">Test
                                                                Date</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"><em class="icon ni ni-calendar-alt"></em>
                                                                </div>
                                                                <input type="text" name="inverter_test_date" class="form-control date-picker"
                                                                placeholder="mm/dd/yyyy" value="{{ $pv_invert->inverter_test_date ?? ''}}" readonly disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><label class="form-label">Next Test
                                                                Date</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"><em class="icon ni ni-calendar-alt"></em>
                                                                </div>
                                                                <input type="text" name="inverter_next_test_date" class="form-control date-picker"
                                                                placeholder="mm/dd/yyyy" value="{{ $pv_invert->inverter_next_test_date ?? ''}}" readonly disabled>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><label class="form-label">Test
                                                                Reason</label>
                                                            <div class="form-control-wrap">
                                                                <ul class="custom-control-group g-3 align-center">
                                                                    <li>
                                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" name="inverter_test_reason" value="Initial inspection" class="custom-control-input"
                                                                            id="pay-card3" @checked($pv_invert->inverter_test_reason ?? false) disabled>
                                                                            <label class="custom-control-label" for="pay-card3">Initial
                                                                                inspection</label></div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="inverter_test2_reason" value="Retesting"
                                                                            id="pay-bitcoin3" @checked($pv_invert->inverter_test2_reason ?? false) disabled>
                                                                            <label class="custom-control-label" for="pay-bitcoin3">Retesting</label>
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Electrical Certs</h5>
                                                <div class="row ">

                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="form-label"
                                                                >Safe Electric Cert Number</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="electric_cert_number" value="{{ $jobOrder->electric_cert_number }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="form-label"
                                                                >Test Record Sheet Cert
                                                                Number</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="electric_record_sheet" value="{{ $jobOrder->electric_record_sheet }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="innerfields_title">
                                                            <h2>DC Test Results</h2>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group"><label class="form-label"
                                                                >RE</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="electric_re" value="{{ $jobOrder->electric_re }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group"><label class="form-label"
                                                                >Loop</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="electric_loop" value="{{ $jobOrder->electric_loop }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group"><label class="form-label"
                                                                >RCDx1</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="electric_rcdx1" value="{{ $jobOrder->electric_rcdx1 }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group"><label class="form-label"
                                                                >RCDx5</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="electric_rcdx5" value="{{ $jobOrder->electric_rcdx5 }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Design, construction, inspection and testing
                                                </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div class="poinntsDesCription">
                                                                    <p>I/we, the responsible person(s) for the
                                                                        design,
                                                                        construction, inspection and testing of the
                                                                        electrical
                                                                        system (as specified by the signature(s)),
                                                                        details of which are described above, have
                                                                        inspected and
                                                                        tested the design and structure with
                                                                        suitable
                                                                        skill and care and confirm that the said
                                                                        words,
                                                                        for which
                                                                        I/we am/are responsible, were carried out to
                                                                        the
                                                                        best of our knowledge and expertise. </p>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="innerfields_title">
                                                                <h2> Test Results</h2>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <ul class="custom-control-group g-3 align-center">
                                                                    <li>
                                                                        <div
                                                                            class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" name="test_result" value="1"
                                                                                class="custom-control-input"
                                                                                id="pay-card1" @checked($jobOrder->test_result !='') disabled><label
                                                                                class="custom-control-label"
                                                                                for="pay-card1">No defects were
                                                                                found</label></div>
                                                                    </li>
                                                                    <li>
                                                                        <div
                                                                            class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" name="test_result2" value="1"
                                                                                class="custom-control-input"
                                                                                id="pay-bitcoin1" @checked($jobOrder->test_result2 !='') disabled><label
                                                                                class="custom-control-label"
                                                                                for="pay-bitcoin1">Defects were
                                                                                found </label></div>
                                                                    </li>
                                                                    <li>
                                                                        <div
                                                                            class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" name="test_result3" value="1"
                                                                                class="custom-control-input"
                                                                                id="pay-card2" @checked($jobOrder->test_result3 !='') disabled><label
                                                                                class="custom-control-label"
                                                                                for="pay-card2">The Photovoltaic
                                                                                system complies with the standards
                                                                                of electrical engineering</label>
                                                                        </div>
                                                            </div>
                                                            </li>

                                                            </ul>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="form-group"><label
                                                                    class="form-label">Signature/Tester </label>
                                                                <div class="form-control-wrap">

                                                                    <input type="text" name="tester_signature" class="form-control"
                                                                    value="{{ $jobOrder->tester_signature }}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group"><label
                                                                    class="form-label">Date</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"><em
                                                                            class="icon ni ni-calendar-alt"></em>
                                                                    </div>
                                                                    <input type="text" name="test_result_date"
                                                                        class="form-control date-picker"
                                                                        placeholder="mm/dd/yyyy" value="{{ $jobOrder->test_result_date }}" readonly disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-message">Remarks</label>
                                                                <div class="form-control-wrap"><textarea
                                                                        class="form-control form-control-sm"
                                                                        id="test_remark" name="test_remark"
                                                                        placeholder="Write your message" readonly
                                                                        >{{ $jobOrder->test_remark }}</textarea></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="Signature_title">
                                                <h2>Inspection test report </h2>
                                                <p>according to EN 62446, Annex B
                                                </p>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Design and installation of the PV generator
                                                </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_1" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn1" @checked($design_install->design_installation_1 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn1">The DC system was generally
                                                                        designed, selected and set up in accordance
                                                                        with the
                                                                        requirements in DIN VDE 0100 (IEC 60364) and
                                                                        in particular in accordance with DIN VDE
                                                                        0100-712 (IEC
                                                                        60364-7-712) </label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_2" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn2" @checked($design_install->design_installation_2 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn2">The DC components were
                                                                        measured for DC operation </label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_3" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn3" @checked($design_install->design_installation_3 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn3">The DC components are rated
                                                                        for the maximum current and maximum
                                                                        voltage</label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_4" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->design_installation_4 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn4">Protection is provided by
                                                                        application of class II or equivalent
                                                                        insulation on the DC side</label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_5" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn5" @checked($design_install->design_installation_5 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn5">PV strand cables, PV
                                                                        generator cables and PV DC main cables have
                                                                        been selected and
                                                                        constructed so that the risk of earth faults
                                                                        and short circuits is reduced to a minimum
                                                                        (DIN VDE 0100
                                                                        712 para. 522.8.1) </label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_6" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn6" @checked($design_install->design_installation_6 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn6">The wiring system has been
                                                                        selected and constructed so that it can
                                                                        withstand expected external
                                                                        influences such as wind, ice temperature and
                                                                        solar radiation (DIN VDE 0100-712.
                                                                        522.8.3)</label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_7" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn7" @checked($design_install->design_installation_7 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn7">AC and DC cables are
                                                                        physically separated</label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_8" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn8" @checked($design_install->design_installation_8 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn8">Systems without strand
                                                                        overcurrent protective device: Strand cables
                                                                        are designed so that they
                                                                        can take up the highest combined leakage
                                                                        current of parallel lines (DIN VDE 0100-712
                                                                        para.433)</label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_9" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn9" @checked($design_install->design_installation_9 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn9">Systems with strand
                                                                        overcurrent protective device: Overcurrent
                                                                        protective devices are set
                                                                        correctly according to local rules or
                                                                        according to the PV module manufacturer’s
                                                                        instruction (DIN VDE
                                                                        0100-712 para. 433.2)</label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_10" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn10" @checked($design_install->design_installation_10 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn10">There are DC load break
                                                                        switches installed on the DC side of the
                                                                        inverter (DIN VDE 0100-712
                                                                        para.
                                                                        536.2.2) </label></div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">PV System/overvoltage protection/electric
                                                    shock
                                                </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="overvoltage_1" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-on1" @checked($design_install->overvoltage_1 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-on1">The inverter has a simple
                                                                        separation between the AC side and the DC
                                                                        side </label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="overvoltage_2" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-on2" @checked($design_install->overvoltage_2 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-on2">Alternatively: A residual
                                                                        device is installed in the circuit and
                                                                        corresponds to a type B RCD (DIN
                                                                        VDE 0100-712 para. 413.1.1.1.2) </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="overvoltage_3" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-on3" @checked($design_install->overvoltage_3 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-on3">The area of wiring loops
                                                                        was kept as small as possible (DIN VDE
                                                                        0100-712, para. 54) </label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="overvoltage_4" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-on4" @checked($design_install->overvoltage_4 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-on4">If equipotential bonding
                                                                        conductors are installed, they run in
                                                                        parallel and in as close contact as
                                                                        possible to the PV DC cables </label></div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Special factors of PV system – AC circuit
                                                </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="special_factor_1" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-sfn1" @checked($design_install->special_factor_1 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-sfn1">Devices for disconnecting
                                                                        the inverter are provided on the AC side
                                                                    </label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="special_factor_2" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-sfn2" @checked($design_install->special_factor_2 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-sfn2">Separating and switching
                                                                        devices are connected so that the PV
                                                                        installation in connected on the
                                                                        “load”side and the public supply on the
                                                                        “sources” side (DIN VDE 0100-712 par,.
                                                                        536.2.2.1) </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="special_factor_3" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-sfn3" @checked($design_install->special_factor_3 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-sfn3">Protection settings of the
                                                                        inverter are programmed according to local
                                                                        regulations</label></div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Marking and labelling of the PV system
                                                </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="marking_labelling_1" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-mln1" @checked($design_install->marking_labelling_1 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-mln1">All circuits, protection
                                                                        devices, switches and terminals have
                                                                        appropriate markings</label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="marking_labelling_2" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->marking_labelling_2 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-mln2">All DC connection boxes (PV
                                                                        sub-generator connection box and PV
                                                                        generator connection box)
                                                                        bear a warning that the active parts present
                                                                        in the connection box are supplied by a PV
                                                                        generator and
                                                                        may still be live after the shutdown of PV
                                                                        inverters and public supply </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="marking_labelling_3" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->marking_labelling_3 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-mln3">The AC main switch has a
                                                                        clear inscription </label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="marking_labelling_4" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->marking_labelling_4 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-mln4">Warnings are present for
                                                                        the double supply at the point of
                                                                        interconnection </label></div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="marking_labelling_5" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->marking_labelling_5 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-mln5">The protection settings of
                                                                        the inverter and details of the installation
                                                                        are provided on site </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="marking_labelling_6" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->marking_labelling_6 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-mln6">The procedures for
                                                                        emergency shutdown are provided on site
                                                                    </label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="marking_labelling_7" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->marking_labelling_7 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-mln7">All signs and markings are
                                                                        suitable and permanently attached. </label>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">General (mechanical) installation of the PV
                                                    system
                                                </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="general_installation_1" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->general_installation_1 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-gnm1">Ventilation is provided
                                                                        behind the PV generator to prevent
                                                                        overheating/reduce the fire risk</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="general_installation_2" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->general_installation_2 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-gnm2">The frame and materials are
                                                                        properly attached and stable; the roof
                                                                        fasteners are weather
                                                                        resistant </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="general_installation_3" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->general_installation_3 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-gnm3">The cable routing is
                                                                        weather-resistant </label></div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Notes
                                                </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap"><textarea name="test_notes"
                                                                        class="form-control form-control-sm" readonly
                                                                        id="fv-message" placeholder="Write your message"
                                                                        >{{ $jobOrder->test_notes }}</textarea></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="Signature_title">
                                                <h2>Test Report for grid-connected photovoltaic systems </h2>
                                                <p>according to EN 62446, Annex C
                                                </p>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Test</h5>
                                                <div class="card h-100 p-0">

                                                    <div class="card-inner p-0">
                                                        <table class="table  table-bordered table-tranx">
                                                            <thead>
                                                                <tr class="tb-tnx-head">
                                                                    <th colspan="2">String</th>
                                                                    <th>1</th>
                                                                    <th>2</th>
                                                                    <th>3</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="nk-tb-col" rowspan="2">PV generator
                                                                    </td>
                                                                    <td class="nk-tb-col">Module</td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_module1" value="{{ $test_report->pv_generator_module1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_module2" value="{{ $test_report->pv_generator_module2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_module3" value="{{ $test_report->pv_generator_module3 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Quantity</td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_quantity1" value="{{ $test_report->pv_generator_quantity1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_quantity2" value="{{ $test_report->pv_generator_quantity2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_quantity3" value="{{ $test_report->pv_generator_quantity3 ?? '' }}" readonly></td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="nk-tb-col" rowspan="2">PV generator
                                                                        parameters
                                                                    </td>
                                                                    <td class="nk-tb-col">Voc (STC)</td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_voc1" value="{{ $test_report->generator_parameters_voc1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_voc2" value="{{ $test_report->generator_parameters_voc2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_voc3" value="{{ $test_report->generator_parameters_voc3 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Isc (STC)</td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_isc1" value="{{ $test_report->generator_parameters_isc1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_isc2" value="{{ $test_report->generator_parameters_isc2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_isc3" value="{{ $test_report->generator_parameters_isc3 ?? '' }}" readonly></td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="nk-tb-col" rowspan="4">Protection
                                                                        device (branch
                                                                        fuse)
                                                                    </td>
                                                                    <td class="nk-tb-col">Type </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="protection_device1" value="{{ $test_report->protection_device1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="protection_device2" value="{{ $test_report->protection_device2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="protection_device3" value="{{ $test_report->protection_device3 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Rated Value (A) </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_rated_value1" value="{{ $test_report->device_rated_value1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_rated_value2" value="{{ $test_report->device_rated_value2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_rated_value3" value="{{ $test_report->device_rated_value3 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">DC rating (A) </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_dc_rating1" value="{{ $test_report->device_dc_rating1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_dc_rating2" value="{{ $test_report->device_dc_rating2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_dc_rating3" value="{{ $test_report->device_dc_rating3 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Capacity (kA) </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_capacity1" value="{{ $test_report->device_capacity1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_capacity2" value="{{ $test_report->device_capacity2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_capacity3" value="{{ $test_report->device_capacity3 ?? '' }}" readonly></td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="nk-tb-col" rowspan="3">Wiring
                                                                    </td>
                                                                    <td class="nk-tb-col">Type </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_type1" value="{{ $test_report->wiring_type1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_type2" value="{{ $test_report->wiring_type2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_type3" value="{{ $test_report->wiring_type3 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Phase conductor (mm2)
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_phase1" value="{{ $test_report->wiring_phase1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_phase2" value="{{ $test_report->wiring_phase2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_phase3" value="{{ $test_report->wiring_phase3 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Earth conductor (mm2)
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_earth1" value="{{ $test_report->wiring_earth1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_earth2" value="{{ $test_report->wiring_earth2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_earth3" value="{{ $test_report->wiring_earth3 ?? '' }}" readonly></td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="nk-tb-col" rowspan="3">Testing and
                                                                        Measurement of
                                                                        the strand
                                                                    </td>
                                                                    <td class="nk-tb-col">Voc (V) </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_voc1" value="{{ $test_report->tm_voc1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_voc2" value="{{ $test_report->tm_voc2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_voc3" value="{{ $test_report->tm_voc3 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Isc (A) </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_isc1" value="{{ $test_report->tm_isc1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_isc2" value="{{ $test_report->tm_isc2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_isc3" value="{{ $test_report->tm_isc3 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Irradiance </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_irradiance1" value="{{ $test_report->tm_irradiance1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_irradiance2" value="{{ $test_report->tm_irradiance2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_irradiance3" value="{{ $test_report->tm_irradiance3 ?? '' }}" readonly></td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="nk-tb-col" colspan="2">Polarity
                                                                        monitoring
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="polarity_monitoring1" value="{{ $test_report->polarity_monitoring1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="polarity_monitoring2" value="{{ $test_report->polarity_monitoring2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="polarity_monitoring3" value="{{ $test_report->polarity_monitoring3 ?? '' }}" readonly></td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="nk-tb-col" rowspan="3">Array
                                                                        Insulation Resistance
                                                                    </td>
                                                                    <td class="nk-tb-col">Test Voltage (V) </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_test_voltage1" value="{{ $test_report->array_test_voltage1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_test_voltage2" value="{{ $test_report->array_test_voltage2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_test_voltage3" value="{{ $test_report->array_test_voltage3 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Pos – Earth (M ) </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_pos1" value="{{ $test_report->array_pos1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_pos2" value="{{ $test_report->array_pos2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_pos3" value="{{ $test_report->array_pos3 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Neg – Earth (M ) </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_neg1" value="{{ $test_report->array_neg1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_neg2" value="{{ $test_report->array_neg2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_neg3" value="{{ $test_report->array_neg3 ?? '' }}" readonly></td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="nk-tb-col" colspan="2">Earth
                                                                        continuity (where fitted)
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="earth_continuty1" value="{{ $test_report->earth_continuty1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="earth_continuty2" value="{{ $test_report->earth_continuty2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="earth_continuty3" value="{{ $test_report->earth_continuty3 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col" colspan="2">Switchgear
                                                                        functioning
                                                                        correctly
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="switchgear_functioning1" value="{{ $test_report->switchgear_functioning1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="switchgear_functioning2" value="{{ $test_report->switchgear_functioning2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="switchgear_functioning3" value="{{ $test_report->switchgear_functioning3 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col" colspan="2">Inverter
                                                                        Make/Model
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="test_inverter_make1" value="{{ $test_report->test_inverter_make1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="test_inverter_make2" value="{{ $test_report->test_inverter_make2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="test_inverter_make3" value="{{ $test_report->test_inverter_make3 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col" colspan="2">Inverter
                                                                        Serial Number
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_serial_no1" value="{{ $test_report->inverter_serial_no1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_serial_no2" value="{{ $test_report->inverter_serial_no2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_serial_no3" value="{{ $test_report->inverter_serial_no3 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col" colspan="2">Inverter
                                                                        functioning correctly
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_functioning1" value="{{ $test_report->inverter_functioning1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_functioning2" value="{{ $test_report->inverter_functioning2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_functioning3" value="{{ $test_report->inverter_functioning3 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col" colspan="2">Loss of mains
                                                                        test
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="loss_1" value="{{ $test_report->loss_1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="loss_2" value="{{ $test_report->loss_2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="loss_3" value="{{ $test_report->loss_3 ?? '' }}" readonly></td>
                                                                </tr>

                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Notes
                                                </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap"><textarea
                                                                        class="form-control form-control-sm"
                                                                        id="fv-message" name="notes"
                                                                        placeholder="Write your message"
                                                                        >{{ $jobOrder->notes }}</textarea></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="nk-stepper-step NondomestiocFormTabContent">
                                            <div class="ForTitileMain">
                                                <h1>Part 2 – Inspection, Test and Commissioning Report </h1>
                                            </div>
                                            <div class="Signature_title">
                                                <h2>Test Report for grid-connected photovoltaic systems</h2>
                                                <p>according to EN 62446, Annex A
                                                </p>
                                            </div>
                                            <div class="innerfieldsContainer card-bordered">
                                                <h5 class="title mb-3">Customer </h5>
                                                <div class="row ">

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Customer Name<div
                                                                    class="requiredField">*</div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control"
                                                                    name="customer_name" value="{{ $jobOrder->customer_name }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Customer Address</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="customer_address"
                                                                    name="customer_address" value="{{ $jobOrder->customer_address }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                > Customer Eircode <div
                                                                    class="requiredField">*</div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control"
                                                                    name="customer_eircode" value="{{ $jobOrder->customer_eircode }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Installation Contractor </h5>
                                                <div class="row ">

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Company Name<div
                                                                    class="requiredField">*</div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="installer_company_name"
                                                                    name="installer_company_name" value="{{ $jobOrder->customer_eircode }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Company Representative</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="installer_company_representative"
                                                                    name="installer_company_representative" value="{{ $jobOrder->customer_eircode }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                > Company Address:<div
                                                                    class="requiredField">*</div></label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="installer_company_address"
                                                                    name="installer_company_address" value="{{ $jobOrder->customer_eircode }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="Signature_title">
                                                <h2>PB System Description</h2>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">PV Module</h5>
                                                <div class="row ">

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Manufacturer</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="pv_manufacturer" value="{{ $jobOrder->pv_manufacturer }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Module Type</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="pv_model_type" value="{{ $jobOrder->pv_model_type }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >PV Module Performance</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="pv_model_performance" value="{{ $jobOrder->pv_model_performance }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Number of Modules</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="pv_number_modules" value="{{ $jobOrder->pv_number_modules }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Short Circuit Current Isc
                                                                (A)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="pv_short_circuit_current" value="{{ $jobOrder->pv_short_circuit_current }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >MPP Current (A)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="pv_mpp_current" value="{{ $jobOrder->pv_mpp_current }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >Open Circuit Voltage Voc
                                                                (V)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="pv_open_circuit_voltage" value="{{ $jobOrder->pv_open_circuit_voltage }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                >MPP Voltage (V)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="pv_mpp_voltage" value="{{ $jobOrder->pv_mpp_voltage }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">PV Inverters</h5>
                                                <div class="row ">

                                                    <div class="col-lg-12">
                                                        <div class="innerfields_title">
                                                            <h2>Inverter Type 1</h2>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country15">Manufacturer</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="inverter_manufacturer" value="{{ $pv_invert->inverter_manufacturer ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country16">Inverter Type</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="inverter_type" value="{{ $pv_invert->inverter_type ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country17">AC Nominal Power (W)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="inverter_ac_nominal" value="{{ $pv_invert->inverter_ac_nominal ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country18">Inverter Quantity</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="pv_inverter_quantity" value="{{ $pv_invert->pv_inverter_quantity ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country19">AC Maximum Power (W)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="inverter_ac_maximum" value="{{ $pv_invert->inverter_ac_maximum ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country20">DC Maximum Power (W)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="inverter_dc_maximum" value="{{ $pv_invert->inverter_dc_maximum ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>

                                                <div class="row ">

                                                <div class="col-lg-12">
                                                        <div class="innerfields_title">
                                                            <h2>Inverter Type 2: (if applicable)</h2>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country15">Manufacturer</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="inverter_manufacturer_2" value="{{ $pv_invert->inverter_manufacturer_2 ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country16">Inverter Type</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="inverter_type_2" value="{{ $pv_invert->inverter_type_2 }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country17">AC Nominal Power (W)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="inverter_ac_nominal_2" value="{{ $pv_invert->inverter_ac_nominal_2 ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country18">Inverter Quantity</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="pv_inverter_quantity_2" value="{{ $pv_invert->pv_inverter_quantity_2 }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country19">AC Maximum Power (W)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="inverter_ac_maximum2" value="{{ $pv_invert->inverter_ac_maximum2 ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country20">DC Maximum Power (W)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="inverter_dc_maximum2" value="{{ $pv_invert->inverter_dc_maximum2 }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="row ">

                                                <div class="col-lg-12">
                                                        <div class="innerfields_title">
                                                            <h2>Inverter Type 3: (if applicable) </h2>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country15">Manufacturer</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="inverter_manufacturer_3" value="{{ $pv_invert->inverter_manufacturer_3 ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country16">Inverter Type</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="inverter_type_3" value="{{ $pv_invert->inverter_type_3 ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country17">AC Nominal Power (W)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="inverter_ac_nominal_3" id="inverter_ac_nominal_3" value="{{ $pv_invert->inverter_ac_nominal_3 ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country18">Inverter Quantity</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="pv_inverter_quantity_3" value="{{ $pv_invert->pv_inverter_quantity_3 }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country19">AC Maximum Power (W)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="inverter_ac_maximum3" value="{{ $pv_invert->inverter_ac_maximum3 ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country20">DC Maximum Power (W)</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="number" class="form-control"
                                                                    placeholder="" name="inverter_dc_maximum3" value="{{ $pv_invert->inverter_dc_maximum3 ?? ''}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><label class="form-label">Test
                                                                Date</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"><em class="icon ni ni-calendar-alt"></em>
                                                                </div>
                                                                <input type="text" name="inverter_test_date" class="form-control date-picker"
                                                                placeholder="mm/dd/yyyy" value="{{ $pv_invert->inverter_test_date ?? ''}}" readonly disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><label class="form-label">Next Test
                                                                Date</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"><em class="icon ni ni-calendar-alt"></em>
                                                                </div>
                                                                <input type="text" name="inverter_next_test_date" class="form-control date-picker"
                                                                placeholder="mm/dd/yyyy" value="{{ $pv_invert->inverter_next_test_date ?? ''}}" readonly disabled>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><label class="form-label">Test
                                                                Reason</label>
                                                            <div class="form-control-wrap">
                                                                <ul class="custom-control-group g-3 align-center">
                                                                    <li>
                                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" name="inverter_test_reason" value="Initial inspection" class="custom-control-input"
                                                                            id="pay-card3" @checked($pv_invert->inverter_test_reason ?? false) disabled>
                                                                            <label class="custom-control-label" for="pay-card3">Initial
                                                                                inspection</label></div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="inverter_test2_reason" value="Retesting"
                                                                            id="pay-bitcoin3" @checked($pv_invert->inverter_test2_reason ?? false) disabled>
                                                                            <label class="custom-control-label" for="pay-bitcoin3">Retesting</label>
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>


                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Electrical Certs</h5>
                                                <div class="row ">

                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="form-label"
                                                                >Safe Electric Cert Number</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="electric_cert_number" value="{{ $jobOrder->electric_cert_number }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="form-label"
                                                                >Test Record Sheet Cert
                                                                Number</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="electric_record_sheet" value="{{ $jobOrder->electric_record_sheet }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="innerfields_title">
                                                            <h2>DC Test Results</h2>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group"><label class="form-label"
                                                                >RE</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="electric_re" value="{{ $jobOrder->electric_re }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group"><label class="form-label"
                                                                >Loop</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="electric_loop" value="{{ $jobOrder->electric_loop }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group"><label class="form-label"
                                                                >RCDx1</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="electric_rcdx1" value="{{ $jobOrder->electric_rcdx1 }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group"><label class="form-label"
                                                                >RCDx5</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" placeholder=""
                                                                    name="electric_rcdx5" value="{{ $jobOrder->electric_rcdx5 }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Design, construction, inspection and testing
                                                </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div class="poinntsDesCription">
                                                                    <p>I/we, the responsible person(s) for the
                                                                        design,
                                                                        construction, inspection and testing of the
                                                                        electrical
                                                                        system (as specified by the signature(s)),
                                                                        details of which are described above, have
                                                                        inspected and
                                                                        tested the design and structure with
                                                                        suitable
                                                                        skill and care and confirm that the said
                                                                        words,
                                                                        for which
                                                                        I/we am/are responsible, were carried out to
                                                                        the
                                                                        best of our knowledge and expertise. </p>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="innerfields_title">
                                                                <h2> Test Results</h2>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <ul class="custom-control-group g-3 align-center">
                                                                    <li>
                                                                        <div
                                                                            class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" name="test_result" value="1"
                                                                                class="custom-control-input"
                                                                                id="pay-card1" @checked($jobOrder->test_result !='') disabled><label
                                                                                class="custom-control-label"
                                                                                for="pay-card1">No defects were
                                                                                found</label></div>
                                                                    </li>
                                                                    <li>
                                                                        <div
                                                                            class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" name="test_result2" value="1"
                                                                                class="custom-control-input"
                                                                                id="pay-bitcoin1" @checked($jobOrder->test_result2 !='') disabled><label
                                                                                class="custom-control-label"
                                                                                for="pay-bitcoin1">Defects were
                                                                                found </label></div>
                                                                    </li>
                                                                    <li>
                                                                        <div
                                                                            class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" name="test_result3" value="1"
                                                                                class="custom-control-input"
                                                                                id="pay-card2" @checked($jobOrder->test_result3 !='') disabled><label
                                                                                class="custom-control-label"
                                                                                for="pay-card2">The Photovoltaic
                                                                                system complies with the standards
                                                                                of electrical engineering</label>
                                                                        </div>
                                                            </div>
                                                            </li>

                                                            </ul>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="form-group"><label
                                                                    class="form-label">Signature/Tester </label>
                                                                <div class="form-control-wrap">

                                                                    <input type="text" name="tester_signature" class="form-control"
                                                                    value="{{ $jobOrder->tester_signature }}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group"><label
                                                                    class="form-label">Date</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"><em
                                                                            class="icon ni ni-calendar-alt"></em>
                                                                    </div>
                                                                    <input type="text" name="test_result_date"
                                                                        class="form-control date-picker"
                                                                        placeholder="mm/dd/yyyy" value="{{ $jobOrder->test_result_date }}" readonly disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-message">Remarks</label>
                                                                <div class="form-control-wrap"><textarea
                                                                        class="form-control form-control-sm"
                                                                        id="test_remark" name="test_remark"
                                                                        placeholder="Write your message" readonly
                                                                        >{{ $jobOrder->test_remark }}</textarea></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="Signature_title">
                                                <h2>Inspection test report </h2>
                                                <p>according to EN 62446, Annex B
                                                </p>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Testing</h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">

                                                        <div class="col-sm-6">
                                                            <div class="form-group"><label class="form-label">Test
                                                                    Date</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"><em
                                                                            class="icon ni ni-calendar-alt"></em>
                                                                    </div>
                                                                    <input type="text" name="test_date"
                                                                        class="form-control date-picker" disabled
                                                                        placeholder="mm/dd/yyyy" value="{{ $jobOrder->test_date }}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="form-group"><label
                                                                    class="form-label">Signature/Tester </label>
                                                                <div class="form-control-wrap">

                                                                    <input type="text" name="test_signature" class="form-control"
                                                                    value="{{ $jobOrder->test_signature }}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="filedsNote">
                                                            <p>Inspected circuits (fill out one sheet for large
                                                                systems and for separate inspections per
                                                                inspection):
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Design and installation of the PV generator
                                                </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_1" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn1" @checked($design_install->design_installation_1 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn1">The DC system was generally
                                                                        designed, selected and set up in accordance
                                                                        with the
                                                                        requirements in DIN VDE 0100 (IEC 60364) and
                                                                        in particular in accordance with DIN VDE
                                                                        0100-712 (IEC
                                                                        60364-7-712) </label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_2" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn2" @checked($design_install->design_installation_2 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn2">The DC components were
                                                                        measured for DC operation </label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_3" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn3" @checked($design_install->design_installation_3 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn3">The DC components are rated
                                                                        for the maximum current and maximum
                                                                        voltage</label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_4" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->design_installation_4 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn4">Protection is provided by
                                                                        application of class II or equivalent
                                                                        insulation on the DC side</label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_5" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn5" @checked($design_install->design_installation_5 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn5">PV strand cables, PV
                                                                        generator cables and PV DC main cables have
                                                                        been selected and
                                                                        constructed so that the risk of earth faults
                                                                        and short circuits is reduced to a minimum
                                                                        (DIN VDE 0100
                                                                        712 para. 522.8.1) </label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_6" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn6" @checked($design_install->design_installation_6 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn6">The wiring system has been
                                                                        selected and constructed so that it can
                                                                        withstand expected external
                                                                        influences such as wind, ice temperature and
                                                                        solar radiation (DIN VDE 0100-712.
                                                                        522.8.3)</label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_7" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn7" @checked($design_install->design_installation_7 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn7">AC and DC cables are
                                                                        physically separated</label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_8" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn8" @checked($design_install->design_installation_8 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn8">Systems without strand
                                                                        overcurrent protective device: Strand cables
                                                                        are designed so that they
                                                                        can take up the highest combined leakage
                                                                        current of parallel lines (DIN VDE 0100-712
                                                                        para.433)</label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_9" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn9" @checked($design_install->design_installation_9 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn9">Systems with strand
                                                                        overcurrent protective device: Overcurrent
                                                                        protective devices are set
                                                                        correctly according to local rules or
                                                                        according to the PV module manufacturer’s
                                                                        instruction (DIN VDE
                                                                        0100-712 para. 433.2)</label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="design_installation_10" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-dn10" @checked($design_install->design_installation_10 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-dn10">There are DC load break
                                                                        switches installed on the DC side of the
                                                                        inverter (DIN VDE 0100-712
                                                                        para.
                                                                        536.2.2) </label></div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">PV System/overvoltage protection/electric
                                                    shock
                                                </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="overvoltage_1" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-on1" @checked($design_install->overvoltage_1 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-on1">The inverter has a simple
                                                                        separation between the AC side and the DC
                                                                        side </label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="overvoltage_2" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-on2" @checked($design_install->overvoltage_2 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-on2">Alternatively: A residual
                                                                        device is installed in the circuit and
                                                                        corresponds to a type B RCD (DIN
                                                                        VDE 0100-712 para. 413.1.1.1.2) </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="overvoltage_3" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-on3" @checked($design_install->overvoltage_3 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-on3">The area of wiring loops
                                                                        was kept as small as possible (DIN VDE
                                                                        0100-712, para. 54) </label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="overvoltage_4" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-on4" @checked($design_install->overvoltage_4 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-on4">If equipotential bonding
                                                                        conductors are installed, they run in
                                                                        parallel and in as close contact as
                                                                        possible to the PV DC cables </label></div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Special factors of PV system – AC circuit
                                                </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="special_factor_1" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-sfn1" @checked($design_install->special_factor_1 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-sfn1">Devices for disconnecting
                                                                        the inverter are provided on the AC side
                                                                    </label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="special_factor_2" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-sfn2" @checked($design_install->special_factor_2 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-sfn2">Separating and switching
                                                                        devices are connected so that the PV
                                                                        installation in connected on the
                                                                        “load”side and the public supply on the
                                                                        “sources” side (DIN VDE 0100-712 par,.
                                                                        536.2.2.1) </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="special_factor_3" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-sfn3" @checked($design_install->special_factor_3 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-sfn3">Protection settings of the
                                                                        inverter are programmed according to local
                                                                        regulations</label></div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Marking and labelling of the PV system
                                                </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="marking_labelling_1" value="1"
                                                                        class="custom-control-input"
                                                                        id="pay-card-mln1" @checked($design_install->marking_labelling_1 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-mln1">All circuits, protection
                                                                        devices, switches and terminals have
                                                                        appropriate markings</label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="marking_labelling_2" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->marking_labelling_2 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-mln2">All DC connection boxes (PV
                                                                        sub-generator connection box and PV
                                                                        generator connection box)
                                                                        bear a warning that the active parts present
                                                                        in the connection box are supplied by a PV
                                                                        generator and
                                                                        may still be live after the shutdown of PV
                                                                        inverters and public supply </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="marking_labelling_3" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->marking_labelling_3 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-mln3">The AC main switch has a
                                                                        clear inscription </label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="marking_labelling_4" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->marking_labelling_4 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-mln4">Warnings are present for
                                                                        the double supply at the point of
                                                                        interconnection </label></div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="marking_labelling_5" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->marking_labelling_5 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-mln5">The protection settings of
                                                                        the inverter and details of the installation
                                                                        are provided on site </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="marking_labelling_6" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->marking_labelling_6 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-mln6">The procedures for
                                                                        emergency shutdown are provided on site
                                                                    </label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="marking_labelling_7" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->marking_labelling_7 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-mln7">All signs and markings are
                                                                        suitable and permanently attached. </label>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">General (mechanical) installation of the PV
                                                    system
                                                </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="general_installation_1" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->general_installation_1 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-gnm1">Ventilation is provided
                                                                        behind the PV generator to prevent
                                                                        overheating/reduce the fire risk</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="general_installation_2" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->general_installation_2 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-gnm2">The frame and materials are
                                                                        properly attached and stable; the roof
                                                                        fasteners are weather
                                                                        resistant </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" name="general_installation_3" value="1"
                                                                        class="custom-control-input"
                                                                        @checked($design_install->general_installation_3 ?? false) disabled><label
                                                                        class="custom-control-label"
                                                                        for="pay-card-gnm3">The cable routing is
                                                                        weather-resistant </label></div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Notes
                                                </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap"><textarea name="test_notes"
                                                                        class="form-control form-control-sm" readonly
                                                                        id="fv-message" placeholder="Write your message"
                                                                        >{{ $jobOrder->test_notes }}</textarea></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="Signature_title">
                                                <h2>Test Report for grid-connected photovoltaic systems </h2>
                                                <p>according to EN 62446, Annex C
                                                </p>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Test</h5>
                                                <div class="card h-100 p-0">

                                                    <div class="card-inner tableWrapper_custom p-0">
                                                        <table class="table  table-bordered table-tranx">
                                                            <thead>
                                                                <tr class="tb-tnx-head">
                                                                    <th colspan="2">String</th>
                                                                    <th>1</th>
                                                                    <th>2</th>
                                                                    <th>3</th>
                                                                    <th>4</th>
                                                                    <th>5</th>
                                                                    <th>6</th>
                                                                    <th>7</th>
                                                                    <th>8</th>
                                                                    <th>9</th>
                                                                    <th>10</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="nk-tb-col" rowspan="2">PV generator
                                                                    </td>
                                                                    <td class="nk-tb-col">Module</td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_module1" value="{{ $test_report->pv_generator_module1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_module2" value="{{ $test_report->pv_generator_module2 ?? '' }}" readonly ></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_module3" value="{{ $test_report->pv_generator_module3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_module4" value="{{ $test_report->pv_generator_module4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_module5" value="{{ $test_report->pv_generator_module5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_module6" value="{{ $test_report->pv_generator_module6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_module7" value="{{ $test_report->pv_generator_module7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_module8" value="{{ $test_report->pv_generator_module8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_module9" value="{{ $test_report->pv_generator_module9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_module10" value="{{ $test_report->pv_generator_module10 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Quantity</td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_quantity1" value="{{ $test_report->pv_generator_quantity1 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_quantity2" value="{{ $test_report->pv_generator_quantity2 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_quantity3" value="{{ $test_report->pv_generator_quantity3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_quantity4" value="{{ $test_report->pv_generator_quantity4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_quantity5" value="{{ $test_report->pv_generator_quantity5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_quantity6" value="{{ $test_report->pv_generator_quantity6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_quantity7" value="{{ $test_report->pv_generator_quantity7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_quantity8" value="{{ $test_report->pv_generator_quantity8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_quantity9" value="{{ $test_report->pv_generator_quantity9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="pv_generator_quantity10" value="{{ $test_report->pv_generator_quantity10 ?? '' }}" readonly></td>

                                                                </tr>

                                                                <tr>
                                                                    <td class="nk-tb-col" rowspan="2">PV generator
                                                                        parameters
                                                                    </td>
                                                                    <td class="nk-tb-col">Voc (STC)</td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_voc1" value="{{ $test_report->generator_parameters_voc1 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_voc2" value="{{ $test_report->generator_parameters_voc2 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_voc3" value="{{ $test_report->generator_parameters_voc3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_voc4" value="{{ $test_report->generator_parameters_voc4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_voc5" value="{{ $test_report->generator_parameters_voc5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_voc6" value="{{ $test_report->generator_parameters_voc6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_voc7" value="{{ $test_report->generator_parameters_voc7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_voc8" value="{{ $test_report->generator_parameters_voc8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_voc9" value="{{ $test_report->generator_parameters_voc9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_voc10" value="{{ $test_report->generator_parameters_voc10 ?? '' }}" readonly></td>

                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Isc (STC)</td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_isc1" value="{{ $test_report->generator_parameters_isc1 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_isc2" value="{{ $test_report->generator_parameters_isc2 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_isc3" value="{{ $test_report->generator_parameters_isc3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_isc4" value="{{ $test_report->generator_parameters_isc4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_isc5" value="{{ $test_report->generator_parameters_isc5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_isc6" value="{{ $test_report->generator_parameters_isc6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_isc7" value="{{ $test_report->generator_parameters_isc7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_isc8" value="{{ $test_report->generator_parameters_isc8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_isc9" value="{{ $test_report->generator_parameters_isc9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="generator_parameters_isc10" value="{{ $test_report->generator_parameters_isc10 ?? '' }}" readonly></td>

                                                                </tr>

                                                                <tr>
                                                                    <td class="nk-tb-col" rowspan="4">Protection
                                                                        device (branch
                                                                        fuse)
                                                                    </td>
                                                                    <td class="nk-tb-col">Type </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="protection_device1" value="{{ $test_report->protection_device1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="protection_device2" value="{{ $test_report->protection_device2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="protection_device3" value="{{ $test_report->protection_device3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="protection_device4" value="{{ $test_report->protection_device4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="protection_device5" value="{{ $test_report->protection_device5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="protection_device6" value="{{ $test_report->protection_device6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="protection_device7" value="{{ $test_report->protection_device7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="protection_device8" value="{{ $test_report->protection_device8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="protection_device9" value="{{ $test_report->protection_device9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="protection_device10" value="{{ $test_report->protection_device10 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Rated Value (A) </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_rated_value1" value="{{ $test_report->device_rated_value1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_rated_value2" value="{{ $test_report->device_rated_value2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_rated_value3" value="{{ $test_report->device_rated_value3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_rated_value4" value="{{ $test_report->device_rated_value4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_rated_value5" value="{{ $test_report->device_rated_value5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_rated_value6" value="{{ $test_report->device_rated_value6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_rated_value7" value="{{ $test_report->device_rated_value7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_rated_value8" value="{{ $test_report->device_rated_value8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_rated_value9" value="{{ $test_report->device_rated_value9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_rated_value10" value="{{ $test_report->device_rated_value10 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">DC rating (A) </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_dc_rating1" value="{{ $test_report->device_dc_rating1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_dc_rating2" value="{{ $test_report->device_dc_rating2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_dc_rating3" value="{{ $test_report->device_dc_rating3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_dc_rating4" value="{{ $test_report->device_dc_rating4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_dc_rating5" value="{{ $test_report->device_dc_rating5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_dc_rating6" value="{{ $test_report->device_dc_rating6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_dc_rating7" value="{{ $test_report->device_dc_rating7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_dc_rating8" value="{{ $test_report->device_dc_rating8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_dc_rating9" value="{{ $test_report->device_dc_rating9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_dc_rating10" value="{{ $test_report->device_dc_rating10 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Capacity (kA) </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_capacity1" value="{{ $test_report->device_capacity1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_capacity2" value="{{ $test_report->device_capacity2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="device_capacity3" value="{{ $test_report->device_capacity3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_capacity4" value="{{ $test_report->device_capacity4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_capacity5" value="{{ $test_report->device_capacity5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_capacity6" value="{{ $test_report->device_capacity6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_capacity7" value="{{ $test_report->device_capacity7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_capacity8" value="{{ $test_report->device_capacity8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_capacity9" value="{{ $test_report->device_capacity9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="device_capacity10" value="{{ $test_report->device_capacity10 ?? '' }}" readonly></td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="nk-tb-col" rowspan="3">Wiring
                                                                    </td>
                                                                    <td class="nk-tb-col">Type </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_type1" value="{{ $test_report->wiring_type1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_type2" value="{{ $test_report->wiring_type2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_type3" value="{{ $test_report->wiring_type3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_type4" value="{{ $test_report->wiring_type4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_type5" value="{{ $test_report->wiring_type5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_type6" value="{{ $test_report->wiring_type6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_type7" value="{{ $test_report->wiring_type7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_type8" value="{{ $test_report->wiring_type8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_type9" value="{{ $test_report->wiring_type9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_type10" value="{{ $test_report->wiring_type10 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Phase conductor (mm2)
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_phase1" value="{{ $test_report->wiring_phase1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_phase2" value="{{ $test_report->wiring_phase2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_phase3" value="{{ $test_report->wiring_phase3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_phase4" value="{{ $test_report->wiring_phase4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_phase5" value="{{ $test_report->wiring_phase5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_phase6" value="{{ $test_report->wiring_phase6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_phase7" value="{{ $test_report->wiring_phase7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_phase8" value="{{ $test_report->wiring_phase8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_phase9" value="{{ $test_report->wiring_phase9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_phase10" value="{{ $test_report->wiring_phase10 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Earth conductor (mm2)
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_earth1" value="{{ $test_report->wiring_earth1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_earth2" value="{{ $test_report->wiring_earth2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_earth3" value="{{ $test_report->wiring_earth3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_earth4" value="{{ $test_report->wiring_earth4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_earth5" value="{{ $test_report->wiring_earth5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_earth6" value="{{ $test_report->wiring_earth6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_earth7" value="{{ $test_report->wiring_earth7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_earth8" value="{{ $test_report->wiring_earth8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_earth9" value="{{ $test_report->wiring_earth9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="wiring_earth10" value="{{ $test_report->wiring_earth10 ?? '' }}" readonly></td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="nk-tb-col" rowspan="3">Testing and
                                                                        Measurement of
                                                                        the strand
                                                                    </td>
                                                                    <td class="nk-tb-col">Voc (V) </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_voc1" value="{{ $test_report->tm_voc1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_voc2" value="{{ $test_report->tm_voc2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_voc3" value="{{ $test_report->tm_voc3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_voc4" value="{{ $test_report->tm_voc4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_voc5" value="{{ $test_report->tm_voc5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_voc6" value="{{ $test_report->tm_voc6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_voc7" value="{{ $test_report->tm_voc7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_voc8" value="{{ $test_report->tm_voc8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_voc9" value="{{ $test_report->tm_voc9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_voc10" value="{{ $test_report->tm_voc10 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Isc (A) </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_isc1" value="{{ $test_report->tm_isc1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_isc2" value="{{ $test_report->tm_isc2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_isc3" value="{{ $test_report->tm_isc3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_isc4" value="{{ $test_report->tm_isc4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_isc5" value="{{ $test_report->tm_isc5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_isc6" value="{{ $test_report->tm_isc6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_isc7" value="{{ $test_report->tm_isc7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_isc8" value="{{ $test_report->tm_isc8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_isc9" value="{{ $test_report->tm_isc9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_isc10" value="{{ $test_report->tm_isc10 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Irradiance </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_irradiance1" value="{{ $test_report->tm_irradiance1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_irradiance2" value="{{ $test_report->tm_irradiance2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="tm_irradiance3" value="{{ $test_report->tm_irradiance3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_irradiance4" value="{{ $test_report->tm_irradiance4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_irradiance5" value="{{ $test_report->tm_irradiance5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_irradiance6" value="{{ $test_report->tm_irradiance6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_irradiance7" value="{{ $test_report->tm_irradiance7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_irradiance8" value="{{ $test_report->tm_irradiance8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_irradiance9" value="{{ $test_report->tm_irradiance9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="tm_irradiance10" value="{{ $test_report->tm_irradiance10 ?? '' }}" readonly></td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="nk-tb-col" colspan="2">Polarity
                                                                        monitoring
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="polarity_monitoring1" value="{{ $test_report->polarity_monitoring1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="polarity_monitoring2" value="{{ $test_report->polarity_monitoring2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="polarity_monitoring3" value="{{ $test_report->polarity_monitoring3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="polarity_monitoring4" value="{{ $test_report->polarity_monitoring4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="polarity_monitoring5" value="{{ $test_report->polarity_monitoring5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="polarity_monitoring6" value="{{ $test_report->polarity_monitoring6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="polarity_monitoring7" value="{{ $test_report->polarity_monitoring7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="polarity_monitoring8" value="{{ $test_report->polarity_monitoring8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="polarity_monitoring9" value="{{ $test_report->polarity_monitoring9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="polarity_monitoring10" value="{{ $test_report->polarity_monitoring10 ?? '' }}" readonly></td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="nk-tb-col" rowspan="3">Array
                                                                        Insulation Resistance
                                                                    </td>
                                                                    <td class="nk-tb-col">Test Voltage (V) </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_test_voltage1" value="{{ $test_report->array_test_voltage1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_test_voltage2" value="{{ $test_report->array_test_voltage2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_test_voltage3" value="{{ $test_report->array_test_voltage3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_test_voltage4" value="{{ $test_report->array_test_voltage4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_test_voltage5" value="{{ $test_report->array_test_voltage5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_test_voltage6" value="{{ $test_report->array_test_voltage6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_test_voltage7" value="{{ $test_report->array_test_voltage7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_test_voltage8" value="{{ $test_report->array_test_voltage8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_test_voltage9" value="{{ $test_report->array_test_voltage9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_test_voltage10" value="{{ $test_report->array_test_voltage10 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Pos – Earth (M ) </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_pos1" value="{{ $test_report->array_pos1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_pos2" value="{{ $test_report->array_pos2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_pos3" value="{{ $test_report->array_pos3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_pos4" value="{{ $test_report->array_pos4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_pos5" value="{{ $test_report->array_pos5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_pos6" value="{{ $test_report->array_pos6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_pos7" value="{{ $test_report->array_pos7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_pos8" value="{{ $test_report->array_pos8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_pos9" value="{{ $test_report->array_pos9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_pos10" value="{{ $test_report->array_pos10 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col">Neg – Earth (M ) </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_neg1" value="{{ $test_report->array_neg1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_neg2" value="{{ $test_report->array_neg2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="array_neg3" value="{{ $test_report->array_neg3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_neg4" value="{{ $test_report->array_neg4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_neg5" value="{{ $test_report->array_neg5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_neg6" value="{{ $test_report->array_neg6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_neg7" value="{{ $test_report->array_neg7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_neg8" value="{{ $test_report->array_neg8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_neg9" value="{{ $test_report->array_neg9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="array_neg10" value="{{ $test_report->array_neg10 ?? '' }}" readonly></td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="nk-tb-col" colspan="2">Earth
                                                                        continuity (where fitted)
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="earth_continuty1" value="{{ $test_report->earth_continuty1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="earth_continuty2" value="{{ $test_report->earth_continuty2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="earth_continuty3" value="{{ $test_report->earth_continuty3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="earth_continuty4" value="{{ $test_report->earth_continuty4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="earth_continuty5" value="{{ $test_report->earth_continuty5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="earth_continuty6" value="{{ $test_report->earth_continuty6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="earth_continuty7" value="{{ $test_report->earth_continuty7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="earth_continuty8" value="{{ $test_report->earth_continuty8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="earth_continuty9" value="{{ $test_report->earth_continuty9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="earth_continuty10" value="{{ $test_report->earth_continuty10 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col" colspan="2">Switchgear
                                                                        functioning
                                                                        correctly
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="switchgear_functioning1" value="{{ $test_report->switchgear_functioning1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="switchgear_functioning2" value="{{ $test_report->switchgear_functioning2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="switchgear_functioning3" value="{{ $test_report->switchgear_functioning3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="switchgear_functioning4" value="{{ $test_report->switchgear_functioning4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="switchgear_functioning5" value="{{ $test_report->switchgear_functioning5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="switchgear_functioning6" value="{{ $test_report->switchgear_functioning6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="switchgear_functioning7" value="{{ $test_report->switchgear_functioning7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="switchgear_functioning8" value="{{ $test_report->switchgear_functioning8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="switchgear_functioning9" value="{{ $test_report->switchgear_functioning9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="switchgear_functioning10" value="{{ $test_report->switchgear_functioning10 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col" colspan="2">Inverter
                                                                        Make/Model
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="test_inverter_make1" value="{{ $test_report->test_inverter_make1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="test_inverter_make2" value="{{ $test_report->test_inverter_make2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="test_inverter_make3" value="{{ $test_report->test_inverter_make3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="test_inverter_make4" value="{{ $test_report->test_inverter_make4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="test_inverter_make5" value="{{ $test_report->test_inverter_make5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="test_inverter_make6" value="{{ $test_report->test_inverter_make6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="test_inverter_make7" value="{{ $test_report->test_inverter_make7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="test_inverter_make8" value="{{ $test_report->test_inverter_make8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="test_inverter_make9" value="{{ $test_report->test_inverter_make9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="test_inverter_make10" value="{{ $test_report->test_inverter_make10 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col" colspan="2">Inverter
                                                                        Serial Number
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_serial_no1" value="{{ $test_report->inverter_serial_no1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_serial_no2" value="{{ $test_report->inverter_serial_no2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_serial_no3" value="{{ $test_report->inverter_serial_no3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_serial_no4" value="{{ $test_report->inverter_serial_no4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_serial_no5" value="{{ $test_report->inverter_serial_no5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_serial_no6" value="{{ $test_report->inverter_serial_no6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_serial_no7" value="{{ $test_report->inverter_serial_no7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_serial_no8" value="{{ $test_report->inverter_serial_no8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_serial_no9" value="{{ $test_report->inverter_serial_no9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_serial_no10" value="{{ $test_report->inverter_serial_no10 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col" colspan="2">Inverter
                                                                        functioning correctly
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_functioning1" value="{{ $test_report->inverter_functioning1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_functioning2" value="{{ $test_report->inverter_functioning2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_functioning3" value="{{ $test_report->inverter_functioning3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_functioning4" value="{{ $test_report->inverter_functioning4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_functioning5" value="{{ $test_report->inverter_functioning5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_functioning6" value="{{ $test_report->inverter_functioning6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_functioning7" value="{{ $test_report->inverter_functioning7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_functioning8" value="{{ $test_report->inverter_functioning8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_functioning9" value="{{ $test_report->inverter_functioning9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="inverter_functioning10" value="{{ $test_report->inverter_functioning10 ?? '' }}" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nk-tb-col" colspan="2">Loss of mains
                                                                        test
                                                                    </td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="loss_1" value="{{ $test_report->loss_1 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="loss_2" value="{{ $test_report->loss_2 ?? '' }}" readonly></td>
                                                                    <td class="nk-tb-col"><input type="text"
                                                                            name="loss_3" value="{{ $test_report->loss_3 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="loss_4" value="{{ $test_report->loss_4 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="loss_5" value="{{ $test_report->loss_5 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="loss_6" value="{{ $test_report->loss_6 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="loss_7" value="{{ $test_report->loss_7 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="loss_8" value="{{ $test_report->loss_8 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="loss_9" value="{{ $test_report->loss_9 ?? '' }}" readonly></td>
                                                                            <td class="nk-tb-col"><input type="text"
                                                                            name="loss_10" value="{{ $test_report->loss_10 ?? '' }}" readonly></td>
                                                                </tr>

                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Notes
                                                </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="NotesPointLi">
                                                                    <ul>
                                                                        <li>Where further follow-on pages are required for the same inverter add '1' before each string reference for continuity of numbering.</li>
                                                                        <li>For inverter details add Contd. In all cases fill in Sheet_of_ at bottom right of page.</li>
                                                                        <li>Strings related to each inverter shall be started on a separate page.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="innerfieldsContainer card-bordered mt-3">
                                                <h5 class="title mb-3">Add Notes
                                                </h5>
                                                <div class="card-inner p-0">
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap"><textarea
                                                                        class="form-control form-control-sm"
                                                                         name="notes" readonly
                                                                        placeholder="Write your message"
                                                                        >{{ $jobOrder->notes }}</textarea></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                                        <li class="step-prev"><button class="btn btn-dim btn-primary">Prev</button>
                                        </li>
                                        <li class="step-next"><button class="btn btn-primary">Next</button></li>
                                        {{-- <li class="step-submit"><button class="btn btn-primary" type="submit">Submit</button></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

@endsection

@push('push_script')
<script>
        var defaultContent = $('.defaultFormTabContent');
        var domesticTabs = $('.domesticFormTab');
        var nondomesticTabs = $('.nondomesticTab');
        var domesticContent = $('.domestiocFormTabContent');
        var nondomesticContent = $('.NondomestiocFormTabContent');

        // Hide all tabs and content initially
        defaultContent.show();
        domesticTabs.hide();
        nondomesticTabs.hide();
        domesticContent.hide();
        nondomesticContent.hide();

        // Setup the correct steps based on the client type
        if ({{ $jobOrder->client_type }} == 1) {
            domesticTabs.show();
            setupSteps(defaultContent.add(domesticContent));
        } else if ({{ $jobOrder->client_type }} == 2) {
            nondomesticTabs.show();
            setupSteps(defaultContent.add(nondomesticContent));
        } else {
            // const submitButton = $('.step-submit button');
            // submitButton.hide();
        }

    function setupSteps(content) {
        const steps = content;
        const prevButton = $('.step-prev button');
        const nextButton = $('.step-next button');
        // const submitButton = $('.step-submit button');
        let currentStep = 0;

        function showStep(index) {
            steps.hide();
            steps.eq(index).show();

            prevButton.closest('li').toggle(index > 0);

            // Show the next button only if the current step is not one of the last two steps
            if (index < steps.length - 1) {
                nextButton.closest('li').show();
            } else {
                nextButton.closest('li').hide();
            }

            // submitButton.closest('li').toggle(index === steps.length - 1);
        }

        prevButton.off('click').on('click', function() {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        });

        nextButton.off('click').on('click', function() {
            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        });

        // Initialize the first step
        showStep(currentStep);
    }

</script>
@endpush
