@extends('layouts.master')

@section('content')
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('partials.sidenav')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('partials.topbar')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Selamat Datang Di Website SiPeka ASB</h1>
                    <h3>Dashboard</h3>
                    <h5>Ringkasan penggunaan aplikasi penilaian Guru</h5>

                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Guru Disupervisi</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count }}</div>
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mt-1">
                                                Banyak Guru</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Rataan Nilai Supervisi</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mean }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-chart-pie fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Banyaknya Guru Umum Disupervisi</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $general }}</div>
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mt-1">
                                                Banyak Guru</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-address-card fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Banyaknya Guru Agama Disupervisi</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $religion }}</div>
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mt-1">
                                                Banyak Guru</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-address-card fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Nilai Terbaik Guru</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $max }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-chevron-circle-up fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Nilai Terkecil Guru</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $min }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-chevron-circle-down fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
                @include('partials.footer')
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
    @endsection
