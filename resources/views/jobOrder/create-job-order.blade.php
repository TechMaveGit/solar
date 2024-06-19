@extends('layouts.main')
@section('app-title', 'Create Job Order')
@section('main-content')

<div class="nk-content nk-content-fluid">
    <div class="components-preview formMainContainer">
        <form class="nk-stepper stepper-init is-alter nk-stepper-s1" action="" id="stepper-create-project" method="post">
            <div class="nk-content-body">
                <div class="nk-block-head">

                    <div class="nk-block-between-md g-4">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal customtitleBTMargin">Create Job Order</h2>
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
                                                    <div class="lead-text"> Inspection, Test and Commissioning Report NON</div>

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
                                            <div class="nk-stepper-step">
                                                <div class="innerfieldsContainer card-bordered">
                                                    <h5 class="title mb-3">Add Time Schedule for this Job Order</h5>
                                                    <div class="row ">

                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label class="form-label">Client Type</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" name="client_type" onchange="getClient(this.value)" id="client_type">
                                                                        <option value="">Select an Option</option>
                                                                        <option value="1">Domestic</option>
                                                                        <option value="2">Non-Domestic</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label class="form-label">Client
                                                                    Name</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" data-search="on" name="cient_id" id="client_id">
                                                                        <option value="">Select an Option</option>
                                                                        {{-- <option value="john_doe">John Doe</option> --}}

                                                                    </select>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group"><label class="form-label">Select
                                                                    Staff</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2"
                                                                        data-search="on" name="staff_id">
                                                                        <option value="">Select an Option</option>
                                                                        @foreach ($staffs as $staff)
                                                                            <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                                                                        @endforeach
                                                                    </select>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group"><label class="form-label">Select
                                                                    Date</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"><em
                                                                            class="icon ni ni-calendar-alt"></em></div>
                                                                    <input type="text" name="date" class="form-control date-picker" placeholder="mm/dd/yyyy">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="cp1-project-name">Select Time</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="time" value=""
                                                                        class="form-control time__pickers"
                                                                        id="timepicker" placeholder="Select Time"
                                                                        readonly="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-message">Address</label>
                                                                <div class="form-control-wrap"><textarea
                                                                        class="form-control customtextarea form-control-sm"
                                                                        id="fv-message" name="address"
                                                                        placeholder="Write your Address"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    >Country</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="fv-Country"
                                                                        name="country">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-City">City</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="fv-City"
                                                                        name="city">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Postal">Postal Code</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend"></div>
                                                                        <input type="text" name="postal_code" class="form-control">
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
                                                                        class="requiredField">*</div></label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="applicant_name"
                                                                        name="applicant_name">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    >Installation Address</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="installation_address"
                                                                        name="installation_address">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    > Installation Eircode <div
                                                                        class="requiredField">*</div></label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="installation_eircode"
                                                                        name="installation_eircode">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    > Installation MPRN</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="installation_mprn"
                                                                        name="installation_mprn">
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
                                                                        name="solar_pv_system_size">
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
                                                                        name="battery_storage">
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
                                                                        name="annual_estimated_yield">
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
                                                                        name="yield_calculation">
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
                                                                        name="water_diverter">
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
                                                                        id="company_name" name="company_name">
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
                                                                        id="company_number" name="company_number">
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
                                                                        id="property_year_construction" name="property_year_construction">
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
                                                                        id="cost_installation" name="cost_installation">
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
                                                                                id="pv_make" name="pv_make"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="pv_model" name="pv_model"></td>
                                                                        <td class="nk-tb-col">
                                                                            <div class="form-control-wrap">
                                                                                <div class="form-text-hint">
                                                                                    <span class="overline-title">Wp
                                                                                        at STC</span></div>
                                                                                <input type="text" name="pv_rating" class="form-control"
                                                                                    id="pv_rating" placeholder="">
                                                                            </div>
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="pv_quantity" name="pv_quantity">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Mounting System</th>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="ms_make" name="ms_make">
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="ms_model"
                                                                                name="ms_model"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder="N/A "
                                                                                id="ms_rating"
                                                                                name="ms_rating" readonly
                                                                                disabled></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="ms_quantity"
                                                                                name="ms_quantity"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Inverter</th>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="inverter_make" name="inverter_make">
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="inverter_model" name="inverter_model">
                                                                        </td>
                                                                        <td class="nk-tb-col">
                                                                            <div class="form-control-wrap">
                                                                                <div class="form-text-hint">
                                                                                    <span class="overline-title">
                                                                                        kW</span></div>
                                                                                <input type="text" name="inverter_rating" class="form-control"
                                                                                    id="inverter_rating" placeholder="">
                                                                            </div>
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="inverter_quantity"
                                                                                name="inverter_quantity"></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th>Energy Meter </th>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="energy_make"
                                                                                name="energy_make"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="energy_model"
                                                                                name="energy_model"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder="N/A "
                                                                                id="energy_rating"
                                                                                name="energy_rating" readonly
                                                                                disabled></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="energy_quantity"
                                                                                name="energy_quantity"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Battery Energy
                                                                            Storage System </th>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="battery_make"
                                                                                name="battery_make"></td>
                                                                        <td class="nk-tb-col">
                                                                            <div class="g">
                                                                                <div
                                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                                    <input type="checkbox" name="battery_dc"
                                                                                        class="custom-control-input"
                                                                                        ><label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck7">DC
                                                                                        Connected</label></div>
                                                                            </div>
                                                                            <div class="g">
                                                                                <div
                                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                                    <input type="checkbox" class="custom-control-input" name="battery_ac" value="battery_ac" ><label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck7">AC Connected
                                                                                    </label></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="nk-tb-col">
                                                                            <div class="form-control-wrap mb-2">
                                                                                <div class="form-text-hint">
                                                                                    <span class="overline-title">
                                                                                        kW</span></div>
                                                                                <input type="text" name="battery_rating_kw" value="{{ old('battery_rating') }}" class="form-control"
                                                                                    id="battery_rating_kw" placeholder="">
                                                                            </div>
                                                                            <div class="form-control-wrap">
                                                                                <div class="form-text-hint">
                                                                                    <span class="overline-title">
                                                                                        kWh</span></div>
                                                                                <input type="text" name="battery_rating_kwh" class="form-control"
                                                                                    id="battery_rating_kwh" value="{{ old('battery_rating_kwh') }}" placeholder="">
                                                                            </div>
                                                                        </td>
                                                                        <td class="nk-tb-col">
                                                                            <input type="text" class="form-control" placeholder=""

                                                                                name="battery_quantity"></td>
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
                                                                                class="form-control" id=""
                                                                                name="">
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
                                                                            <input type="text"
                                                                                class="form-control date-picker"
                                                                                placeholder="mm/dd/yyyy">
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
                                                                            <input type="text"
                                                                                class="form-control date-picker"
                                                                                placeholder="mm/dd/yyyy">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group"><label
                                                                            class="form-label">Signed: </label>
                                                                        <div class="form-control-wrap">

                                                                            <input type="text" class="form-control"
                                                                                placeholder="">
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
                                                                                class="form-control" id="fv-Country"
                                                                                name="fv-Country">
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
                                                                            <input type="text"
                                                                                class="form-control date-picker"
                                                                                placeholder="mm/dd/yyyy">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <div class="form-group"><label
                                                                            class="form-label">Signed: </label>
                                                                        <div class="form-control-wrap">

                                                                            <input type="text" class="form-control"
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
                                                                        class="requiredField">*</div></label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="fv-Country"
                                                                        name="fv-Country">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    >Installation Address</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="fv-Country"
                                                                        name="fv-Country">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    > Installation Eircode <div
                                                                        class="requiredField">*</div></label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="fv-Country"
                                                                        name="fv-Country">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    > Installation MPRN</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="fv-Country"
                                                                        name="fv-Country">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="filedsNote">
                                                            <p>*This will be the person claiming the SEAI NDMG grant
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
                                                                        placeholder="kWp*" id="fv-Country"
                                                                        name="fv-Country">
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
                                                                        placeholder="kW/kWh" id="fv-Country"
                                                                        name="fv-Country">
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
                                                                        placeholder="kWh**" id="fv-Country"
                                                                        name="fv-Country">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    > Method of Yield Calculation (e.g.,
                                                                    PV Syst) </label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="fv-Country"
                                                                        name="fv-Country">
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
                                                                        placeholder="Y/N?" id="fv-Country"
                                                                        name="fv-Country">
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
                                                                        id="fv-Country" name="fv-Country">
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
                                                                        id="fv-Country" name="fv-Country">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group"><label class="form-label"
                                                                    > Property year of Construction
                                                                     </label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        id="fv-Country" name="fv-Country">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group"><label class="form-label"
                                                                    >Total cost of installation
                                                                    (including parts,
                                                                    labour and VAT)  </label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder="€"
                                                                        id="fv-Country" name="fv-Country">
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
                                                                                id="pv-Make" name="pv-Make"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="pv-Model" name="pv-Model"></td>
                                                                        <td class="nk-tb-col">
                                                                            <div class="form-control-wrap">
                                                                                <div class="form-text-hint">
                                                                                    <span class="overline-title">Wp
                                                                                        at STC</span></div>
                                                                                <input type="text" class="form-control"
                                                                                    id="default-05" placeholder="">
                                                                            </div>
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="pv-Quantity" name="pv-Quantity">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Mounting System</th>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="inverter-Make" name="inverter-Make">
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="inverter-Model"
                                                                                name="inverter-Model"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder="N/A "
                                                                                id="inverter-Rating"
                                                                                name="inverter-Rating" readonly
                                                                                disabled></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="inverter-Quantity"
                                                                                name="inverter-Quantity"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Inverter 1 </th>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="battery-Make" name="battery-Make">
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="battery-Model" name="battery-Model">
                                                                        </td>
                                                                        <td class="nk-tb-col">
                                                                            <div class="form-control-wrap">
                                                                                <div class="form-text-hint">
                                                                                    <span class="overline-title">
                                                                                        kW</span></div>
                                                                                <input type="text" class="form-control"
                                                                                    id="default-05" placeholder="">
                                                                            </div>
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="battery-Quantity"
                                                                                name="battery-Quantity"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Inverter 2 (If App.) </th>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="mounting-Make" name="mounting-Make">
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="mounting-Model"
                                                                                name="mounting-Model"></td>
                                                                        <td class="nk-tb-col">
                                                                            <div class="form-control-wrap">
                                                                                <div class="form-text-hint">
                                                                                    <span class="overline-title">
                                                                                        kW</span></div>
                                                                                <input type="text" class="form-control"
                                                                                    id="default-05" placeholder=""
                                                                                    disabled readonly>
                                                                            </div>
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="mounting-Quantity"
                                                                                name="mounting-Quantity"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Inverter 3 (If App.) </th>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="controller-Make"
                                                                                name="controller-Make"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="controller-Model"
                                                                                name="controller-Model"></td>
                                                                        <td class="nk-tb-col">
                                                                            <div class="form-control-wrap">
                                                                                <div class="form-text-hint">
                                                                                    <span class="overline-title">
                                                                                        kW</span></div>
                                                                                <input type="text" class="form-control"
                                                                                    id="default-05" placeholder="">
                                                                            </div>
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="controller-Quantity"
                                                                                name="controller-Quantity"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Energy Meter </th>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="controller-Make"
                                                                                name="controller-Make"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="controller-Model"
                                                                                name="controller-Model"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder="N/A "
                                                                                id="inverter-Rating"
                                                                                name="inverter-Rating" readonly
                                                                                disabled></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="controller-Quantity"
                                                                                name="controller-Quantity"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Battery Energy
                                                                            Storage System </th>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="controller-Make"
                                                                                name="controller-Make"></td>
                                                                        <td class="nk-tb-col">
                                                                            <div class="g">
                                                                                <div
                                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck7"><label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck7">DC
                                                                                        Connected</label></div>
                                                                            </div>
                                                                            <div class="g">
                                                                                <div
                                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck8"><label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck8">AC Connected
                                                                                    </label></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="nk-tb-col">
                                                                            <div class="form-control-wrap mb-2">
                                                                                <div class="form-text-hint">
                                                                                    <span class="overline-title">
                                                                                        kW</span></div>
                                                                                <input type="text" class="form-control"
                                                                                    id="default-05" placeholder="">
                                                                            </div>
                                                                            <div class="form-control-wrap">
                                                                                <div class="form-text-hint">
                                                                                    <span class="overline-title">
                                                                                        kWh</span></div>
                                                                                <input type="text" class="form-control"
                                                                                    id="default-05" placeholder="">
                                                                            </div>
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                class="form-control" placeholder=""
                                                                                id="controller-Quantity"
                                                                                name="controller-Quantity"></td>
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
                                                                            >Name (CAPITALS) </label>
                                                                        <div class="form-control-wrap">
                                                                            <div class="form-icon form-icon-right">
                                                                            </div><input type="text"
                                                                                class="form-control" id="fv-Country"
                                                                                name="fv-Country">
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
                                                                            <input type="text"
                                                                                class="form-control date-picker"
                                                                                placeholder="mm/dd/yyyy">
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
                                                                            <input type="text"
                                                                                class="form-control date-picker"
                                                                                placeholder="mm/dd/yyyy">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group"><label
                                                                            class="form-label">Signed: </label>
                                                                        <div class="form-control-wrap">

                                                                            <input type="text" class="form-control"
                                                                                placeholder="">
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
                                                                                class="form-control" id="fv-Country"
                                                                                name="fv-Country">
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
                                                                            <input type="text"
                                                                                class="form-control date-picker"
                                                                                placeholder="mm/dd/yyyy">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <div class="form-group"><label
                                                                            class="form-label">Signed: </label>
                                                                        <div class="form-control-wrap">

                                                                            <input type="text" class="form-control"
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
                                                                        type="text" class="form-control" id="fv-Country"
                                                                        name="fv-Country">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    >Customer Address</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="fv-Country"
                                                                        name="fv-Country">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    > Customer Eircode <div
                                                                        class="requiredField">*</div></label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="fv-Country"
                                                                        name="fv-Country">
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
                                                                        type="text" class="form-control" id="fv-Country"
                                                                        name="fv-Country">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    >Company Representative</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="fv-Country"
                                                                        name="fv-Country">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    > Company Address:<div
                                                                        class="requiredField">*</div></label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="fv-Country"
                                                                        name="fv-Country">
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
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    >Module Type</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    >PV Module Performance</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    >Number of Modules</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
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
                                                                        placeholder="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    >MPP Current (A)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
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
                                                                        placeholder="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    >MPP Voltage (V)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
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
                                                                    >Manufacturer</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    >Inverter Type</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    >AC Nominal Power (W)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    >Inverter Quantity</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    >AC Maximum Power (W)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    >DC Maximum Power (W)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group"><label class="form-label">Test
                                                                    Date</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"><em
                                                                            class="icon ni ni-calendar-alt"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control date-picker"
                                                                        placeholder="mm/dd/yyyy">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group"><label class="form-label">Next Test
                                                                    Date</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"><em
                                                                            class="icon ni ni-calendar-alt"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control date-picker"
                                                                        placeholder="mm/dd/yyyy">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group"><label class="form-label">Test
                                                                    Reason</label>
                                                                <div class="form-control-wrap">
                                                                    <ul class="custom-control-group g-3 align-center">
                                                                        <li>
                                                                            <div
                                                                                class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="pay-card-1"><label
                                                                                    class="custom-control-label"
                                                                                    for="pay-card-1">Initial
                                                                                    inspection</label></div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="pay-bitcoin-1"><label
                                                                                    class="custom-control-label"
                                                                                    for="pay-bitcoin-1">Retesting</label>
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
                                                                        name="">
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
                                                                        name="">
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
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group"><label class="form-label"
                                                                    >Loop</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group"><label class="form-label"
                                                                    >RCDx1</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group"><label class="form-label"
                                                                    >RCDx5</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
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
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="pay-card-1"><label
                                                                                    class="custom-control-label"
                                                                                    for="pay-card-1">No defects were
                                                                                    found</label></div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="pay-bitcoin-1"><label
                                                                                    class="custom-control-label"
                                                                                    for="pay-bitcoin-1">Defects were
                                                                                    found </label></div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="pay-card-1"><label
                                                                                    class="custom-control-label"
                                                                                    for="pay-card-1">The Photovoltaic
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

                                                                        <input type="text" class="form-control"
                                                                            placeholder="">
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
                                                                        <input type="text"
                                                                            class="form-control date-picker"
                                                                            placeholder="mm/dd/yyyy">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><label class="form-label"
                                                                        for="fv-message">Remarks</label>
                                                                    <div class="form-control-wrap"><textarea
                                                                            class="form-control form-control-sm"
                                                                            id="fv-message" name="fv-message"
                                                                            placeholder="Write your message"
                                                                            ></textarea></div>
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
                                                                        <input type="text"
                                                                            class="form-control date-picker"
                                                                            placeholder="mm/dd/yyyy">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label
                                                                        class="form-label">Signature/Tester </label>
                                                                    <div class="form-control-wrap">

                                                                        <input type="text" class="form-control"
                                                                            placeholder="">
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">The DC system was generally
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">The DC components were
                                                                            measured for DC operation </label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">The DC components are rated
                                                                            for the maximum current and maximum
                                                                            voltage</label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">Protection is provided by
                                                                            application of class II or equivalent
                                                                            insulation on the DC side</label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">PV strand cables, PV
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">The wiring system has been
                                                                            selected and constructed so that it can
                                                                            withstand expected external
                                                                            influences such as wind, ice temperature and
                                                                            solar radiation (DIN VDE 0100-712.
                                                                            522.8.3)</label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">AC and DC cables are
                                                                            physically separated</label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">Systems without strand
                                                                            overcurrent protective device: Strand cables
                                                                            are designed so that they
                                                                            can take up the highest combined leakage
                                                                            current of parallel lines (DIN VDE 0100-712
                                                                            para.433)</label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">Systems with strand
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">There are DC load break
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">The inverter has a simple
                                                                            separation between the AC side and the DC
                                                                            side </label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">Alternatively: A residual
                                                                            device is installed in the circuit and
                                                                            corresponds to a type B RCD (DIN
                                                                            VDE 0100-712 para. 413.1.1.1.2) </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">The area of wiring loops
                                                                            was kept as small as possible (DIN VDE
                                                                            0100-712, para. 54) </label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">If equipotential bonding
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">Devices for disconnecting
                                                                            the inverter are provided on the AC side
                                                                        </label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">Separating and switching
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">Protection settings of the
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">All circuits, protection
                                                                            devices, switches and terminals have
                                                                            appropriate markings</label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">All DC connection boxes (PV
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">The AC main switch has a
                                                                            clear inscription </label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">Warnings are present for
                                                                            the double supply at the point of
                                                                            interconnection </label></div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">The protection settings of
                                                                            the inverter and details of the installation
                                                                            are provided on site </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">The procedures for
                                                                            emergency shutdown are provided on site
                                                                        </label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">All signs and markings are
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">Ventilation is provided
                                                                            behind the PV generator to prevent
                                                                            overheating/reduce the fire risk</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">The frame and materials are
                                                                            properly attached and stable; the roof
                                                                            fasteners are weather
                                                                            resistant </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-1">The cable routing is
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
                                                                    <div class="form-control-wrap"><textarea
                                                                            class="form-control form-control-sm"
                                                                            id="fv-message" name="fv-message"
                                                                            placeholder="Write your message"
                                                                            ></textarea></div>
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
                                                                                name="module1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module3"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Quantity</td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity3"></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="nk-tb-col" rowspan="2">PV generator
                                                                            parameters
                                                                        </td>
                                                                        <td class="nk-tb-col">Voc (STC)</td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module3"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Isc (STC)</td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity3"></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="nk-tb-col" rowspan="4">Protection
                                                                            device (branch
                                                                            fuse)
                                                                        </td>
                                                                        <td class="nk-tb-col">Type </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module3"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Rated Value (A) </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity3"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">DC rating (A) </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity3"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Capacity (kA) </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity3"></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="nk-tb-col" rowspan="3">Wiring
                                                                        </td>
                                                                        <td class="nk-tb-col">Type </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module3"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Phase conductor (mm2)
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity3"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Earth conductor (mm2)
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity3"></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="nk-tb-col" rowspan="3">Testing and
                                                                            Measurement of
                                                                            the strand
                                                                        </td>
                                                                        <td class="nk-tb-col">Voc (V) </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module3"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Isc (A) </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity3"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Irradiance </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity3"></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="nk-tb-col" colspan="2">Polarity
                                                                            monitoring
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module3"></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="nk-tb-col" rowspan="3">Array
                                                                            Insulation Resistance
                                                                        </td>
                                                                        <td class="nk-tb-col">Test Voltage (V) </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module3"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Pos – Earth (M ) </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity3"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Neg – Earth (M ) </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantity3"></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="nk-tb-col" colspan="2">Earth
                                                                            continuity (where fitted)
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module3"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col" colspan="2">Switchgear
                                                                            functioning
                                                                            correctly
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module3"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col" colspan="2">Inverter
                                                                            Make/Model
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module3"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col" colspan="2">Inverter
                                                                            Serial Number
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module3"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col" colspan="2">Inverter
                                                                            functioning correctly
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module3"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col" colspan="2">Loss of mains
                                                                            test
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module3"></td>
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
                                                                            id="fv-message" name="fv-message"
                                                                            placeholder="Write your message"
                                                                            ></textarea></div>
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
                                                                    for="fv-Country2">Customer Name<div
                                                                        class="requiredField">*</div></label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="fv-Country2"
                                                                        name="fv-Country2">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country3">Customer Address</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="fv-Country3"
                                                                        name="fv-Country3">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country4"> Customer Eircode <div
                                                                        class="requiredField">*</div></label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="fv-Country4"
                                                                        name="fv-Country4">
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
                                                                    for="fv-Country5">Company Name<div
                                                                        class="requiredField">*</div></label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="fv-Country5"
                                                                        name="fv-Country5">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country6">Company Representative</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="fv-Country6"
                                                                        name="fv-Country6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country7"> Company Address:<div
                                                                        class="requiredField">*</div></label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" id="fv-Country7"
                                                                        name="fv-Country7">
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
                                                                    for="fv-Country8">Manufacturer</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country9">Module Type</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country10">PV Module Performance</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country11">Number of Modules</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country12">Short Circuit Current Isc
                                                                    (A)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country13">MPP Current (A)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country14">Open Circuit Voltage Voc
                                                                    (V)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country15">MPP Voltage (V)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
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
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country16">Inverter Type</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country17">AC Nominal Power (W)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country18">Inverter Quantity</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country19">AC Maximum Power (W)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country20">DC Maximum Power (W)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
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
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country16">Inverter Type</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country17">AC Nominal Power (W)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country18">Inverter Quantity</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country19">AC Maximum Power (W)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country20">DC Maximum Power (W)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
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
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country16">Inverter Type</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country17">AC Nominal Power (W)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country18">Inverter Quantity</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country19">AC Maximum Power (W)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="fv-Country20">DC Maximum Power (W)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="number" class="form-control"
                                                                        placeholder="" name="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group"><label class="form-label">Test
                                                                    Date</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"><em class="icon ni ni-calendar-alt"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control date-picker" placeholder="mm/dd/yyyy">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group"><label class="form-label">Next Test
                                                                    Date</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"><em class="icon ni ni-calendar-alt"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control date-picker" placeholder="mm/dd/yyyy">
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
                                                                                <input type="checkbox" class="custom-control-input" id="pay-card-1"><label class="custom-control-label" for="pay-card-1">Initial
                                                                                    inspection</label></div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="pay-bitcoin-1"><label class="custom-control-label" for="pay-bitcoin-1">Retesting</label>
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
                                                                        name="">
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
                                                                        name="">
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
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group"><label class="form-label"
                                                                    >Loop</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group"><label class="form-label"
                                                                    >RCDx1</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group"><label class="form-label"
                                                                    >RCDx5</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right"></div><input
                                                                        type="text" class="form-control" placeholder=""
                                                                        name="">
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
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="pay-card-no"><label
                                                                                    class="custom-control-label"
                                                                                    for="pay-card-no">No defects were
                                                                                    found</label></div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="pay-bitcoin-de"><label
                                                                                    class="custom-control-label"
                                                                                    for="pay-bitcoin-de">Defects were
                                                                                    found </label></div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="pay-card-ph"><label
                                                                                    class="custom-control-label"
                                                                                    for="pay-card-ph">The Photovoltaic
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

                                                                        <input type="text" class="form-control"
                                                                            placeholder="">
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
                                                                        <input type="text"
                                                                            class="form-control date-picker"
                                                                            placeholder="mm/dd/yyyy">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><label class="form-label"
                                                                        for="fv-message">Remarks</label>
                                                                    <div class="form-control-wrap"><textarea
                                                                            class="form-control form-control-sm"
                                                                            id="fv-message" name="fv-message"
                                                                            placeholder="Write your message"
                                                                            ></textarea></div>
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
                                                                        <input type="text"
                                                                            class="form-control date-picker"
                                                                            placeholder="mm/dd/yyyy">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label
                                                                        class="form-label">Signature/Tester </label>
                                                                    <div class="form-control-wrap">

                                                                        <input type="text" class="form-control"
                                                                            placeholder="">
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-n1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-n1">The DC system was generally
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-n2"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-n2">The DC components were
                                                                            measured for DC operation </label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-n3"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-n3">The DC components are rated
                                                                            for the maximum current and maximum
                                                                            voltage</label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-n4"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-n4">Protection is provided by
                                                                            application of class II or equivalent
                                                                            insulation on the DC side</label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-n5"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-n5">PV strand cables, PV
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-n6"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-n6">The wiring system has been
                                                                            selected and constructed so that it can
                                                                            withstand expected external
                                                                            influences such as wind, ice temperature and
                                                                            solar radiation (DIN VDE 0100-712.
                                                                            522.8.3)</label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-n7"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-n7">AC and DC cables are
                                                                            physically separated</label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-n8"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-n8">Systems without strand
                                                                            overcurrent protective device: Strand cables
                                                                            are designed so that they
                                                                            can take up the highest combined leakage
                                                                            current of parallel lines (DIN VDE 0100-712
                                                                            para.433)</label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-n9"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-n9">Systems with strand
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-n10"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-n10">There are DC load break
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-m1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-m1">The inverter has a simple
                                                                            separation between the AC side and the DC
                                                                            side </label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-m2"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-m2">Alternatively: A residual
                                                                            device is installed in the circuit and
                                                                            corresponds to a type B RCD (DIN
                                                                            VDE 0100-712 para. 413.1.1.1.2) </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-m3"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-m3">The area of wiring loops
                                                                            was kept as small as possible (DIN VDE
                                                                            0100-712, para. 54) </label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-m4"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-m4">If equipotential bonding
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-m5"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-m5">Devices for disconnecting
                                                                            the inverter are provided on the AC side
                                                                        </label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-m6"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-m6">Separating and switching
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-m7"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-m7">Protection settings of the
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-t1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-t1">All circuits, protection
                                                                            devices, switches and terminals have
                                                                            appropriate markings</label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-t2"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-t2">All DC connection boxes (PV
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-t3"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-t3">The AC main switch has a
                                                                            clear inscription </label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-t4"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-t4">Warnings are present for
                                                                            the double supply at the point of
                                                                            interconnection </label></div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-t5"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-t5">The protection settings of
                                                                            the inverter and details of the installation
                                                                            are provided on site </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-t6"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-t6">The procedures for
                                                                            emergency shutdown are provided on site
                                                                        </label></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-t7"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-t7">All signs and markings are
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
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-g1"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-g1">Ventilation is provided
                                                                            behind the PV generator to prevent
                                                                            overheating/reduce the fire risk</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-g2"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-g2">The frame and materials are
                                                                            properly attached and stable; the roof
                                                                            fasteners are weather
                                                                            resistant </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="pay-card-g3"><label
                                                                            class="custom-control-label"
                                                                            for="pay-card-g3">The cable routing is
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
                                                                    <div class="form-control-wrap"><textarea
                                                                            class="form-control form-control-sm"
                                                                            id="fv-message" name="fv-message"
                                                                            placeholder="Write your message"
                                                                            ></textarea></div>
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
                                                                                name=""></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Quantity</td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>

                                                                    </tr>

                                                                    <tr>
                                                                        <td class="nk-tb-col" rowspan="2">PV generator
                                                                            parameters
                                                                        </td>
                                                                        <td class="nk-tb-col">Voc (STC)</td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Isc (STC)</td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>

                                                                    </tr>

                                                                    <tr>
                                                                        <td class="nk-tb-col" rowspan="4">Protection
                                                                            device (branch
                                                                            fuse)
                                                                        </td>
                                                                        <td class="nk-tb-col">Type </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Rated Value (A) </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">DC rating (A) </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Capacity (kA) </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="nk-tb-col" rowspan="3">Wiring
                                                                        </td>
                                                                        <td class="nk-tb-col">Type </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulek1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulek2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulek3"></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Phase conductor (mm2)
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantityl1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantityl2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantityl3"></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Earth conductor (mm2)
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantityp1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantityp2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantityp3"></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="nk-tb-col" rowspan="3">Testing and
                                                                            Measurement of
                                                                            the strand
                                                                        </td>
                                                                        <td class="nk-tb-col">Voc (V) </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="moduley1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="moduley2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="moduley3"></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Isc (A) </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantitym1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantitym2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantitym3"></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Irradiance </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantityn1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantityn2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantityn3"></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="nk-tb-col" colspan="2">Polarity
                                                                            monitoring
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="moduleb1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="moduleb2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="moduleb3"></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="nk-tb-col" rowspan="3">Array
                                                                            Insulation Resistance
                                                                        </td>
                                                                        <td class="nk-tb-col">Test Voltage (V) </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulev1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulev2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulev3"></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Pos – Earth (M ) </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantityc1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantityc2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantityc3"></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col">Neg – Earth (M ) </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantityx1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantityx2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="quantityx3"></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="nk-tb-col" colspan="2">Earth
                                                                            continuity (where fitted)
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulez1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulez2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="module3z"></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col" colspan="2">Switchgear
                                                                            functioning
                                                                            correctly
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulea1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulea2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulea3"></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col" colspan="2">Inverter
                                                                            Make/Model
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulef1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulef2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulef3"></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col" colspan="2">Inverter
                                                                            Serial Number
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulee1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulee2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulee3"></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col" colspan="2">Inverter
                                                                            functioning correctly
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulew1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulew2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="modulew3"></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nk-tb-col" colspan="2">Loss of mains
                                                                            test
                                                                        </td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="moduleq1"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="moduleq2"></td>
                                                                        <td class="nk-tb-col"><input type="text"
                                                                                name="moduleq3"></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
                                                                                <td class="nk-tb-col"><input type="text"
                                                                                name=""></td>
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
                                                                             name="fv-messagegd"
                                                                            placeholder="Write your message"
                                                                            ></textarea></div>
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
                                            <li class="step-submit"><button class="btn btn-primary"
                                                    type="submit">Submit</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </form>

    </div>
</div>

@endsection

@push('push_script')
<script>
    function getClient(client_type){
        var domesticTab = $('.domesticFormTab');
        var nodomesticTabs = $('.nondomesticTab');

        if (client_type == 1) {
            domesticTab.show();
            nodomesticTabs.hide();
        } else if (client_type == 2) {
            domesticTab.hide();
            nodomesticTabs.show();
        }
        // $(".loader").show();

        $.ajax({
            url: "{{ route('admin.get_client') }}",
            type: 'POST',
            data: {
                client_type: client_type,
                "_token": "{{ csrf_token() }}",
             },
            success: function(data) {
                // $(".loader").hide();
                // $('.error_clear').html('');

                if (data.clientsOptions) {
                    console.log(data.clientsOptions);
                    $("#client_id").html(data.clientsOptions);
                } else {
                    console.log('No client options found.');
                    $("#client_id").html('<option value="">Select an Option</option>');
                }
            },
            error: function(xhr, status, error) {
                $(".loader").hide();
                console.error('An error occurred:', error);
            }
        });
    }
</script>

{{-- <script>
    function getClient(client_type) {
        var domesticTabs = $('.domesticFormTab');
        var nondomesticTabs = $('.nondomesticTab');
        var domesticContent = $('.domestiocFormTabContent');
        var nondomesticContent = $('.NondomestiocFormTabContent');

        // Hide all tabs initially
        domesticTabs.hide();
        nondomesticTabs.hide();
        domesticContent.hide();
        nondomesticContent.hide();

        // Setup the correct steps based on the client type
        if (client_type == 1) {
            domesticTabs.show();
            domesticContent.show();
            setupSteps(domesticContent);
        } else if (client_type == 2) {
            nondomesticTabs.show();
            nondomesticContent.show();
            setupSteps(nondomesticContent);
        }
    }

    function setupSteps(content) {
        const steps = content;
        const prevButton = $('.step-prev button');
        const nextButton = $('.step-next button');
        const submitButton = $('.step-submit button');
        let currentStep = 0;

        function showStep(index) {
            steps.hide();
            steps.eq(index).show();

            prevButton.closest('li').toggle(index > 0);
            nextButton.closest('li').toggle(index < steps.length - 1);
            submitButton.closest('li').toggle(index === steps.length - 1);
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

        $('form').off('submit').on('submit', function(event) {
            const submitButton = $(this).find('button[type="submit"]');
            if (submitButton) {
                event.preventDefault();
                showLoader(submitButton);
                setTimeout(() => {
                    hideLoader(submitButton);
                    window.location.href = 'job-orders.php';
                }, 2000);
            }
        });

        function showLoader(button) {
            button.data('original-text', button.html());
            button.html('Processing <span class="loaderButton_custom"></span>');
            button.prop('disabled', true);
        }

        function hideLoader(button) {
            button.html(button.data('original-text'));
            button.prop('disabled', false);
        }

        // Initialize the first step
        showStep(currentStep);
    }

    $(document).ready(function() {
        // Initialize with default content hidden
        $('.defaultFormTabContent').show();
        setupSteps($('.defaultFormTabContent'));

        // Set initial tab visibility
        $('.domesticFormTab').hide();
        $('.nondomesticTab').hide();
        $('.domestiocFormTabContent').hide();
        $('.NondomestiocFormTabContent').hide();
    });
</script> --}}



{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.addEventListener('submit', function(event) {
                const submitButton = form.querySelector('button[type="submit"]');
                if (submitButton) {
                    event.preventDefault(); // Prevent default form submission
                    showLoader(submitButton);
                    // Simulate form submission for demonstration purposes
                    setTimeout(() => {
                        hideLoader(submitButton);
                        // Redirect to another page after processing
                        window.location.href =
                        'job-orders.php'; // Change 'other-page.php' to your desired destination
                    }, 2000); // Simulate a delay for form submission
                }
            });
        });

        function showLoader(button) {
            button.dataset.originalText = button.innerHTML; // Save original button text
            button.innerHTML = 'Processing <span class="loaderButton_custom"></span>';
            button.disabled = true; // Disable the button to prevent multiple clicks
        }

        function hideLoader(button) {
            button.innerHTML = button.dataset.originalText; // Restore original button text
            button.disabled = false; // Enable the button
        }
    });
</script> --}}
<!-- submit trigger buttin page loader and redirection other page json_decode end-->
@endpush
