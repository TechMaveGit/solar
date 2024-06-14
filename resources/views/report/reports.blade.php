@extends('layouts.main')
@section('app-title', 'Reports')
@section('main-content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal customtitleBTMargin titlemargin_0">Reports</h2>

                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle"><a href="#"
                                class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                    class="icon ni ni-menu-alt-r"></em></a>
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">

                                    <div class="rportFilter">
                                            <div class="form-control-wrap">
                                                <div class="input-daterange date-picker-range input-group"><input
                                                        type="text" class="form-control" placeholder="Work Order Report From ">
                                                    <div class="input-group-addon">TO</div><input type="text"
                                                        class="form-control" placeholder="Work Order Report From To ">
                                                </div>
                                            </div>
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
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Job Order Form</span></th>
                                    <th class="nk-tb-col "><span class="sub-text"> Pictures</span></th>
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
                                    <td class="nk-tb-col tb-col-md"><span class="tb-status text-success">Completed</span>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools"><a class="textaction_right" href="completed-job-order.php">Job Order <em class="icon ni ni-forward-ios"></em></a></td>

                                    <td class="nk-tb-col nk-tb-col-tools">
                                    <div class="actionFlexBtns">
                                                    <a href="view-pictures.php"
                                                        class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View Uploded Pictures"> <em class="icon ni ni-eye"></em></a>
                                                </div>
                                    </td>
                                </tr>
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col tb-col-md"><span>#STF981</span></td>
                                    <td class="nk-tb-col">
                                        <div class="user-card">
                                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                <span>JD</span></div>
                                            <div class="user-info"><span class="tb-lead">John Doe <span
                                                        class="dot dot-success d-md-none ms-1"></span></span><span>john@example.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span>International</span></td>
                                    <td class="nk-tb-col tb-col-md"><span>#STF981</span></td>
                                    <td class="nk-tb-col tb-col-md"><span>Jane Smith</span></td>

                                    <td class="nk-tb-col tb-col-lg">
                                        <ul class="list-status">
                                            <li><em class="icon text-success ni ni-check-circle"></em>
                                                <span>06 May 2024</span></li>
                                        </ul>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span class="tb-status text-success">Completed</span>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools"><a class="textaction_right" href="completed-job-order.php">Job Order <em class="icon ni ni-forward-ios"></em></a></td>

                                    <td class="nk-tb-col nk-tb-col-tools">
                                    <div class="actionFlexBtns">
                                                    <a href="view-pictures.php"
                                                        class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View Uploded Pictures"> <em class="icon ni ni-eye"></em></a>
                                                </div>
                                    </td>
                                </tr>

                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col tb-col-md"><span>#STF982</span></td>
                                    <td class="nk-tb-col">
                                        <div class="user-card">
                                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                <span>MW</span></div>
                                            <div class="user-info"><span class="tb-lead">Mary Williams <span
                                                        class="dot dot-success d-md-none ms-1"></span></span><span>mary@example.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span>Domestic</span></td>
                                    <td class="nk-tb-col tb-col-md"><span>#STF982</span></td>
                                    <td class="nk-tb-col tb-col-md"><span>John Brown</span></td>

                                    <td class="nk-tb-col tb-col-lg">
                                        <ul class="list-status">
                                            <li><em class="icon text-success ni ni-check-circle"></em>
                                                <span>07 May 2024</span></li>
                                        </ul>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span class="tb-status text-success">Completed</span>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools"><a class="textaction_right" href="completed-job-order.php">Job Order <em class="icon ni ni-forward-ios"></em></a></td>

                                    <td class="nk-tb-col nk-tb-col-tools">
                                    <div class="actionFlexBtns">
                                                    <a href="view-pictures.php"
                                                        class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View Uploded Pictures"> <em class="icon ni ni-eye"></em></a>
                                                </div>
                                    </td>
                                </tr>

                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col tb-col-md"><span>#STF983</span></td>
                                    <td class="nk-tb-col">
                                        <div class="user-card">
                                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                <span>TL</span></div>
                                            <div class="user-info"><span class="tb-lead">Tom Lee <span
                                                        class="dot dot-success d-md-none ms-1"></span></span><span>tom@example.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span>International</span></td>
                                    <td class="nk-tb-col tb-col-md"><span>#STF983</span></td>
                                    <td class="nk-tb-col tb-col-md"><span>Kate Green</span></td>

                                    <td class="nk-tb-col tb-col-lg">
                                        <ul class="list-status">
                                            <li><em class="icon text-success ni ni-check-circle"></em>
                                                <span>08 May 2024</span></li>
                                        </ul>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span class="tb-status text-success">Completed</span>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools"><a class="textaction_right" href="completed-job-order.php">Job Order <em class="icon ni ni-forward-ios"></em></a></td>

                                    <td class="nk-tb-col nk-tb-col-tools">
                                    <div class="actionFlexBtns">
                                                    <a href="view-pictures.php"
                                                        class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View Uploded Pictures"> <em class="icon ni ni-eye"></em></a>
                                                </div>
                                    </td>
                                </tr>

                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col tb-col-md"><span>#STF984</span></td>
                                    <td class="nk-tb-col">
                                        <div class="user-card">
                                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                <span>JS</span></div>
                                            <div class="user-info"><span class="tb-lead">Jane Smith <span
                                                        class="dot dot-success d-md-none ms-1"></span></span><span>jane@example.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span>Domestic</span></td>
                                    <td class="nk-tb-col tb-col-md"><span>#STF984</span></td>
                                    <td class="nk-tb-col tb-col-md"><span>Robert Martin</span></td>

                                    <td class="nk-tb-col tb-col-lg">
                                        <ul class="list-status">
                                            <li><em class="icon text-success ni ni-check-circle"></em>
                                                <span>09 May 2024</span></li>
                                        </ul>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span class="tb-status text-success">Completed</span>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools"><a class="textaction_right" href="completed-job-order.php">Job Order <em class="icon ni ni-forward-ios"></em></a></td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                    <div class="actionFlexBtns">
                                                    <a href="view-pictures.php"
                                                        class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View Uploded Pictures"> <em class="icon ni ni-eye"></em></a>
                                                </div>
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
