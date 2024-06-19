@extends('layouts.main')
@section('app-title', 'Dashboard')
@section('main-content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title"> Dashboard</h3>
                            <div class="nk-block-des text-soft">
                                <p>Welcome to Munster Solar Dashboard.</p>
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle"><a href="#"
                                    class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                        class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li><a href="{{ route('admin.assigned-job-order') }}"
                                                class="btn btn-white btn-dim btn-outline-primary"><em
                                                    class="icon ni ni-card-view"></em><span>Assigned Job Orders</span></a>
                                        </li>
                                        <li><a href="{{ route('admin.all-client') }}" class="btn btn-white btn-dim btn-outline-primary"><em
                                                    class="icon ni ni-user-list"></em><span>All Clients</span></a>
                                        </li>
                                        <li class="nk-block-tools-opt">
                                            <div class="drodown"><a href="#"
                                                    class="dropdown-toggle btn btn-icon btn-primary"
                                                    data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="{{ route('admin.add-client') }}"><em
                                                                    class="icon ni ni-user-add-fill"></em><span>Add
                                                                    Client</span></a></li>
                                                        <li><a href="{{ route('admin.create-job-order') }}"><em
                                                                    class="icon ni ni-card-view"></em><span>Create
                                                                    job Order</span></a></li>
                                                        <li><a href="add-staff.php"><em
                                                                    class="icon ni ni-users"></em><span>Add
                                                                    Staff</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block">

                    <div class="row gy-gs">

                        <div class="col-lg-12 col-xl-12">
                            <div class="nk-block">

                                <div class="row g-2">

                                    <div class="col-sm-3">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm"><a class="nk-wgw-inner" href="{{ route('admin.assigned-job-order') }}">
                                                    <div class="nk-wgw-name">
                                                        <div class="nk-wgw-icon"><em class="icon ni ni-file-docs"></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">Assigned Orders</h5>
                                                    </div>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount viewneworder_linked">View Assigned Orders</div>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm"><a class="nk-wgw-inner" href="{{ route('admin.all-client') }}">
                                                    <div class="nk-wgw-name">
                                                        <div class="nk-wgw-icon"><em class="icon ni ni-users"></em></div>
                                                        <h5 class="nk-wgw-title title">Total Clients</h5>
                                                    </div>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount">{{ $totalClients }}</div>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm"><a class="nk-wgw-inner" href="{{ route('admin.all-staff') }}">
                                                    <div class="nk-wgw-name">
                                                        <div class="nk-wgw-icon"><em class="icon ni ni-users"></em></div>
                                                        <h5 class="nk-wgw-title title">Total Staff</h5>
                                                    </div>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount">{{ $totalStaff }}</div>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm"><a class="nk-wgw-inner" href="javascript:void(0)">
                                                    <div class="nk-wgw-name">
                                                        <div class="nk-wgw-icon"><em class="icon ni ni-card-view"></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">Total Orders</h5>
                                                    </div>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount">602</div>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row g-gs OrderdashRow mt-1">
                        <div class="col-8 col-xxl-8">
                            <div class="card card-bordered h-100">
                                <div class="card-inner border-bottom">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Recent Orders</h6>
                                        </div>
                                        <div class="card-tools"><a href="#" class="link">View All Orders</a></div>
                                    </div>
                                </div>
                                <div class="card-inner p-0">
                                    <table class="table table-tranx">
                                        <thead>
                                            <tr class="tb-tnx-head">
                                                <th>Order ID</th>
                                                <th>Customer ID</th>
                                                <th>Order Date</th>
                                                <th>Installation Address</th>
                                                <th>Order Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="nk-tb-col"><a href="orders.php">#OD878</a></td>
                                                <td class="nk-tb-col">#CST54</td>
                                                <td class="nk-tb-col">2024-05-01</td>
                                                <td class="nk-tb-col">123 Solar St, Sunshine City</td>
                                                <td class="tb-tnx-info">
                                                    <div class="tb-tnx-status">
                                                        <span class="badge badge-dot text-warning">Pending</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="nk-tb-col"><a href="orders.php">#OD896</a></td>
                                                <td class="nk-tb-col">#CST21</td>
                                                <td class="nk-tb-col">2024-05-03</td>
                                                <td class="nk-tb-col">456 Eco Way, Green Town</td>
                                                <td class="tb-tnx-info">
                                                    <div class="tb-tnx-status">
                                                        <span class="badge badge-dot text-warning">Pending</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="nk-tb-col"><a href="orders.php">#OD896</a></td>
                                                <td class="nk-tb-col">#CST99</td>
                                                <td class="nk-tb-col">2024-05-05</td>
                                                <td class="nk-tb-col">789 Renewable Rd, Solar City</td>
                                                <td class="tb-tnx-info">
                                                    <div class="tb-tnx-status">
                                                        <span class="badge badge-dot text-warning">Pending</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="nk-tb-col"><a href="orders.php">#OD848</a></td>
                                                <td class="nk-tb-col">#CST39</td>
                                                <td class="nk-tb-col">2024-05-07</td>
                                                <td class="nk-tb-col">321 Green St, Eco City</td>
                                                <td class="tb-tnx-info">
                                                    <div class="tb-tnx-status">
                                                        <span class="badge badge-dot text-warning">Pending</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="nk-tb-col"><a href="orders.php">#OD830</a></td>
                                                <td class="nk-tb-col">#CST34</td>
                                                <td class="nk-tb-col">2024-05-09</td>
                                                <td class="nk-tb-col">654 Solar Blvd, Sunshine City</td>
                                                <td class="tb-tnx-info">
                                                    <div class="tb-tnx-status">
                                                        <span class="badge badge-dot text-warning">Pending</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="nk-tb-col"><a href="orders.php">#OD810</a></td>
                                                <td class="nk-tb-col">#CST90</td>
                                                <td class="nk-tb-col">2024-05-11</td>
                                                <td class="nk-tb-col">987 Renewable Rd, Solar City</td>
                                                <td class="tb-tnx-info">
                                                    <div class="tb-tnx-status">
                                                        <span class="badge badge-dot text-warning">Pending</span>
                                                    </div>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xxl-4">
                            <div class="card card-bordered h-100">
                                <div class="card-inner border-bottom">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Notifications</h6>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-inner">
                                    <div class="timeline">
                                        <h6 class="timeline-head">November, 2019</h6>
                                        <ul class="timeline-list">
                                            <li class="timeline-item">
                                                <div class="timeline-status bg-primary is-outline"></div>
                                                <div class="timeline-date">22 May <em class="icon ni ni-alarm-alt"></em>
                                                </div>
                                                <div class="timeline-data">
                                                    <h6 class="timeline-title">Order Assigned</h6>
                                                    <div class="timeline-des">
                                                        <p>Order ID 1001 assigned to John Doe for installation.</p>
                                                        <span class="time">10:00am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-item">
                                                <div class="timeline-status bg-primary"></div>
                                                <div class="timeline-date">23 May <em class="icon ni ni-alarm-alt"></em>
                                                </div>
                                                <div class="timeline-data">
                                                    <h6 class="timeline-title">Installation Started</h6>
                                                    <div class="timeline-des">
                                                        <p>John Doe started installation for Order ID 1001 at 123 Solar St.
                                                        </p>
                                                        <span class="time">09:00am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-item">
                                                <div class="timeline-status bg-pink"></div>
                                                <div class="timeline-date">23 May <em class="icon ni ni-alarm-alt"></em>
                                                </div>
                                                <div class="timeline-data">
                                                    <h6 class="timeline-title">Installation Progress</h6>
                                                    <div class="timeline-des">
                                                        <p>50% of the installation completed for Order ID 1001.</p>
                                                        <span class="time">01:00pm</span>
                                                    </div>
                                                </div>
                                            </li>


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
@endsection
