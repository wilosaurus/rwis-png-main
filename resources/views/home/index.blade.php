@extends('layouts.vertical')


@section('css')
<link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
<div class="row page-title align-items-center">
    <div class="col-sm-4 col-xl-6">
        <h4 class="mb-1 mt-0">Selamat Datang Pak RW/RT</h4>
    </div>
    {{-- <div class="col-sm-8 col-xl-6">
        <form class="form-inline float-sm-right mt-3 mt-sm-0">
            <div class="form-group mb-sm-0 mr-2">
                <input type="text" class="form-control" id="dash-daterange" style="min-width: 190px;" />
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class='uil uil-file-alt mr-1'></i>Download
                    <i class="icon"><span data-feather="chevron-down"></span></i></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item notify-item">
                        <i data-feather="mail" class="icon-dual icon-xs mr-2"></i>
                        <span>Email</span>
                    </a>
                    <a href="#" class="dropdown-item notify-item">
                        <i data-feather="printer" class="icon-dual icon-xs mr-2"></i>
                        <span>Print</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item notify-item">
                        <i data-feather="file" class="icon-dual icon-xs mr-2"></i>
                        <span>Re-Generate</span>
                    </a>
                </div>
            </div>
        </form>
    </div> --}}
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row bg-light p-3">
                    <div class="col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="media p-3">
                                    <div class="media-header">
                                        <i data-feather="map-pin"></i>
                                        <span class="text-muted text-uppercase font-size-18 font-weight-bold">RW 07</span>
                                        <h6 class="mb-0">Arjosari, Blimbing, Malang</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d246.98050215565425!2d112.65229287903229!3d-7.927615606610516!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6298e56984d75%3A0x91d1ab1ed55717f4!2sBrohym%20advertising!5e0!3m2!1sen!2sid!4v1717138860565!5m2!1sen!2sid"  style="border:0;" allowfullscreen="" width="100%" height="100%" loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-18 font-weight-bold">Trending</span>
                                        <div>
                                            <label class="badge badge-soft-primary">Events</label>
                                            <label class="badge badge-soft-primary">Covid</label>
                                            <label class="badge badge-soft-primary">Market</label>
                                            <label class="badge badge-soft-primary">Lost & Found</label>
                                            <label class="badge badge-soft-primary">Bansos</label>
                                            <label class="badge badge-soft-primary">Culture</label>
                                            <label class="badge badge-soft-primary">Safety</label>
                                            <label class="badge badge-soft-primary">Election</label>
                                        </div>
                                    </div>
                                    {{-- <div class="align-self-center">
                                        <div id="today-revenue-chart" class="apex-charts"></div>
                                        <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i>
                                            10.21%</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <!-- end card -->
    </div>
</div>
<!-- row -->

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-18 font-weight-bold">Jumlah Warga</span>
                        <h2 class="mb-0">200</h2>
                    </div>
                    {{-- <div class="align-self-center">
                        <div id="today-revenue-chart" class="apex-charts"></div>
                        <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i>
                            10.21%</span>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-18 font-weight-bold">Jumlah Rumah</span>
                        <h2 class="mb-0">360</h2>
                    </div>
                    {{-- <div class="align-self-center">
                        <div id="today-revenue-chart" class="apex-charts"></div>
                        <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i>
                            10.21%</span>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-18 font-weight-bold">Jumlah KK</span>
                        <h2 class="mb-0">300</h2>
                    </div>
                    {{-- <div class="align-self-center">
                        <div id="today-revenue-chart" class="apex-charts"></div>
                        <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i>
                            10.21%</span>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-18 font-weight-bold">Jumlah RT</span>
                        <h2 class="mb-0">10</h2>
                    </div>
                    {{-- <div class="align-self-center">
                        <div id="today-revenue-chart" class="apex-charts"></div>
                        <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i>
                            10.21%</span>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- stats + charts -->
<div class="row">
    {{-- <div class="col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <h5 class="card-title header-title border-bottom p-3 mb-0">Overview</h5>
                <!-- stat 1 -->
                <div class="media px-3 py-4 border-bottom">
                    <div class="media-body">
                        <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">121,000</h4>
                        <span class="text-muted">Total Visitors</span>
                    </div>
                    <i data-feather="users" class="align-self-center icon-dual icon-lg"></i>
                </div>

                <!-- stat 2 -->
                <div class="media px-3 py-4 border-bottom">
                    <div class="media-body">
                        <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">21,000</h4>
                        <span class="text-muted">Total Product Views</span>
                    </div>
                    <i data-feather="image" class="align-self-center icon-dual icon-lg"></i>
                </div>

                <!-- stat 3 -->
                <div class="media px-3 py-4">
                    <div class="media-body">
                        <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">$21.5</h4>
                        <span class="text-muted">Revenue Per Visitor</span>
                    </div>
                    <i data-feather="shopping-bag" class="align-self-center icon-dual icon-lg"></i>
                </div>
            </div>
        </div>
    </div> --}}
    
    {{-- Data dari database --}}
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body pb-0">
                {{-- <ul class="nav card-nav float-right">
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="#">Today</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="#">7d</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">15d</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="#">1m</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="#">1y</a>
                    </li>
                </ul> --}}
                <h5 class="card-title mb-0 header-title">Data Bansos</h5>

                <div id="revenue-chart" class="apex-charts mt-3" dir="ltr"></div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body pb-0">
                <h5 class="card-title header-title">Data Balita</h5>
                <div id="targets-chart" class="apex-charts mt-3" dir="ltr"></div>
            </div>
        </div>
    </div>
</div>
<!-- row -->

<!-- products -->
<div class="row">
    {{-- <div class="col-xl-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mt-0 mb-0 header-title">Sales By Category</h5>
                <div id="sales-by-category-chart" class="apex-charts mb-0 mt-4" dir="ltr"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col--> --}}
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                {{-- <a href="" class="btn btn-primary btn-sm float-right">
                    <i class='uil uil-export ml-1'></i> Export
                </a> --}}
                <h5 class="card-title mt-0 mb-0 header-title">Informasi Kartu Keluarga</h5>

                <div class="table-responsive mt-4">
                    <table class="table table-hover table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kepala Keluarga</th>
                                <th scope="col">Jumlah anggota keluarga</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- href="route halaman detail" --}}
                            <tr>
                                <td>#98754</td>
                                <td>ASOS Ridley High</td>
                                <td>Otto B</td>
                                <td>$79.49</td>
                                <td><a href="#" class="badge badge-primary badge-pill py-2 px-3" role="button" style="font-size: 12px;">Detail</a></td>
                            </tr>
                            <tr>
                                <td>#98753</td>
                                <td>Marco Lightweight Shirt</td>
                                <td>Mark P</td>
                                <td>$125.49</td>
                                <td><a href="#" class="badge badge-primary badge-pill py-2 px-3" role="button" style="font-size: 12px;">Detail</a></td>
                            </tr>
                            <tr>
                                <td>#98752</td>
                                <td>Half Sleeve Shirt</td>
                                <td>Dave B</td>
                                <td>$35.49</td>
                                <td><a href="#" class="badge badge-primary badge-pill py-2 px-3" role="button" style="font-size: 12px;">Detail</a></td>
                            </tr>
                            <tr>
                                <td>#98751</td>
                                <td>Lightweight Jacket</td>
                                <td>Shreyu N</td>
                                <td>$49.49</td>
                                <td><a href="#" class="badge badge-primary badge-pill py-2 px-3" role="button" style="font-size: 12px;">Detail</a></td>
                            </tr>
                            <tr>
                                <td>#98750</td>
                                <td>Marco Shoes</td>
                                <td>Rik N</td>
                                <td>$69.49</td>
                                <td><a href="#" class="badge badge-primary badge-pill py-2 px-3" role="button" style="font-size: 12px;">Detail</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row -->

<!-- widgets -->
<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body pt-2">
                <h5 class="mb-4 header-title">Artikel</h5>
                <div class="media border-top pt-3">
                    <img src="assets/images/users/avatar-7.jpg" class="avatar rounded mr-3" alt="shreyu">
                    <div class="media-body">
                        <h6 class="mt-1 mb-0 font-size-15">Kegiatan Bersih-Bersih Kampung Warga RW 1</h6>
                        <h6 class="text-muted font-weight-normal mt-1 mb-3">Ahmad-Karang Taruna</h6>
                    </div>
                    <div class="dropdown align-self-center float-right">
                        <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i
                                    class="uil uil-edit-alt mr-2"></i>Edit</a>
                            <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                    class="uil uil-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
                <div class="media border-top pt-3">
                    <img src="assets/images/users/avatar-7.jpg" class="avatar rounded mr-3" alt="shreyu">
                    <div class="media-body">
                        <h6 class="mt-1 mb-0 font-size-15">Kegiatan Bersih-Bersih Kampung Warga RW 1</h6>
                        <h6 class="text-muted font-weight-normal mt-1 mb-3">Ahmad-Karang Taruna</h6>
                    </div>
                    <div class="dropdown align-self-center float-right">
                        <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i
                                    class="uil uil-edit-alt mr-2"></i>Edit</a>
                            <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                    class="uil uil-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
                <div class="media border-top pt-3">
                    <img src="assets/images/users/avatar-7.jpg" class="avatar rounded mr-3" alt="shreyu">
                    <div class="media-body">
                        <h6 class="mt-1 mb-0 font-size-15">Kegiatan Bersih-Bersih Kampung Warga RW 1</h6>
                        <h6 class="text-muted font-weight-normal mt-1 mb-3">Ahmad-Karang Taruna</h6>
                    </div>
                    <div class="dropdown align-self-center float-right">
                        <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i
                                    class="uil uil-edit-alt mr-2"></i>Edit</a>
                            <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                    class="uil uil-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
                <div class="media border-top pt-3">
                    <img src="assets/images/users/avatar-7.jpg" class="avatar rounded mr-3" alt="shreyu">
                    <div class="media-body">
                        <h6 class="mt-1 mb-0 font-size-15">Kegiatan Bersih-Bersih Kampung Warga RW 1</h6>
                        <h6 class="text-muted font-weight-normal mt-1 mb-3">Ahmad-Karang Taruna</h6>
                    </div>
                    <div class="dropdown align-self-center float-right">
                        <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i
                                    class="uil uil-edit-alt mr-2"></i>Edit</a>
                            <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                    class="uil uil-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>

                <div class="media border-top pt-3">
                    <img src="assets/images/users/avatar-7.jpg" class="avatar rounded mr-3" alt="shreyu">
                    <div class="media-body">
                        <h6 class="mt-1 mb-0 font-size-15">Kegiatan Bersih-Bersih Kampung Warga RW 1</h6>
                        <h6 class="text-muted font-weight-normal mt-1 mb-3">Ahmad-Karang Taruna</h6>
                    </div>
                    <div class="dropdown align-self-center float-right">
                        <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i
                                    class="uil uil-edit-alt mr-2"></i>Edit</a>
                            <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                    class="uil uil-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body pt-2 pb-3">
                <a href="task-list.html" class="btn btn-primary btn-sm mt-2 float-right">
                    View All
                </a>
                <h5 class="mb-4 header-title">Tasks</h5>
                <div class="slimscroll" style="max-height: 390px;">
                    <div class="row">
                        <div class="col">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="task1">
                                <label class="custom-control-label" for="task1">
                                    Menyetujui data penduduk baru
                                </label>
                                <p class="font-size-13 text-muted">Due on 24 Aug, 2024</p>
                            </div> <!-- end checkbox -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection

@section('script')
<!-- optional plugins -->
<script src="{{ URL::asset('assets/libs/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- init js -->
<script src="{{ URL::asset('assets/js/pages/dashboard.init.js') }}"></script>
@endsection