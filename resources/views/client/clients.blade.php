@extends('layouts.main')
@section('app-title', 'Clients')
@section('main-content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal customtitleBTMargin titlemargin_0">All Clients</h2>
                        <div class="nk-block-des text-soft">
                            <p>You have total {{ count($clients) }} Clients.</p>
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
                                    <a href="{{ route('admin.add-client') }}" class=" btn btn-primary d-none d-md-inline-flex pageaddbtn"><em class="icon ni ni-plus"></em><span>Add New Client</span></a>
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
                                    <th hidden>Sr. No.</th>
                                    <th class="nk-tb-col"><span class="sub-text">Client ID</span></th>
                                    <th class="nk-tb-col"><span class="sub-text">Client Name</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Address</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Added Date</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Client Type</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Orders Count</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                    <th class="nk-tb-col nk-tb-col-tools text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($clients)>0)
                                @foreach ($clients as $key => $client)
                                <tr class="nk-tb-item">
                                    <td hidden>{{ $key+1 }}</td>
                                    <td class="nk-tb-col tb-col-md"><span>{{ $client->client_id }}</span></td>
                                    <td class="nk-tb-col">
                                        <div class="user-card">
                                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                @php
                                                $formattedName = '';
                                                if(isset($client->name)){
                                                    $words = explode(' ', $client->name);
                                                    if (count($words) == 1) {
                                                        $formattedName = $words[0][0] . substr($words[0], -1);
                                                    } elseif (count($words) >= 2) {
                                                        $formattedName = $words[0][0] . $words[1][0];
                                                    }
                                                }
                                                @endphp
                                                <span class="text-uppercase">{{ $formattedName }}</span></div>
                                            <div class="user-info"><span class="tb-lead">{{ $client->name }}<span
                                                        class="dot dot-success d-md-none ms-1"></span></span><span>{{ $client->email }}</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="nk-tb-col tb-col-md"><span>{{ $client->dial_code }} {{ $client->mobile }}</span></td>
                                    <td class="nk-tb-col tb-col-md">{{ $client->address }}</td>

                                    <td class="nk-tb-col tb-col-lg">
                                        <ul class="list-status">
                                            <li><em class="icon text-success ni ni-check-circle"></em>
                                                <span>{{ $client->created_at->format('d M Y') }}</span></li>

                                        </ul>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        @if($client->client_type == 1)
                                            <span class="badge badge-dim bg-success">Domestic</span>
                                        @else
                                            <span class="badge rounded-pill badge-dim bg-primary">Non-Domestic</span>
                                        @endif
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><a href="{{ route('admin.client-job-orders',base64_encode($client->id)) }}" title="View Order" data-bs-toggle="tooltip" data-bs-placement="top"> {{ $client->job_orders_count }} </a></td>
                                    <td class="nk-tb-col tb-col-md">
                                        @if($client->status == 1)
                                            <a href="javascript:void(0)" data-id="{{ $client->id }}" onclick="changeStatus(this);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Change Status"><span class="tb-status text-success">Active</span></a>
                                        @else
                                            <a href="javascript:void(0)" data-id="{{ $client->id }}" onclick="changeStatus(this);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Change Status"><span class="tb-status text-danger">Inactive</span></a>
                                        @endif
                                    </td>


                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">


                                            <li>
                                            <div class="actionFlexBtns">
                                                    <a href="{{ route('admin.client-job-orders',base64_encode($client->id)) }}" class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View Orders"> <em
                                                            class="icon ni ni-eye"></em></a>

                                                            <a href="{{ route('admin.edit-client',base64_encode($client->id)) }}" class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Edit Client Details"> <em
                                                                      class="icon ni ni-edit"></em></a>
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
@push('push_script')
<script>
    function changeStatus(element) {
        const cliId = $(element).data('id');

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
                    url: "{{ route('admin.client-change-status') }}",
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: cliId
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
