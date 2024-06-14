@extends('layouts.main')
@section('app-title', 'Edit Client')
@section('main-content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <!-- <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Add New Staff</h3>
                        <div class="nk-block-des text-soft">
                            <p>You have total 104 Staff.</p>
                        </div>
                    </div>
                    <div class="nk-block-head-content">
                    <a href="all-staff.php" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                    </div>
                </div>
            </div> -->

            <div class="components-preview wide-md mx-auto">
                <div class="nk-block-head  wide-sm">
                    <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><a class="back-to" href="clients.php"><em
                                    class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                        <h3 class="nk-block-title page-title">Edit This Details</h3>

                    </div>
                </div>
                <div class="nk-block nk-block-lg">

                    <div class="card card-bordered">
                        <div class="card-inner">
                            <form action="#" class="form-validate">
                                <div class="row g-gs">
                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-label" for="fv-full-name">Full
                                                Name</label>
                                            <div class="form-control-wrap"><input type="text" class="form-control"
                                                    id="fv-full-name" name="fv-full-name" value="Emily Fisher" required></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-label" for="fv-email">Email
                                                address</label>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-right"><em class="icon ni ni-mail"></em>
                                                </div><input type="text" class="form-control" id="fv-email"
                                                    name="fv-email" value="emily@example.com" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-label" for="fv-phone">Phone</label>
                                            <div class="form-control-wrap">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"
                                                            id="fv-phone">+353</span></div><input type="text"
                                                        class="form-control" value="+811 847-4960" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-label" for="fv-phone">Sex /
                                                Gender</label>
                                            <div class="form-control-wrap">
                                                <ul class="custom-control-group">
                                                    <li>
                                                        <div
                                                            class="custom-control custom-radio custom-control-pro no-control">
                                                            <input type="radio" class="custom-control-input"
                                                                name="fv-sex" id="sex-male" checked required><label
                                                                class="custom-control-label" for="sex-male">Male</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div
                                                            class="custom-control custom-radio custom-control-pro no-control">
                                                            <input type="radio" class="custom-control-input"
                                                                name="fv-sex" id="sex-female" required><label
                                                                class="custom-control-label"
                                                                for="sex-female">Female</label></div>
                                                    </li>
                                                    <li>
                                                        <div
                                                            class="custom-control custom-radio custom-control-pro no-control">
                                                            <input type="radio" class="custom-control-input"
                                                                name="fv-sex" id="sex-other" required><label
                                                                class="custom-control-label"
                                                                for="sex-other">Others</label></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-label" for="fv-topics">Client Type</label>
                                            <div class="form-control-wrap "><select class="form-select js-select2"
                                                    name="fv-topics" data-placeholder="Select a option"
                                                    required>
                                                    <option label="empty" value=""></option>
                                                    <option value="fv-gq" selected>Domestic</option>
                                                    <option value="fv-tq">Non-Domestic</option>
                                                </select></div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-label" for="fv-topics">Status</label>
                                            <div class="form-control-wrap "><select class="form-select js-select2"
                                                    id="fv-topics" name="fv-topics" data-placeholder="Select a option"
                                                    required>
                                                    <option label="empty" value=""></option>
                                                    <option value="fv-gq" selected>Active</option>
                                                    <option value="fv-tq">Inactive</option>
                                                </select></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group"><label class="form-label"
                                                for="fv-message">Address</label>
                                            <div class="form-control-wrap"><textarea
                                                    class="form-control form-control-sm" id="fv-message"
                                                    name="fv-message" placeholder="Write your Address"
                                                    required="">456 Elm St, Town, Country</textarea></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="form-label"
                                                for="fv-message">Additional Information</label>
                                            <div class="form-control-wrap"><textarea
                                                    class="form-control form-control-sm" id="fv-message"
                                                    name="fv-message" placeholder="Write Information that provided by Client "
                                                    required="">Estimated Roof Area: This indicates the approximate size of the roof space available for solar panel installation, helping determine the capacity and layout of the solar system.</textarea></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Country">Country</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="fv-Country"
                                                                    name="fv-Country" value="ireland" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-City">City</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" class="form-control" id="fv-City"
                                                                    name="fv-City" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Postal">Postal Code</label>
                                                            <div class="form-control-wrap">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div><input
                                                                        type="text" class="form-control" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                    <div class="col-md-12">
                                        <!-- <div class="form-group"><button type="submit"
                                                class="btn btn-lg btn-primary">Save
                                                Informations</button></div> -->

                                                <div class="form-group"><button type="submit"
                                                class="btn btn-lg btn-primary">Save Changes</button></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection
<!-- submit trigger buttin page loader and redirection other page json_decode -->
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
                        'clients.php'; // Change 'other-page.php' to your desired destination
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
<!-- submit trigger buttin page loader and redirection other page json_decode end-->
