@extends('layouts.main')
@section('app-title', 'Add Client')
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
                        <div class="nk-block-head-sub"><a class="back-to" href="{{ route('admin.all-client') }}"><em
                                    class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                        <h3 class="nk-block-title page-title">Add New Client</h3>

                    </div>
                </div>
                <div class="nk-block nk-block-lg">

                    <div class="card card-bordered">
                        <div class="card-inner">
                            <form action="{{ route('admin.add-client') }}" method="post" enctype="multipart/form-data" class="form-validate">
                                <input type="hidden" name="dial_code" value="+353">
                                <input type="hidden" name="action" id="form-action" value="save">
                                @csrf
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-label" for="fv-full-name">Full Name</label>
                                            <div class="form-control-wrap"><input type="text" class="form-control"
                                                    id="fv-full-name" name="name" value="{{ old('name') }}" required></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-label" for="fv-email">Email
                                                address</label>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-right"><em class="icon ni ni-mail"></em>
                                                </div><input type="email" name="email" value="{{ old('email') }}" class="form-control" id="fv-email"
                                                    name="fv-email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-label" for="fv-phone">Phone</label>
                                            <div class="form-control-wrap">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"
                                                            id="fv-phone">+353</span></div><input type="text" name="mobile" value="{{ old('mobile') }}" class="form-control" required>
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
                                                        <div class="custom-control custom-radio custom-control-pro no-control">
                                                            <input type="radio" class="custom-control-input"
                                                                name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }} id="sex-male" required><label
                                                                class="custom-control-label" for="sex-male">Male</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div
                                                            class="custom-control custom-radio custom-control-pro no-control">
                                                            <input type="radio" class="custom-control-input"
                                                                name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }} id="sex-female" required><label
                                                                class="custom-control-label"
                                                                for="sex-female">Female</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div
                                                            class="custom-control custom-radio custom-control-pro no-control">
                                                            <input type="radio" class="custom-control-input"
                                                                name="gender" value="others" {{ old('others') == 'others' ? 'checked' : '' }} id="sex-other" required><label
                                                                class="custom-control-label"
                                                                for="sex-other">Others</label>
                                                        </div>
                                                    </li>
                                                    @error('gender')
                                                        <span class="error">{{ $message }}</span>
                                                    @enderror
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-label" for="fv-topics">Client Type</label>
                                            <div class="form-control-wrap "><select class="form-select js-select2"
                                                    name="client_type" data-placeholder="Select a option"
                                                    required>
                                                    <option label="empty" value=""></option>
                                                    <option value="1" {{ old('client_type') == '1' ? 'selected':''}}>Domestic</option>
                                                    <option value="2" {{ old('client_type') == '2' ? 'selected':''}}>Non-Domestic</option>
                                                </select></div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-label" for="fv-topics">Status</label>
                                            <div class="form-control-wrap "><select class="form-select js-select2"
                                                    id="fv-topics" name="status" data-placeholder="Select a option"
                                                    required>
                                                    <option label="empty" value=""></option>
                                                    <option value="1" {{ old('status') == '1' ? 'selected':''}}>Active</option>
                                                    <option value="2" {{ old('status') == '2' ? 'selected':''}}>Inactive</option>
                                                </select></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group"><label class="form-label"
                                                for="fv-message">Address</label>
                                            <div class="form-control-wrap"><textarea
                                                    class="form-control form-control-sm" id="fv-message"
                                                    name="address" placeholder="Write your Address"
                                                    required="">{{ old('address') }}</textarea></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="form-label"
                                                for="fv-message">Additional Information</label>
                                            <div class="form-control-wrap"><textarea
                                                    class="form-control form-control-sm" id="fv-message"
                                                    name="additional_information" placeholder="Write Information that provided by Client "
                                                    required="">{{ old('additional_information') }}</textarea></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-label"
                                                for="fv-Country">Country</label>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-right"></div><input
                                                    type="text" class="form-control" id="fv-Country"
                                                    name="country" value="{{ old('country') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-City">City</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right"></div><input
                                                                    type="text" name="city" class="form-control" id="fv-City"
                                                                    name="city" value="{{  old('city') }}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="form-label"
                                                                for="fv-Postal">Postal Code</label>
                                                            <div class="form-control-wrap">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div><input
                                                                        type="text" name="postal_code" value="{{ old('postal_code') }}"  class="form-control" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                    <div class="col-md-12">
                                        <div class="multibtns_flex">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                                            </div>

                                            <div class="form-group btSecond">
                                                <a href="{{ route('admin.create-job-order') }}" class="btn btn-lg btn-primary btntoproceed_jobOrder">Save Process for job Order</a>
                                            </div>
                                            {{-- <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary" onclick="setFormAction('save')">Save Informations</button>
                                            </div>
                                            <div class="form-group btSecond">
                                                <button type="submit" class="btn btn-lg btn-primary btntoproceed_jobOrder" onclick="setFormAction('save_and_process')">Save and Process for Job Order</button>
                                            </div> --}}
                                        </div>
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
@push('push_sripts')
<script>
    function setFormAction(action) {
        document.getElementById('form-action').value = action;
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
@endpush
