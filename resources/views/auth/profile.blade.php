@extends('layouts.main')
@section('app-title', 'Dashboard')
@section('main-content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Admin Details</h3>

                        </div>
                        <div class="nk-block-head-content"><a href="{{ route('admin.dashboard') }}"
                                class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                    class="icon ni ni-arrow-left"></em><span>Back</span></a><a href="#"
                                class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                    class="icon ni ni-arrow-left"></em></a>
                        </div>
                    </div>
                </div>

                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-xl-4">
                                <div class="card card-bordered">
                                    <div class="card-inner-group">
                                        <div class="card-inner">
                                            <div class="user-card user-card-s2">
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <form action="" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" onchange="changeProfile()" name="profile_image" />
                                                            <label for="imageUpload"><iconify-icon icon="basil:edit-outline"
                                                                    width="1.2em" height="1.2em"></iconify-icon></label>
                                                        </form>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview"
                                                            @if (Auth::user()->profile_image !="")
                                                            style="background-image: url('{{ env('STORE_FILE_URL').$user->profile_image }}');">
                                                            @else
                                                            style="background-image: url('{{ asset('images/userdummy.png') }}');">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="user-info">
                                                    <div class="badge bg-light rounded-pill ucap">Admin</div>
                                                    <h5>{{ Auth::user()->name }}</h5><span class="sub-text">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-inner">
                                            <h6 class="overline-title mb-2">User Details</h6>
                                            <div class="row g-3">
                                                <div class="col-sm-6 col-md-4 col-xl-12"><span class="sub-text">User
                                                        ID:</span><span>UD003054</span>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-12"><span class="sub-text">
                                                        Email:</span><span>{{ Auth::user()->email }}</span></div>
                                                <div class="col-sm-6 col-md-4 col-xl-12"><span class="sub-text">
                                                        Address:</span><span>{{ Auth::user()->address }}</span></div>

                                                {{-- <div class="col-sm-6 col-md-4 col-xl-12"><span class="sub-text">Last
                                                        Login:</span><span>15 May, 2024
                                                        01:02 PM</span></div> --}}
                                                <div class="col-sm-6 col-md-4 col-xl-12"><span
                                                        class="sub-text">Status:</span><span
                                                        class="lead-text text-success">Active</span></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="card card-bordered">
                                    <div class="card-inner">

                                        <div class="nk-block-head nk-block-head-lg progfileRight_head">
                                            <div class="nk-block-between">
                                                <div class="nk-block-head-content">
                                                    <h4 class="nk-block-title">Personal Information</h4>
                                                    <div class="nk-block-des">
                                                        <p>Edit Basic info, like your name , Email , password and address.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="nk-block-head-content align-self-start d-lg-none"><a
                                                        href="#" class="toggle btn btn-icon btn-trigger mt-n1"
                                                        data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="data-head beaicdt_head">
                                                <h6 class="overline-title">Basics</h6>
                                            </div>

                                            <div class="profileDetails">
                                                <form action="{{ route('admin.update-profile') }}" enctype="multipart/form-data" method="post">
                                                    @csrf
                                                    <div class="row ">
                                                        <div class="col-md-6">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="full-name">Full
                                                                    Name</label><input type="text" name="name"
                                                                    class="form-control form-control-lg" id="full-name"
                                                                    value="{{$user->name ?? old('name') }}" placeholder="Enter Full name">
                                                            </div>
                                                            @error('name')
                                                            <span class="error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        {{-- <div class="col-md-6">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="display-name">Display Name</label><input type="text"
                                                                    class="form-control form-control-lg" id="display-name"
                                                                    value="George Harrison" placeholder="Enter display name">
                                                            </div>
                                                        </div> --}}
                                                        <div class="col-md-6">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="display-name">Email Address</label><input
                                                                    type="text" name="email" class="form-control form-control-lg"
                                                                    id="display-name" value="{{ $user->email ?? old('email') }}"
                                                                    placeholder="Enter display name">
                                                            </div>
                                                            @error('email')
                                                            <span class="error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <div class="form-label-group"><label class="form-label"
                                                                        for="password">Password</label></div>
                                                                <div class="form-control-wrap"><a href="#"
                                                                        class="form-icon form-icon-right passcode-switch lg"
                                                                        data-target="password"><em
                                                                            class="passcode-icon icon-show icon ni ni-eye"></em><em
                                                                            class="passcode-icon icon-hide icon ni ni-eye-off"></em></a><input
                                                                        type="password" name="password" class="form-control form-control-lg"
                                                                        id="password"
                                                                        placeholder="Enter your passcode">
                                                                </div>
                                                                @error('password')
                                                                <span class="error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="phone-no">Phone Number</label><input type="text"
                                                                    class="form-control form-control-lg" id="phone-no"
                                                                    value="{{ $user->mobile }}" name="mobile" placeholder="Phone Number">
                                                            </div>
                                                            @error('mobile')
                                                            <span class="error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="address-l1">Address</label><input type="text" name="address"
                                                                    class="form-control form-control-lg" id="address-l1"
                                                                    value="{{ $user->address ?? old('address') }}">
                                                            </div>
                                                            @error('address')
                                                            <span class="error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        {{-- <div class="col-md-6">
                                                            <div class="form-group"><label class="form-label"
                                                                    for="birth-day">Date of Birth</label><input type="text"
                                                                    class="form-control form-control-lg date-picker"
                                                                    id="birth-day" placeholder="Enter your birth date">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="custom-control custom-switch"><input
                                                                        type="checkbox" class="custom-control-input"
                                                                        id="latest-sale"><label class="custom-control-label"
                                                                        for="latest-sale">Use full name
                                                                        to
                                                                        display </label></div>
                                                            </div>
                                                        </div> --}}
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                                    <li><button type="submit"
                                                                            class="btn btn-lg btn-primary">Update
                                                                            Profile</button></li>

                                                                </ul>
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

            </div>
        </div>
    </div>

@endsection

<!-- submit trigger buttin page loader and redirection other page json_decode -->
@push('push_script')
<script>
    function changeProfile() {
    var input = document.getElementById('imageUpload');
    var file = input.files[0];

    var formData = new FormData();
    formData.append('profile_image', file);
    $.ajax({
        url: '{{ route('admin.upload-profile') }}',
        type: 'POST',
        headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            // Handle success response
            console.log(response);
            // window.location.reload();
        },
        error: function(error) {
            // Handle error response
            console.error(error);
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

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
</script>

@endpush
