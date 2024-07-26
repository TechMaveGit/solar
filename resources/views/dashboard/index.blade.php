@extends('layouts.main')
@section('app-title', 'Dashboard')
@section('main-content')
@push('push_styles')
<style>
    .scrollable-notifications {
        max-height: 380px;
        overflow-y: auto;
    }
    .scrollable-orders {
        max-height: 380px;
        overflow-y: auto;
    }
</style>
@endpush
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
                                                        <li><a href="{{ route('admin.add-staff') }}"><em
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
                                            <div class="nk-wgw sm"><a class="nk-wgw-inner" href="{{ route('admin.assigned-job-order') }}">
                                                    <div class="nk-wgw-name">
                                                        <div class="nk-wgw-icon"><em class="icon ni ni-card-view"></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">Total Orders</h5>
                                                    </div>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount">{{ $totalJobOrders }}</div>
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
                                        <div class="card-tools"><a href="{{ route('admin.assigned-job-order') }}" class="link">View All Orders</a></div>
                                    </div>
                                </div>
                                <div class="card-inner p-0 scrollable-orders">
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
                                            @if(count($pendingOrders)>0)
                                            @foreach ($pendingOrders as $order)
                                                <tr>
                                                    <td class="nk-tb-col"><a href="{{ route('admin.view-job-order',base64_encode($order->id)) }}">{{ $order->id }}</a></td>
                                                    <td class="nk-tb-col">{{ $order->client_id }}</td>
                                                    <td class="nk-tb-col">{{ $order->date }}</td>
                                                    <td class="nk-tb-col">{{ $order->installation_address }}</td>
                                                    <td class="tb-tnx-info">
                                                        <div class="tb-tnx-status">
                                                            <span class="badge badge-dot text-warning">Assigned</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @endif
                                            {{-- <tr>
                                                <td class="nk-tb-col"><a href="orders.php">#OD896</a></td>
                                                <td class="nk-tb-col">#CST21</td>
                                                <td class="nk-tb-col">2024-05-03</td>
                                                <td class="nk-tb-col">456 Eco Way, Green Town</td>
                                                <td class="tb-tnx-info">
                                                    <div class="tb-tnx-status">
                                                        <span class="badge badge-dot text-warning">Pending</span>
                                                    </div>
                                                </td>
                                            </tr> --}}
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

                                <div class="card-inner scrollable-notifications">
                                    <div class="timeline">
                                        @php
                                            $currentMonthYear = '';
                                        @endphp
                                        @if(count($notifications)>0)
                                        @foreach ($notifications as $notify)
                                            @php
                                                $notifyMonthYear = \Carbon\Carbon::parse($notify->created_at)->format('F, Y');
                                            @endphp

                                            @if ($notifyMonthYear != $currentMonthYear)
                                                <h6 class="timeline-head">{{ $notifyMonthYear }}</h6>
                                                @php
                                                    $currentMonthYear = $notifyMonthYear;
                                                @endphp
                                            @endif

                                            <ul class="timeline-list">
                                                <li class="timeline-item">
                                                    <div class="timeline-status @if($notify->status=='0') bg-primary is-outline
                                                        @elseif($notify->status=='1') bg-primary
                                                        @elseif($notify->status=='2') bg-pink
                                                        @elseif($notify->status=='3') bg-success @endif">
                                                    </div>
                                                    <div class="timeline-date">{{ \Carbon\Carbon::parse($notify->created_at)->format('d M') }} <em class="icon ni ni-alarm-alt"></em></div>
                                                    <div class="timeline-data">
                                                        <h6 class="timeline-title">
                                                            @if($notify->status=='0') Order Assigned
                                                            @elseif($notify->status=='1') Installation Started
                                                            @elseif($notify->status=='2') Installation Progress
                                                            @elseif($notify->status=='3') Installation Completed
                                                            @endif
                                                        </h6>
                                                        <div class="timeline-des">
                                                            <p>Order ID {{ $notify->job_order_id }}
                                                                @if($notify->status=='0') assigned to @endif

                                                                @if(isset($notify->staff)){{ $notify->staff->name }}@endif

                                                                @if($notify->status=='0') for installation.
                                                                @elseif($notify->status=='1')start the installation.
                                                                @elseif($notify->status=='2') installation is in Progress.
                                                                @elseif($notify->status=='3') installation completed.
                                                                @endif

                                                            </p>
                                                            <span class="time">{{ \Carbon\Carbon::parse($notify->created_at)->format('h:ia') }}</span>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        @endforeach
                                        @endif
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
