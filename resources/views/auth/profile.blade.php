@extends('layouts.main')
@section('app-title', 'Dashboard')
@section('main-content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between g-3">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Customer Details</h3>

                    </div>
                    <div class="nk-block-head-content"><a href="index.php"
                            class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                class="icon ni ni-arrow-left"></em><span>Back</span></a><a href="customer-list.html"
                            class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                class="icon ni ni-arrow-left"></em></a></div>
                </div>
            </div>
           <form action="profile.php" method="post">
           <div class="nk-block">
                <div class="row g-gs">
                    <div class="col-xl-4">
                        <div class="card card-bordered">
                            <div class="card-inner-group">
                                <div class="card-inner">
                                    <div class="user-card user-card-s2">
                                    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"><iconify-icon icon="basil:edit-outline" width="1.2em" height="1.2em"></iconify-icon></label>
        </div>
        <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url('images/userdummy.png');">
            </div>
        </div>
    </div>
                                        <div class="user-info">
                                            <div class="badge bg-light rounded-pill ucap">Admin</div>
                                            <h5>George Harrison</h5><span class="sub-text">Admin@gmail.com</span>
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
                                                Email:</span><span>Admin@gmail.com</span></div>
                                        <div class="col-sm-6 col-md-4 col-xl-12"><span class="sub-text">
                                                Address:</span><span>551
                                                Swanston Street, Melbourne <br /> Victoria 3053
                                                Australia</span></div>

                                        <div class="col-sm-6 col-md-4 col-xl-12"><span class="sub-text">Last
                                                Login:</span><span>15 May, 2024
                                                01:02 PM</span></div>
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
                                        <div class="nk-block-head-content align-self-start d-lg-none"><a href="#"
                                                class="toggle btn btn-icon btn-trigger mt-n1"
                                                data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-block">
                                    <div class="data-head beaicdt_head">
                                        <h6 class="overline-title">Basics</h6>
                                    </div>

                                    <div class="profileDetails">
                                        <div class="row ">
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="form-label" for="full-name">Full
                                                        Name</label><input type="text"
                                                        class="form-control form-control-lg" id="full-name"
                                                        value="George Harrison" placeholder="Enter Full name"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="form-label"
                                                        for="display-name">Display Name</label><input type="text"
                                                        class="form-control form-control-lg" id="display-name"
                                                        value="George Harrison" placeholder="Enter display name"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="form-label"
                                                        for="display-name">Email Address</label><input type="text"
                                                        class="form-control form-control-lg" id="display-name"
                                                        value="Admin@gmail.com" placeholder="Enter display name"></div>
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
                                                            type="password" class="form-control form-control-lg"
                                                            id="password" value="Admin@munstersolar" placeholder="Enter your passcode"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="form-label" for="phone-no">Phone
                                                        Number</label><input type="text"
                                                        class="form-control form-control-lg" id="phone-no" value="+353"
                                                        placeholder="Phone Number"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="form-label"
                                                        for="address-l1">Address</label><input type="text"
                                                        class="form-control form-control-lg" id="address-l1"
                                                        value="2337 Kildeer Drive"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="form-label" for="birth-day">Date
                                                        of Birth</label><input type="text"
                                                        class="form-control form-control-lg date-picker" id="birth-day"
                                                        placeholder="Enter your birth date"></div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="custom-control custom-switch"><input type="checkbox"
                                                            class="custom-control-input" id="latest-sale"><label
                                                            class="custom-control-label" for="latest-sale">Use full name
                                                            to
                                                            display </label></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                        <li><button type="submit" class="btn btn-lg btn-primary">Update
                                                                Profile</button></li>

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
            </div>
           </form>

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
          window.location.href = 'profile.php'; // Change 'other-page.php' to your desired destination
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


<script>
 function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
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
