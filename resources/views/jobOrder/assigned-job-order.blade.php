@extends('layouts.main')
@section('app-title', 'Assigned Job Order')
@section('main-content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal customtitleBTMargin titlemargin_0">Assigned Job Orders</h2>

                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle"><a href="#"
                                class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                    class="icon ni ni-menu-alt-r"></em></a>
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">

                                    <li>
                                        <a href="{{ route('admin.create-job-order') }}"
                                            class=" btn btn-primary d-none d-md-inline-flex pageaddbtn"><em
                                                class="icon ni ni-plus"></em><span>Create New Job Order</span></a>
                                    </li>

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
                                    <th class="nk-tb-col"><span class="sub-text">Staff ID</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Assigned Staff</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Assigned Date</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                    <th class="nk-tb-col nk-tb-col-tools text-end"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @if(count($jobOrders)>0)
                                @foreach ($jobOrders as $jobOrder)
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col tb-col-md"><span>@if(isset($jobOrder->client)){{ $jobOrder->client->id }}@endif</span></td>
                                    <td class="nk-tb-col">
                                        <div class="user-card">
                                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                <span>AB</span></div>
                                            <div class="user-info"><span class="tb-lead">@if(isset($jobOrder->client)){{ $jobOrder->client->name }}@endif<span
                                                        class="dot dot-success d-md-none ms-1"></span></span><span>@if(isset($jobOrder->client)){{ $jobOrder->client->email }}@endif</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span>@if($jobOrder->client_type=='1'){{ 'Domestic' }}@elseif($jobOrder->client_type=='2'){{' Non-Domestic' }}@endif</span></td>
                                    <td class="nk-tb-col tb-col-md"><span>@if(isset($jobOrder->staff)){{ $jobOrder->staff->id }}@endif</span></td>
                                    <td class="nk-tb-col tb-col-md"><span>@if(isset($jobOrder->staff)){{ $jobOrder->staff->name }}@endif </span></td>

                                    <td class="nk-tb-col tb-col-lg">
                                        <ul class="list-status">
                                            <li><em class="icon text-success ni ni-check-circle"></em>
                                                <span>{{ $jobOrder->created_at->format('d F Y') }}</span></li>

                                        </ul>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        @if($jobOrder->status=='0') <span class="tb-status text-danger">In-Complete</span> @elseif($jobOrder->status=='1')<span class="tb-status text-success">Completed</span>@endif
                                    </td>

                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">

                                            <li>
                                                <div class="actionFlexBtns">
                                                    {{-- <a href="{{ route('admin.view-job-order') }}" class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View Job Order"> <em class="icon ni ni-eye"></em></a> --}}
                                                        <a href="#" class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View Job Order"> <em class="icon ni ni-eye"></em></a>

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
