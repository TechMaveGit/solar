<div class="nk-wrap ">
    <div class="nk-header nk-header-fixed is-light">
        <div class="container-fluid">
            <div class="nk-header-wrap">
                <div class="nk-menu-trigger d-xl-none ms-n1"><a href="#"
                        class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                            class="icon ni ni-menu"></em></a></div>
                <div class="nk-header-brand d-xl-none"><a href="{{ route('admin.dashboard') }}" class="logo-link"><img
                            class="logo-light logo-img" src="{{ asset('images/logo.png')}}"
                            srcset="/demo5/images/logo2x.png 2x" alt="logo"><img class="logo-dark logo-img"
                            src="{{ asset('images/logo-dark.png')}}" srcset="/demo5/images/logo-dark2x.png 2x"
                            alt="logo-dark"></a></div>

                <div class="nk-header-tools">
                    <ul class="nk-quick-nav">

                        <li class="dropdown user-dropdown"><a href="#" class="dropdown-toggle"
                                data-bs-toggle="dropdown">
                                <div class="user-toggle">
                                    <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em></div>
                                    <div class="user-info d-none d-md-block">
                                        <div class="user-status">Admin</div>
                                        <div class="user-name dropdown-indicator">George Harrison </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                    <div class="user-card">
                                        <div class="user-avatar"><span>GH</span></div>
                                        <div class="user-info"><span class="lead-text">George
                                                Harrison</span><span
                                                class="sub-text">info@softnio.com</span></div>
                                    </div>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        {{-- <li><a href="{{ route('admin.profile') }}"><em
                                                    class="icon ni ni-user-alt"></em><span>View
                                                    Profile</span></a></li> --}}

                                    </ul>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="{{ route('admin.logout') }}"><em
                                                    class="icon ni ni-signout"></em><span>Sign
                                                    out</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown notification-dropdown me-n1"><a href="#"
                                class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1">
                                <div class="dropdown-head"><span
                                        class="sub-title nk-dropdown-title">Notifications</span></div>
                                <div class="dropdown-body">
                                    <div class="nk-notification">
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                    class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">Order ID 1001 assigned to
                                                    John</div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                    class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">John Doe started
                                                    installation for Order ID 1001</div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                    class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">50% of the installation
                                                    completed for Order ID 1001.</div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                    class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">Order ID 1001 assigned to
                                                    John</div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                    class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">John Doe started
                                                    installation for Order ID 1001</div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
