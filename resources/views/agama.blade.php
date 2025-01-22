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
                    <h1 class="h3 mb-4 text-gray-800">Hasil Agama</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table
                        below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NUPTK</th>
                                            <th>Tahap</th>
                                            <th>Tanggal Penilaian</th>
                                            <th>Nilai</th>
                                            <th>Mutu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($result as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->NIP }}</td>
                                                <td>{{ $item->stage }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->score }}</td>
                                                <td>{{ $item->grade }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
