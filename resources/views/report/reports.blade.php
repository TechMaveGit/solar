@extends('layouts.main')
@section('app-title', 'Reports')
@section('main-content')

@push('push_styles')
<style>
    .form-control-wrap {
    display: flex;
    align-items: center;
    }
    .form-control-wrap button{
        margin-left: 5px;
        margin-right: 5px;
    }

</style>
@endpush
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between d-block">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal customtitleBTMargin">Reports</h2>

                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle"><a href="#"
                                class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                    class="icon ni ni-menu-alt-r"></em></a>
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3 d-block">

                                    <div class="rportFilter d-block">
                                        <form id="date-range-form" action="{{ route('admin.reports') }}" method="GET">
                                            <div class="form-control-wrap">
                                                <div class="col-md-2 me-2">
                                                    <div class="form-group"><label class="form-label text-muted">Select
                                                            Client<div class="requiredField"></div></label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select js-select2"
                                                                data-search="on" name="client_id">
                                                                <option value="">Select an Option</option>
                                                                @foreach ($clients as $client)
                                                                    <option value="{{ $client->id }}" {{ $client_id && $client_id == $client->id ? 'selected' : '' }}>{{ $client->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 me-2">
                                                    <div class="form-group"><label class="form-label text-muted">Select
                                                            Staff<div class="requiredField"></div></label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select js-select2"
                                                                data-search="on" name="staff_id">
                                                                <option value="">Select an Option</option>
                                                                @foreach ($staffs as $staff)
                                                                    <option value="{{ $staff->id }}" {{ $staff_id && $staff_id == $staff->id ? 'selected' : '' }}>{{ $staff->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 me-1">
                                                    <div class="form-group "><label class="form-label text-muted">
                                                        <div></div>Assigned Date</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" name="assigndate" value="{{ $assigndate }}" class="form-control daterange-pickerss" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 me-1">
                                                    <div class="form-group"><label class="form-label text-muted">
                                                        <div></div>Completed Date</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" name="complete_date" value="{{ $complete_date }}" class="form-control daterange-pickerss" id="s_complete_date" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group"><label class="form-label">
                                                    <div></div>&nbsp</label>
                                                    <div class="form-control-wrap">
                                                        <div class="btnContainer">
                                                            <button type="submit" class=" btn btn-primary d-none d-md-inline-flex pageaddbtn">
                                                                <span>Search</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group"><label class="form-label">
                                                    <div></div>&nbsp</label>
                                                    <div class="form-control-wrap">
                                                        <div class="btnContainer">
                                                            <a href="{{ route('admin.reports') }}" class=" btn btn-secondary d-none d-md-inline-flex">
                                                                <span>Reset</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </form>
                                    </div>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-block nk-block-lg">

                <div class="card card-bordered card-preview">
                    <div class="card-inner">
                        <table class="datatable-init-export nowrap table nk-tb-list nk-tb-ulist dataTables_wrapper" data-export-title="Export">
                            <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th hidden>Sr. No.</th>
                                    <th class="nk-tb-col"><span class="sub-text">Order ID</span></th>
                                    <th class="nk-tb-col"><span class="sub-text">Client ID</span></th>
                                    <th class="nk-tb-col"><span class="sub-text">Client Name</span></th>
                                    <th class="nk-tb-col"><span class="sub-text">Client Type</span></th>
                                    {{-- <th class="nk-tb-col"><span class="sub-text">Staff ID</span></th> --}}
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Assigned Staff</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Assigned Date</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Completed Date</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">View Details</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Declaration of work</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Inspection</span></th>
                                    <th class="nk-tb-col "><span class="sub-text"> Pictures</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($jobOrders)>0)
                                @foreach ($jobOrders as $key => $jobOrder)
                                <tr class="nk-tb-item">
                                    <td hidden>{{ $key+1 }}</td>
                                    <td class="nk-tb-col tb-col-md"><span>{{ $jobOrder->order_id }}</span></td>
                                    <td class="nk-tb-col tb-col-md"><span>@if(isset($jobOrder->client)){{ $jobOrder->client->client_id }}@endif</span></td>
                                    <td class="nk-tb-col">
                                        <div class="user-card">
                                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                @php
                                                    $formattedName = '';
                                                    if(isset($jobOrder->client->name)){
                                                        $words = explode(' ', $jobOrder->client->name);
                                                        if (count($words) == 1) {
                                                            $formattedName = $words[0][0] . substr($words[0], -1);
                                                        } elseif (count($words) >= 2) {
                                                            $formattedName = $words[0][0] . $words[1][0];
                                                        }
                                                    }
                                                    @endphp
                                                    <span class="text-uppercase">{{ $formattedName }}</span></div>
                                            <div class="user-info"><span class="tb-lead">@if(isset($jobOrder->client)){{ $jobOrder->client->name }}@endif<span
                                                        class="dot dot-success d-md-none ms-1"></span></span><span>@if(isset($jobOrder->client)){{ $jobOrder->client->email }}@endif</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span>@if($jobOrder->client_type=='1'){{ 'Domestic' }}@elseif($jobOrder->client_type=='2'){{' Non-Domestic' }}@endif</span></td>
                                    {{-- <td class="nk-tb-col tb-col-md"><span>@if(isset($jobOrder->staff)){{ $jobOrder->staff->id }}@endif</span></td> --}}
                                    <td class="nk-tb-col tb-col-md"><span>@if(isset($jobOrder->staff)){{ $jobOrder->staff->name }}@endif </span></td>

                                    <td class="nk-tb-col tb-col-lg">
                                        <ul class="list-status">
                                            <li><em class="icon text-success ni ni-check-circle"></em>
                                                <span>{{ \Carbon\Carbon::parse($jobOrder->date)->format('d F Y') }}</span></li>

                                        </ul>
                                    </td>
                                    <td class="nk-tb-col tb-col-lg">
                                        <ul class="list-status">
                                            @if(isset($jobOrder->completed_date))<li><em class="icon text-success ni ni-check-circle"></em>
                                                <span>{{ \Carbon\Carbon::parse($jobOrder->completed_date)->format('d F Y') }}</</span></li> @endif

                                        </ul>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span class="tb-status text-success">Completed</span>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools"><a class="textaction_right" href="{{ route('admin.view-job-order', base64_encode($jobOrder->id)) }}">Job Order <em class="icon ni ni-forward-ios"></em></a></td>
                                    @php
                                        $declaration_of_works_url = null;
                                        $inspection_report_url = null;

                                        foreach ($jobOrder->base_documents as $pdf) {
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
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <div class="actionFlexBtns">
                                            <a href="{{ route('admin.view-pictures', base64_encode($jobOrder->id)) }}"
                                                class="btn btn-secondary btn-trigger btn-icon"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="View Uploded Pictures"> <em class="icon ni ni-eye"></em></a>
                                        </div>
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
@push('push_script')
<script>


</script>
@endpush
