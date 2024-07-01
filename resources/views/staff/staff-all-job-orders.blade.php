@extends('layouts.main')
@section('app-title', 'Staff All Job Order')
@section('main-content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal customtitleBTMargin titlemargin_0">Staff Job Orders</h2>

                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle"><a href="#"
                                class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                    class="icon ni ni-menu-alt-r"></em></a>
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools">

                                <a href="{{ route('admin.all-staff') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-block nk-block-lg">

                <div class="card card-bordered card-preview">
                    <div class="card-inner">
                    <table class="datatable-init-export nowrap table nk-tb-list nk-tb-ulist" data-export-title="Export">
                            <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col"><span class="sub-text">Client ID</span></th>
                                    <th class="nk-tb-col"><span class="sub-text">Client Name</span></th>
                                    <th class="nk-tb-col"><span class="sub-text">Client Type</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Assigned Date</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                    <th class="nk-tb-col nk-tb-col-tools text-end"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($jobOrders)>0)
                                @foreach ($jobOrders as $order)
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col tb-col-md"><span>{{ $order->client_id }}</span></td>
                                    <td class="nk-tb-col">
                                        <div class="user-card">
                                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                <span>AB</span></div>
                                            <div class="user-info"><span class="tb-lead">@if(isset($order->client)){{ $order->client->name }}@endif<span
                                                        class="dot dot-success d-md-none ms-1"></span></span><span>@if(isset($order->client)){{ $order->client->email }}@endif</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span>
                                            @if($order->client_type=='1'){{ 'Domestic' }}
                                            @elseif($order->client_type=='2'){{' Non-Domestic' }}
                                            @endif
                                        </span>
                                    </td>

                                    <td class="nk-tb-col tb-col-lg">
                                        <ul class="list-status">
                                            <li><em class="icon text-success ni ni-check-circle"></em>
                                                <span>{{ \Carbon\Carbon::parse($order->date)->format('d F Y') }}</</span></li>

                                        </ul>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        @if($jobOrder->status=='0') <span class="tb-status text-warning">Assigned</span>
                                        @elseif($jobOrder->status=='1')<span class="tb-status text-primary">Started</span>
                                        @elseif($jobOrder->status=='2')<span class="tb-status text-pink">Progress</span>
                                        @elseif($jobOrder->status=='3')<span class="tb-status text-success">Completed</span>
                                        @endif
                                    </td>

                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li>
                                                <div class="actionFlexBtns">
                                                        <a href="{{ route('admin.view-job-order', base64_encode($order->id)) }}" class="btn btn-secondary btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View Job Orders"> <em class="icon ni ni-eye"></em></a>

                                                </div>
                                            </li>
                                        </ul>
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

@endsection
