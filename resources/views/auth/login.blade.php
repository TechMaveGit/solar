<!DOCTYPE html>
<html lang="zxx" class="js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashlitee5ca.css') }}?ver=3.2.3">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/themee5ca.css?ver=3.2.3') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>

</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center"><a href="javascript:void(0)" class="logo-link"><img
                                    class="logo-light logo-img logo-img-lg" src="{{ asset('images/MUNSOLAR 1.png') }}"
                                    alt="logo"><img class="logo-dark logo-img logo-img-lg"
                                    src="{{ asset('images/MUNSOLAR 1.png') }}" alt="logo-dark"></a></div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Sign-In</h4>
                                        <div class="nk-block-des">
                                            <p>Access the Munster Solar Admin panel using your email and passcode.</p>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('admin.login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email Address</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="email" name="email" class="form-control form-control-lg" id="default-01"
                                                placeholder="Enter your email address">
                                        </div>
                                        @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group"><label class="form-label" for="password">Passcode</label>
                                        </div>
                                        <div class="form-control-wrap"><a href="#" class="form-icon form-icon-right passcode-switch lg"
                                                data-target="password"><em
                                                    class="passcode-icon icon-show icon ni ni-eye"></em><em
                                                    class="passcode-icon icon-hide icon ni ni-eye-off"></em></a>
                                                    <input type="password" name="password" class="form-control form-control-lg" id="password"
                                                placeholder="Enter your passcode">
                                        </div>
                                        @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group"><button class="btn btn-lg btn-primary btn-block">Sign in</button></div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/bundlee5ca.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('assets/js/scriptse5ca.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('assets/js/demo-settingse5ca.js?ver=3.2.3') }}"></script>


</html>
