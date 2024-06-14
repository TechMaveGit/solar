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
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col tb-col-md"><span>#STF980</span></td>
                                    <td class="nk-tb-col">
                                        <div class="user-card">
                                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                <span>AB</span></div>
                                            <div class="user-info"><span class="tb-lead">Abu Bin
                                                    Ishtiyak <span
                                                        class="dot dot-success d-md-none ms-1"></span></span><span>info@softnio.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span>Domestic</span></td>
                                    <td class="nk-tb-col tb-col-md"><span>#STF980</span></td>
                                    <td class="nk-tb-col tb-col-md"><span>Chris Doe </span></td>

                                    <td class="nk-tb-col tb-col-lg">
                                        <ul class="list-status">
                                            <li><em class="icon text-success ni ni-check-circle"></em>
                                                <span>05 May 2024</span></li>

                                        </ul>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span class="tb-status text-success">Active</span>
                                    </td>

                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">

                                            <li>
                                                <div class="actionFlexBtns">
                                                    <a href="view-job-order.php" class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View Job Order"> <em
                                                            class="icon ni ni-eye"></em></a>

                                                            <button type="button" class="btn btn-secondary btn-trigger btn-icon eg-swal-av3"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Delete This Job Order"> <em
                                                            class="icon ni ni-na"></em></button>



                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
