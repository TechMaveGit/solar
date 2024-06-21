<div class="nk-sidebar nk-sidebar-fixed " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand"><a href="{{ route('admin.dashboard') }}" class="logo-link nk-sidebar-logo"><img
                    class="logo-light logo-img" src="{{ asset('images/MUNSOLAR 1.png')}}" alt="logo"><img
                    class="logo-dark logo-img" src="{{ asset('images/MUNSOLAR 1.png')}}" alt="logo-dark"></a></div>
        <div class="nk-menu-trigger me-n2"><a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none"
                data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a></div>
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-body" data-simplebar>
            <div class="nk-sidebar-content">
                <div class="nk-sidebar-menu">
                    <ul class="nk-menu">

                        <li class="nk-menu-heading">
                            <h6 class="overline-title text-primary-alt">Dashboards</h6>
                        </li>
                        <li class="nk-menu-item"><a href="{{ route('admin.dashboard') }}" class="nk-menu-link"><span
                                    class="nk-menu-icon"><em class="icon ni ni-home"></em></span><span
                                    class="nk-menu-text">Home --</span></a></li>

                        <li class="nk-menu-item has-sub"><a href="#"
                                class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em
                                        class="icon ni ni-users"></em></span><span
                                    class="nk-menu-text">Staff
                                    Manage</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('admin.all-staff') }}" class="nk-menu-link"><span
                                            class="nk-menu-text">All Staff</span></a></li>
                                <li class="nk-menu-item"><a href="{{ route('admin.add-staff') }}" class="nk-menu-link"><span
                                            class="nk-menu-text">Add Staff </span></a></li>

                            </ul>
                        </li>
                        <li class="nk-menu-item has-sub"><a href="#"
                                class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em
                                        class="icon ni ni-user-list"></em></span><span
                                    class="nk-menu-text">Clients</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('admin.all-client') }}" class="nk-menu-link"><span
                                            class="nk-menu-text">All Clients
                                        </span></a></li>
                                <li class="nk-menu-item"><a href="{{ route('admin.add-client') }}" class="nk-menu-link"><span
                                            class="nk-menu-text">Add New Client</span></a></li>
                            </ul>
                        </li>

                        <li class="nk-menu-item has-sub"><a href="#"
                                class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em
                                        class="icon ni ni-card-view"></em></span><span
                                    class="nk-menu-text">Job Orders</span></a>
                            <ul class="nk-menu-sub">

                                <li class="nk-menu-item"><a href="{{ route('admin.assigned-job-order') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Assigned Job
                                            Order</span></a></li>

                                <li class="nk-menu-item"><a href="{{ route('admin.create-job-order') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Create Job
                                            Order</span></a>
                                </li>

                            </ul>
                        </li>

                        <li class="nk-menu-item"><a href="{{ route('admin.reports') }}" class="nk-menu-link"><span
                                    class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span><span
                                    class="nk-menu-text">Reports</span></a></li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
