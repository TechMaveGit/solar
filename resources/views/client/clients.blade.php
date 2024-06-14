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
                            <p>You have total 210 Clients.</p>
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
                                    <th class="nk-tb-col"><span class="sub-text">Client ID</span></th>
                                    <th class="nk-tb-col"><span class="sub-text">Client Name</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Address</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Added Date</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Client Type</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Orders Count</span></th>
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

                                    <td class="nk-tb-col tb-col-md"><span>+811 847-4958</span></td>
                                    <td class="nk-tb-col tb-col-md">456 Elm St, Town, Country</td>

                                    <td class="nk-tb-col tb-col-lg">
                                        <ul class="list-status">
                                            <li><em class="icon text-success ni ni-check-circle"></em>
                                                <span>05 Oct 2019</span></li>

                                        </ul>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span class="badge badge-dim bg-success">Domestic</span></td>
                                    <td class="nk-tb-col tb-col-md">2</td>
                                    <td class="nk-tb-col tb-col-md"><span class="tb-status text-success">Active</span>
                                    </td>


                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">


                                            <li>
                                            <div class="actionFlexBtns">
                                                    <a href="client-job-orders.php" class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View Orders"> <em
                                                            class="icon ni ni-eye"></em></a>

                                                            <a href="edit-client.php" class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Edit Client Details"> <em
                                                                      class="icon ni ni-edit"></em></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col tb-col-md"><span>#STF981</span></td>
                                    <td class="nk-tb-col">
                                        <div class="user-card">
                                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                <span>CD</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="tb-lead">Chris Doe <span
                                                        class="dot dot-success d-md-none ms-1"></span></span>
                                                <span>chris@example.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span>+811 847-4959</span></td>
                                    <td class="nk-tb-col tb-col-md">456 Elm St, Town, Country</td>
                                    <td class="nk-tb-col tb-col-lg">
                                        <ul class="list-status">
                                            <li><em class="icon text-success ni ni-check-circle"></em><span>15 Nov
                                                    2020</span></li>
                                        </ul>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span class="badge badge-dim bg-success">Domestic</span></td>
                                    <td class="nk-tb-col tb-col-md">1</td>
                                    <td class="nk-tb-col tb-col-md"><span class="tb-status text-success">Active</span>
                                    </td>

                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">


                                            <li>
                                            <div class="actionFlexBtns">
                                                    <a href="client-job-orders.php" class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View Orders"> <em
                                                            class="icon ni ni-eye"></em></a>

                                                            <a href="edit-client.php" class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Edit Client Details"> <em
                                                                      class="icon ni ni-edit"></em></a>



                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col tb-col-md"><span>#STF982</span></td>
                                    <td class="nk-tb-col">
                                        <div class="user-card">
                                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                <span>EF</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="tb-lead">Emily Fisher <span
                                                        class="dot dot-success d-md-none ms-1"></span></span>
                                                <span>emily@example.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span>+811 847-4960</span></td>
                                    <td class="nk-tb-col tb-col-md">456 Elm St, Town, Country</td>
                                    <td class="nk-tb-col tb-col-lg">
                                        <ul class="list-status">
                                            <li><em class="icon text-success ni ni-check-circle"></em><span>20 Jan
                                                    2021</span></li>
                                        </ul>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span class="badge rounded-pill badge-dim bg-primary">Non-Domestic</span></td>
                                    <td class="nk-tb-col tb-col-md">1</td>
                                    <td class="nk-tb-col tb-col-md"><span class="tb-status text-success">Active</span>
                                    </td>

                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">


                                            <li>
                                            <div class="actionFlexBtns">
                                                    <a href="client-job-orders.php" class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View Orders"> <em
                                                            class="icon ni ni-eye"></em></a>

                                                            <a href="edit-client.php" class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Edit Client Details"> <em
                                                                      class="icon ni ni-edit"></em></a>



                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col tb-col-md"><span>#STF983</span></td>
                                    <td class="nk-tb-col">
                                        <div class="user-card">
                                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                <span>GH</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="tb-lead">George Harrison <span
                                                        class="dot dot-success d-md-none ms-1"></span></span>
                                                <span>george@example.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span>+811 847-4961</span></td>
                                    <td class="nk-tb-col tb-col-md">123 Main St, City, Country</td>
                                    <td class="nk-tb-col tb-col-lg">
                                        <ul class="list-status">
                                            <li><em class="icon text-success ni ni-check-circle"></em><span>03 Mar
                                                    2021</span></li>
                                        </ul>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span class="badge rounded-pill badge-dim bg-primary">Non-Domestic</span></td>
                                    <td class="nk-tb-col tb-col-md">1</td>
                                    <td class="nk-tb-col tb-col-md"><span class="tb-status text-success">Active</span>
                                    </td>

                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">


                                            <li>

                                            <div class="actionFlexBtns">
                                                    <a href="client-job-orders.php" class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View Orders"> <em
                                                            class="icon ni ni-eye"></em></a>

                                                            <a href="edit-client.php" class="btn btn-secondary btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Edit Client Details"> <em
                                                                      class="icon ni ni-edit"></em></a>



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
