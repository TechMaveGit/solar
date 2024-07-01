@extends('layouts.main')
@section('app-title', 'All Staff')
@section('main-content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal customtitleBTMargin titlemargin_0">All Staff List</h2>
                        <div class="nk-block-des text-soft">
                            <p>You have total {{ count($staffs) }} Staff.</p>
                        </div>
                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle"><a href="#"
                                class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                    class="icon ni ni-menu-alt-r"></em></a>
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">
                                    <!-- <li><a href="#" class="btn btn-white btn-outline-light"><em
                                                class="icon ni ni-download-cloud"></em><span>Export</span></a>
                                    </li> -->
                                    <li>
                                        <a href="{{ route('admin.add-staff') }}"
                                            class=" btn btn-primary d-none d-md-inline-flex pageaddbtn"><em
                                                class="icon ni ni-plus"></em><span>Add New Staff</span></a>
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
                                    <th class="nk-tb-col"><span class="sub-text">Staff ID</span></th>
                                    <th class="nk-tb-col"><span class="sub-text">Staff Name</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Added Date</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Assigned Orders</span></th>
                                    <th class="nk-tb-col nk-tb-col-tools text-end"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($staffs)
                                    @foreach ($staffs as $staff)
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col tb-col-md"><span>{{ $staff->id }}</span></td>
                                        <td class="nk-tb-col">
                                            <div class="user-card">
                                                <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                    @php
                                                    $formattedName = '';
                                                    if(isset($staff->name)){
                                                        $words = explode(' ', $staff->name);
                                                        if (count($words) == 1) {
                                                            $formattedName = $words[0][0] . substr($words[0], -1);
                                                        } elseif (count($words) >= 2) {
                                                            $formattedName = $words[0][0] . $words[1][0];
                                                        }
                                                    }
                                                    @endphp
                                                    <span class="text-uppercase">{{ $formattedName }}</span></div>
                                                <div class="user-info"><span class="tb-lead">{{ $staff->name }} <span
                                                            class="dot dot-success d-md-none ms-1"></span></span><span>{{ $staff->email }}</span>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="nk-tb-col tb-col-md"><span>{{ $staff->dial_code }} {{ $staff->mobile }}</span></td>

                                        <td class="nk-tb-col tb-col-lg">
                                            <ul class="list-status">
                                                <li><em class="icon text-success ni ni-check-circle"></em>
                                                    <span>{{ $staff->created_at->format('d M Y') }}</span></li>

                                            </ul>
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            @if($staff->status == 1)
                                                <a href="javascript:void(0)" data-id="{{ $staff->id }}" onclick="changeStatus(this);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Change Status"><span class="tb-status text-success">Active</span></a>
                                            @else
                                                <a href="javascript:void(0)" data-id="{{ $staff->id }}" onclick="changeStatus(this);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Change Status"><span class="tb-status text-danger">Inactive</span></a>
                                            @endif
                                        </td>
                                        <td class="nk-tb-col tb-col-md">{{ $staff->job_orders_count }}</td>

                                        <td class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">

                                                <li>
                                                <div class="actionFlexBtns">
                                                        <a href="{{ route('admin.staff-job-orders',base64_encode($staff->id)) }}" class="btn btn-secondary btn-trigger btn-icon"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View Orders"> <em class="icon ni ni-eye"></em></a>

                                                        <a href="{{ route('admin.edit-staff',base64_encode($staff->id)) }}" class="btn btn-secondary btn-trigger btn-icon"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Edit Staff Details"> <em
                                                                class="icon ni ni-edit"></em></a>

                                                        {{-- <button type="button" class="btn btn-secondary btn-trigger btn-icon eg-swal-av3"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Delete This Staff"
                                                            data-bs-original-title="Delete this staff"> <em
                                                                class="icon ni ni-na"></em></button> --}}
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach

                                @endisset

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
    function changeStatus(element) {
        const staffId = $(element).data('id');

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, change it!",
            cancelButtonText: "Cancel"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ route('admin.staff-change-status') }}",
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: staffId
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire("Updated!", "Your status has been changed.", "success").then(() => {
                                location.reload();
                            });
                        } else {
                            Swal.fire("Error!", "There was an issue changing the status.", "error");
                        }
                    },
                    error: function() {
                        Swal.fire("Error!", "There was an issue changing the status.", "error");
                    }
                });
            }
        });
    }
</script>

@endpush
