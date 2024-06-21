@extends('layouts.main')
@section('app-title', 'Edit Staff')
@section('main-content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">

                <div class="components-preview wide-md mx-auto">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><a class="back-to" href="{{ route('admin.all-staff') }}"><em
                                        class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                            <h3 class="nk-block-title page-title">Edit this Staff</h3>

                        </div>
                    </div>
                    <div class="nk-block nk-block-lg">

                        <div class="card card-bordered">
                            <div class="card-inner">
                                <form action="{{ route('admin.update-staff') }}" method="post" class="form-validate">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $staff->id }}">
                                    <input type="hidden" name="dial_code" value="+353">
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <div class="form-group"><label class="form-label" for="fv-full-name">Full
                                                    Name</label>
                                                <div class="form-control-wrap"><input type="text" name="name"
                                                        value="{{$staff->name ?? old('name') }}" class="form-control" id="fv-full-name"
                                                         required></div>
                                                        @error('name')
                                                        <span class="error">{{ $message }}</span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><label class="form-label" for="fv-email">Email
                                                    address</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right"><em class="icon ni ni-mail"></em>
                                                    </div>
                                                    <input type="text" class="form-control" id="fv-email"
                                                        name="email" value="{{$staff->email ?? old('email') }}" required>
                                                        @error('email')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="form-label-group"><label class="form-label"
                                                        for="password">Password</label></div>
                                                <div class="form-control-wrap"><a href="#"
                                                        class="form-icon form-icon-right passcode-switch lg"
                                                        data-target="password"><em
                                                            class="passcode-icon icon-show icon ni ni-eye"></em><em
                                                            class="passcode-icon icon-hide icon ni ni-eye-off"></em></a>
                                                    <input type="password" name="password" class="form-control" id="password"
                                                        placeholder="Enter your passcode">
                                                        @error('password')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"><label class="form-label" for="fv-phone">Phone</label>
                                                <div class="form-control-wrap">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"
                                                                id="fv-phone">+353</span></div><input type="text"
                                                            name="mobile" value="{{$staff->mobile ?? old('mobile') }}" class="form-control" required>
                                                            @error('mobile')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-phone">Sex / Gender</label>
                                                <div class="form-control-wrap">
                                                    <ul class="custom-control-group">
                                                        <li>
                                                            <div class="custom-control custom-radio custom-control-pro no-control">
                                                                <input type="radio" class="custom-control-input" name="gender" value="male"
                                                                    {{ (isset($staff) && $staff->gender == 'male') || old('gender') == 'male' ? 'checked' : '' }} id="sex-male" required>
                                                                <label class="custom-control-label" for="sex-male">Male</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio custom-control-pro no-control">
                                                                <input type="radio" class="custom-control-input" name="gender" value="female"
                                                                    {{ (isset($staff) && $staff->gender == 'female') || old('gender') == 'female' ? 'checked' : '' }} id="sex-female" required>
                                                                <label class="custom-control-label" for="sex-female">Female</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio custom-control-pro no-control">
                                                                <input type="radio" class="custom-control-input" name="gender" value="others"
                                                                    {{ (isset($staff) && $staff->gender == 'others') || old('gender') == 'others' ? 'checked' : '' }} id="sex-other" required>
                                                                <label class="custom-control-label" for="sex-other">Others</label>
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
                                            <div class="form-group"><label class="form-label"
                                                    for="fv-topics">Status</label>
                                                <div class="form-control-wrap "><select class="form-select js-select2"
                                                        id="fv-topics" name="status"
                                                        data-placeholder="Select a option" required>
                                                        <option label="empty" value=""></option>
                                                        <option value="1" {{ (isset($staff) && $staff->status == '1') || old('status') == '1' ? 'selected' : '' }}>Active</option>
                                                        <option value="2" {{ (isset($staff) && $staff->status == '2') || old('status') == '2' ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                    @error('status')
                                                        <span class="error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group"><button type="submit"
                                                    class="btn btn-lg btn-primary">Save
                                                    Informations</button></div>
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

@push('push_script')
    <!-- submit trigger buttin page loader and redirection other page json_decode -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('form');

            forms.forEach(form => {
                form.addEventListener('submit', function(event) {
                    const submitButton = form.querySelector('button[type="submit"]');

                    if (!form.checkValidity()) {
                        // form.classList.add('was-validated');
                        event.preventDefault();
                        event.stopPropagation();
                        return;
                    }

                    if (submitButton) {
                        showLoader(submitButton);

                        setTimeout(() => {
                            hideLoader(submitButton);
                        }, 1000);
                    }
                });
            });

            function showLoader(button) {
                button.dataset.originalText = button.innerHTML;
                button.innerHTML = 'Processing <span class="loaderButton_custom"></span>';
                button.disabled = true;
            }

            function hideLoader(button) {
                button.innerHTML = button.dataset.originalText;
                button.disabled = false;
            }
        });
    </script>
@endpush
<!-- submit trigger buttin page loader and redirection other page json_decode end-->
