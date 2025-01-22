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
                    <h1 class="h3 mb-4 text-gray-800">Panduan</h1>
                    <p>1. Aplikasi hanya dapat digunakan oleh kepala sekolah sebagai user</p>
                    <p>2. Aplikasi ini dibuat untuk media penunjang pelaksanaan supervisi akademik</p>
                    <p>3. Pengisian instrumen supervisi dilakukan pada setiap tahap supervisi akademik</p>
                    <p>4. Hasil pengisian supervisi akademik berupa scoring dan predikat </p>
                    <p>5. Langkah-langkah melakukan penilaian sebagai berikut : </p>
                    <hr class="sidebar-divider d-none d-md-block bg-success" />
                    <p> a. Jika guru yang disupervisi merupakan guru umum, user mengisi instrumen supervisi pada halaman
                        supervisi guru umum</p>
                    <p> b. Jika guru yang disupervisi merupakan guru Agama, user mengisi instrumen supervisi pada halaman
                        supervisi guru agama</p>
                    <p> c. Isi nama guru yang akan disupervisi pada kolom nama </p>
                    <p> d. Isi NUPTK guru yang akan disupervisi pada kolom nama</p>
                    <p> e. Isi tahapan pelaksanaan supervisi dengan menggunakan anga 1 atau 2 yang artinya pelaksanaan
                        supervisi di semester 1 dan semester 2</p>
                    <p> f. Isilah setiap poin penilaian sesuai dengan hasil penilaian yangdilakuka selama pengamatan</p>
                    <p> g. Indikator penilaiaan 1 : seluruh aspek pekerjaan belum memadai; 2: hasil pekerjaan sebagian besar
                        belum memadai; 3: hasil pekerjaan hampir mencapai kesempurnaan kecuali beberapa aspeknya; 4: hasil
                        pekerjaan sudah sempurna dari berbagai aspek</p>
                    <p> h. Tekan tombol submit jika penilaian sudah dianggap sesuai dengan hasil pengamatan</p>
                    <hr class="sidebar-divider d-none d-md-block bg-success" />
                    <p>6. Untuk melihat hasil supervisi yang mencakup total score dan predikat dapat dilihat pada halaman
                        hasil supervisi -> hasil guru umum untuk penilaian guru umum dan hasil guru agama untuk penilaian
                        guru agama</p>
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
