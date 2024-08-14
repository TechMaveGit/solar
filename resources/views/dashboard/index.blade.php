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

                                <div class="DasboardCardMain">

                                    <div class="dashboardCard">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm"><a class="nk-wgw-inner" href="{{ route('admin.assigned-job-order',['status' => '0']) }}">
                                                    <div class="nk-wgw-name">
                                                        <div class="nk-wgw-icon"><em class="icon ni ni-file-docs"></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">Total Assigned Orders</h5>
                                                    </div>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount viewneworder_linked">{{ $CountpendingOrders }}</div>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="dashboardCard">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm"><a class="nk-wgw-inner" href="{{ route('admin.reports') }}">
                                                    <div class="nk-wgw-name">
                                                        <div class="nk-wgw-icon"><iconify-icon icon="fluent-mdl2:completed" class="icon"></iconify-icon></div>
                                                        <h5 class="nk-wgw-title title">Total Completed orders</h5>
                                                    </div>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount">{{ $CountcompleteOrders }}</div>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="dashboardCard">
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

                                    <div class="dashboardCard">
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
                                    <div class="dashboardCard">
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
                                            <h6 class="title">Recent Assigned Orders</h6>
                                        </div>
                                        <div class="card-tools"><a href="{{ route('admin.assigned-job-order') }}" class="link">View All Orders</a></div>
                                    </div>
                                </div>
                                <div class="card-inner p-0 scrollable-orders">
                                    <table class="table table-tranx">
                                        <thead>
                                            <tr class="tb-tnx-head">
                                                <th>Order ID</th>
                                                <th>Client ID</th>
                                                <th>Assigned Date</th>
                                                <th>Installation Address</th>
                                                <th>Order Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($pendingOrders)>0)
                                            @foreach ($pendingOrders as $order)
                                                <tr>
                                                    <td class="nk-tb-col"><a href="{{ route('admin.view-job-order',base64_encode($order->id)) }}">{{ $order->order_id }}</a></td>
                                                    <td class="nk-tb-col">@if(isset($order->client)){{ $order->client->client_id }}@endif</td>
                                                    <td class="nk-tb-col">{{ $order->date }}</td>
                                                    <td class="nk-tb-col">{{ $order->installation_address }} {{ $order->city }} {{ $order->state }} {{ $order->country }}, {{ $order->postal_code }}</td>
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
                                                <li class="timeline-item pb-2">
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
                                                            <p>Order ID @if(isset($notify->job)){{ $notify->job->order_id }}@endif
                                                                @if($notify->status=='0') assigned to @endif

                                                                @if($notify->status !='3') @if(isset($notify->staff)){{ $notify->staff->name }}@endif @endif

                                                                @if($notify->status=='0') for installation.
                                                                @elseif($notify->status=='1')start the installation.
                                                                @elseif($notify->status=='2') installation is in Progress.
                                                                @elseif($notify->status=='3') installation completed by {{ $notify->staff->name ?? '' }}.
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

                   <div class="row g-gs OrderdashRow mt-1">
                   <div class="col-lg-12">
                        <div class="card card-bordered">
                            <div class="card-inner border-bottom">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Completed Job Order (Domestic)</h6>
                                    </div>

                                </div>
                            </div>
                            <div class="card-inner border-bottom completedJobOrders">
                            <table class="datatable-init-export nowrap table nk-tb-list nk-tb-ulist" data-export-title="Export">
                            <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th hidden>Sr. No.</th>
                                    <th class="nk-tb-col"><span class="sub-text">Order ID</span></th>
                                    <th class="nk-tb-col"><span class="sub-text">Client Name</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Assigned Staff</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Completed Date</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Declaration of works</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Inspection</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($DomesticcompleteOrders)>0)
                                    @foreach ($DomesticcompleteOrders as $key => $order)
                                    <tr class="nk-tb-item">
                                        <td hidden>{{ $key+1 }}</td>
                                        <td class="nk-tb-col tb-col-md"><span><a href="{{ route('admin.view-job-order',base64_encode($order->id)) }}">{{ $order->order_id }}</a></span></td>
                                        <td class="nk-tb-col">
                                            <a href="#">
                                            <div class="user-card">
                                                {{-- <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                    <span>AB</span>
                                                </div> --}}
                                                <div class="user-info"><span class="tb-lead">@if(isset($order->client)){{ $order->client->name }}@endif <span
                                                            class="dot dot-success d-md-none ms-1"></span></span><span>@if(isset($order->client)){{ $order->client->email }}@endif</span>
                                                </div>
                                            </div>
                                            </a>

                                        </td>

                                        <td class="nk-tb-col tb-col-md"><span>@if(isset($order->staff)){{ $order->staff->name }}@endif</span></td>
                                        <td class="nk-tb-col tb-col-lg">
                                            <ul class="list-status">
                                                @if(isset($order->completed_date))<li><em class="icon text-success ni ni-check-circle"></em>
                                                    <span>{{ \Carbon\Carbon::parse($order->completed_date)->format('d F Y') }}</span></li>@endif

                                            </ul>
                                        </td>
                                        @php
                                            $declaration_of_works_url = null;
                                            $inspection_report_url = null;

                                            foreach ($order->base_documents as $pdf) {
                                                if ($pdf->document_type == 'declaration_of_works') {
                                                    $declaration_of_works_url = config('envoirment.IMAGE_API_PATH').$pdf->document;
                                                } elseif ($pdf->document_type == 'inspection_test_and_commissioning_report') {
                                                    $inspection_report_url = config('envoirment.IMAGE_API_PATH').$pdf->document;
                                                }
                                            }
                                        @endphp

                                        <td class="nk-tb-col tb-col-md">
                                            @if($declaration_of_works_url)
                                            <a href="{{ $declaration_of_works_url }}" download target="_blank"><iconify-icon icon="tabler:download"></iconify-icon> Download Report</a>
                                            @endif
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            @if($inspection_report_url)
                                            <a href="{{ $inspection_report_url }}" download target="_blank"><iconify-icon icon="tabler:download"></iconify-icon> Download Report </a>
                                            @endif
                                        </td>

                                    </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="card card-bordered">
                            <div class="card-inner border-bottom">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Completed Job Order (Non-Domestic)</h6>
                                    </div>

                                </div>
                            </div>
                            <div class="card-inner border-bottom completedJobOrders">
                            <table class="datatable-init-export nowrap table nk-tb-list nk-tb-ulist" data-export-title="Export">
                            <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th hidden>Sr. No.</th>
                                    <th class="nk-tb-col"><span class="sub-text">Order ID</span></th>
                                    <th class="nk-tb-col"><span class="sub-text">Client Name</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Assigned Staff</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Completed Date</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">NDMG Declaration of works</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Inspection</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($NONcompleteOrders)>0)
                                    @foreach ($NONcompleteOrders as $key => $order)
                                    <tr class="nk-tb-item">
                                        <td hidden>{{ $key+1 }}</td>
                                        <td class="nk-tb-col tb-col-md"><span><a href="{{ route('admin.view-job-order',base64_encode($order->id)) }}">{{ $order->order_id }}</a></span></td>
                                        <td class="nk-tb-col">
                                            <a href="#">
                                            <div class="user-card">
                                                {{-- <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                    <span>AB</span>
                                                </div> --}}
                                                <div class="user-info"><span class="tb-lead">@if(isset($order->client)){{ $order->client->name }}@endif <span
                                                            class="dot dot-success d-md-none ms-1"></span></span><span>@if(isset($order->client)){{ $order->client->email }}@endif</span>
                                                </div>
                                            </div>
                                            </a>

                                        </td>

                                        <td class="nk-tb-col tb-col-md"><span>@if(isset($order->staff)){{ $order->staff->name }}@endif</span></td>
                                        <td class="nk-tb-col tb-col-lg">
                                            <ul class="list-status">
                                                @if(isset($order->completed_date))<li><em class="icon text-success ni ni-check-circle"></em>
                                                    <span>{{ \Carbon\Carbon::parse($order->completed_date)->format('d F Y') }}</span></li>@endif

                                            </ul>
                                        </td>
                                        @php
                                            $declaration_of_works_url = null;
                                            $inspection_report_url = null;

                                            foreach ($order->base_documents as $pdf) {
                                                if ($pdf->document_type == 'declaration_of_works') {
                                                    $declaration_of_works_url = config('envoirment.IMAGE_API_PATH').$pdf->document;
                                                } elseif ($pdf->document_type == 'inspection_test_and_commissioning_report') {
                                                    $inspection_report_url = config('envoirment.IMAGE_API_PATH').$pdf->document;
                                                }
                                            }
                                        @endphp

                                        <td class="nk-tb-col tb-col-md">
                                            @if($declaration_of_works_url)
                                            <a href="{{ $declaration_of_works_url }}" download target="_blank"><iconify-icon icon="tabler:download"></iconify-icon> Download Report</a>
                                            @endif
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            @if($inspection_report_url)
                                            <a href="{{ $inspection_report_url }}" download target="_blank"><iconify-icon icon="tabler:download"></iconify-icon> Download Report </a>
                                            @endif
                                        </td>

                                    </tr>
                                    @endforeach
                                @endif


                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>


                   </div>

                </div>
            </div>
        </div>
    </div>
@endsection
