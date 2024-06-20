<div class="nk-content nk-content-fluid">
    <div class="components-preview formMainContainer">
        <form class="nk-stepper stepper-init is-alter nk-stepper-s1" action="" id="stepper-create-project"
            method="post">
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
                                        <li class=" nondomesticTab">
                                            <div class="step-item">
                                                <div class="step-text">
                                                    <div class="lead-text"> Inspection, Test and Commissioning Report </div>

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
                                            <div class="nk-stepper-step defaultFormTabContent" >
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
                                                                        <option value="john_doe">John Doe</option>
                                                                        <option value="jane_smith">Jane Smith</option>
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

                                            </div>

                                            <div class="nk-stepper-step NondomestiocFormTabContent">
                                                <div class="ForTitileMain">
                                                    <h1>Part 1 – NDMG Declaration of Works </h1>
                                                </div>
                                                <div class="innerfieldsContainer card-bordered">
                                                    <h5 class="title mb-3">Installation Details</h5>

                                                </div>

                                            </div>




                                            <div class="nk-stepper-step domestiocFormTabContent2">
                                                <div class="ForTitileMain">
                                                    <h1>Part 2 – Inspection, Test and Commissioning Report</h1>
                                                </div>
                                                <div class="Signature_title">
                                                    <h2>Test Report for grid-connected photovoltaic systems</h2>
                                                    <p>according to EN 62446, Annex A
                                                    </p>
                                                </div>


                                            </div>

                                            <div class="nk-stepper-step NondomestiocFormTabContent2">
                                                <div class="ForTitileMain">
                                                    <h1>Part 2 – Inspection, Test and Commissioning Report </h1>
                                                </div>
                                                <div class="Signature_title">
                                                    <h2>Test Report for grid-connected photovoltaic systems</h2>
                                                    <p>according to EN 62446, Annex A
                                                    </p>
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
<script>
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
</script>

<script>
    function getClient(client_type) {
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
        if (client_type == 1) {
            domesticTabs.show();
            setupSteps(defaultContent.add(domesticContent));
        } else if (client_type == 2) {
            nondomesticTabs.show();
            setupSteps(defaultContent.add(nondomesticContent));
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
        // Set initial tab visibility
        $('.domesticFormTab').hide();
        $('.nondomesticTab').hide();
        $('.domestiocFormTabContent').hide();
        $('.NondomestiocFormTabContent').hide();

        // Initialize the stepper with default tab content
        setupSteps($('.defaultFormTabContent'));
    });
</script>


Schema::create('job_orders', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->enum('client_type', ['1', '2'])->default('1')->comment('1=>Domestic, 2=>NonDomestic');
    $table->unsignedBigInteger('client_id');
    $table->unsignedBigInteger('staff_id');
    $table->date('date')->nullable();
    $table->time('time')->nullable();
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

    $table->text('system_components')->nullable();
    $table->text('pv_inverts')->nullable();

    $table->timestamps();
});
