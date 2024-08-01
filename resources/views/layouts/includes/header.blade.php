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
                                        <div class="user-name dropdown-indicator">{{ Auth::user()->name }} </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                    <div class="user-card">
                                        <div class="user-avatar"><span>GH</span></div>
                                        <div class="user-info"><span class="lead-text"> {{ Auth::user()->name }}</span><span
                                                class="sub-text">{{ Auth::user()->email }}</span></div>
                                    </div>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="{{ route('admin.profile') }}"><em
                                                    class="icon ni ni-user-alt"></em><span>View
                                                    Profile</span></a></li>

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
                                        @if(count($notifications)>0)
                                        @foreach ($notifications as $notify)
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                    class="icon icon-circle ni @if($notify->status=='0') bg-warning-dim ni-curve-down-right
                                                        @elseif($notify->status=='1') bg-primary-dim ni-curve-down-right
                                                        @elseif($notify->status=='2') bg-pink-dim ni-curve-down-right
                                                        @elseif($notify->status=='3') bg-success-dim ni-curve-down-left @endif"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">Order ID @if(isset($notify->job)){{ $notify->job->order_id }}@endif
                                                    @if($notify->status=='0') assigned to @endif
                                                    @if(isset($notify->staff)){{ $notify->staff->name }}@endif

                                                    @if($notify->status=='0')
                                                    @elseif($notify->status=='1') start the installation.
                                                    @elseif($notify->status=='2') installation is in Progress.
                                                    @elseif($notify->status=='3') installation completed.
                                                    @endif

                                                </div>
                                                <div class="nk-notification-time">{{ \Carbon\Carbon::parse($notify->created_at)->diffForHumans() }}</div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif

                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
