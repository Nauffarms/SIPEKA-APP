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
                    <h1 class="h3 mb-4 text-gray-800">Supervisi Umum</h1>
                    <form action="{{ route('general.store') }}" method="post">
                        @csrf
                        <div class="input-group">
                            <span class="input-group-text">Nama</span>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-text">NUPTK</span>
                            <input type="text" name="NIP" class="form-control">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-text">Tahap</span>
                            <input type="text" name="stage" class="form-control">
                        </div>
                        <br>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <h4>==== Apersepsi dan Motivasi ====</h4>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <div class="row">
                            <div class="col">
                                <p>1. Penyiapan psikis dan fisik peserta didik dilakukan melalui menyampaikan
                                    salam, berdoa, presensi, dan mengecek kesiapan belajar dengan memberikan
                                    kalimat pemantik.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s1" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s1" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s1" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s1" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>2. Pemberian motivasi belajar sehingga peserta
                                    didik menunjukkan rasa: senang, tertarik, bersemangat,
                                    dan siap mengikuti pembelajaran.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s2" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s2" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s2" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s2" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>3. Menyampaikan tujuan pembelajaran atau masalah yang akan dibahas.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s3" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s3" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s3" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s3" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <h4>==== Penguasaan Materi Pelajaran ====</h4>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <div class="row">
                            <div class="col">
                                <p>4. Kemampuan mengkaitkan materi dengan pengetahuan
                                    lain yang relevan, perkembangan iptek, dan kehidupan nyata.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s4" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s4" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s4" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s4" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>5. Menyajikan pembahasan materi pembelajaran dengan
                                    tepat dan sesuai tujuan.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s5" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s5" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s5" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s5" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <h4>==== Penerapan Strategi Pembelajaran yang Mendidik ====</h4>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <div class="row">
                            <div class="col">
                                <p>6. Melaksanakan pembelajaran secara runtut.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s6" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s6" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s6" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s6" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>7. Mengelola kelas dan menumbuhkan partisipasi aktif
                                    peserta didik dalam mengemukakan pendapat.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s7" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s7" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s7" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s7" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>8. Melaksanakan pembelajaran berdifferensiasi.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s8" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s8" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s8" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s8" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>9. Melaksanakan pembelajaran sesuai dengan alokasi waktu yang direncanakan.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s9" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s9" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s9" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s9" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <h4>==== Penerapan Pendekatan ilmiah dan Skill 21st ====</h4>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <div class="row">
                            <div class="col">
                                <p>10. Memfasilitasi dan menyajikan kegiatan bagi peserta didik untuk
                                    kegiatan mengamati dalam kelompok belajar (kolaborasi).</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s10" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s10" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s10" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s10" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>11. Memancing peserta didik untuk bertanya apa, mengapa dan bagaimana? (critical
                                    thinking).</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s11" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s11" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s11" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s11" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>12. Memfasilitasi dan menyajikan kegiatan peserta didik untuk mengumpulkan informasi dan
                                    mengkomunikasikan pengetahuan dan keterampilan yang diperolehnya.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s12" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s12" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s12" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s12" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>13. Penerapan model pembelajaran dengan pendekatan ilmiah (discovery learning, problem
                                    based learning, project based learning dan Pendekatan STEAM).</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s13" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s13" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s13" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s13" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <h4>==== Pemanfaatan Sumber Belajar/Media dalam Pembelajaran ====</h4>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <div class="row">
                            <div class="col">
                                <p>14. Menunjukkan keterampilan dalam penggunaan sumber/media pembelajaran.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s14" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s14" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s14" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s14" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>15. Melibatkan peserta didik dalam pemanfaatan media pembelajaran.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s15" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s15" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s15" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s15" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <h4>==== Pengembangan Asesmen ====</h4>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <div class="row">
                            <div class="col">
                                <p>16. Melaksanakan asesmen awal pembelajaran, formatif dan sumatif.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s16" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s16" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s16" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s16" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>17. Melaksanakan asesmen pembelajaran berdifferensiasi.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s17" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s17" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s17" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s17" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>18. Melaksanakan penilaian sikap dan keterampilan baik literasi maupun numerasi.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s18" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s18" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s18" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s18" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>19. Melaksanakan penilaian pengetahuan dengan soal - soal HOTS.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s19" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s19" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s19" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s19" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <h4>==== Pelibatan peserta didik dalam pembelajaran ====</h4>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <div class="row">
                            <div class="col">
                                <p>20. Menumbuhkan partisipasi aktif peserta didik melalui interaksi guru, peserta didik dan
                                    sumber belajar.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s20" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s20" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s20" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s20" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <h4>==== Penggunaan Bahasa yang Benar dan Tepat dalam Pembelajaran ====</h4>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <div class="row">
                            <div class="col">
                                <p>21. Menggunakan bahasa lisan secara jelas dan lancar.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s21" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s21" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s21" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s21" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>22. Menggunakan bahasa tulis yang baik dan benar.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s22" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s22" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s22" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s22" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>23. Memfasilitasi dan membimbing peserta didik untuk merefleksi proses dan materi
                                    pembelajaran.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s23" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s23" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s23" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s23" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>24. Memberikan umpan balik terhadap proses dan hasil pembelajaran dan dikaitkan secara
                                    kontekstual.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s24" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s24" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s24" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s24" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>25. Merencanakan kegiatan tindak lanjut dalam memperbaiki pembelajaran dan memberikan
                                    penugasan.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s25" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s25" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s25" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s25" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <h4>==== Spiritualisasi pembelajaran ====</h4>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <div class="row">
                            <div class="col">
                                <p>26. Ketepatan dalam pemilihan referensi nash keagamaan.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s26" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s26" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s26" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s26" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>27. Melibatkan peserta didik dalam implementasi spiritualisasi pembelajaran.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s27" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s27" id="flexCheckDefault"
                                        value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s27" id="flexCheckDefault"
                                        value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s27" id="flexCheckDefault"
                                        value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>28. Mengaitkannya dengan materi pelajaran dan dapat pula dikaitkan dengan kehidupan
                                    sehari-hari.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s28" id="flexCheckDefault"
                                        value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s28"
                                        id="flexCheckDefault" value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s28"
                                        id="flexCheckDefault" value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s28"
                                        id="flexCheckDefault" value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <h4>=== Pendidikan Karakter ====</h4>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <div class="row">
                            <div class="col">
                                <p>29. Membangun keteladanan guru dan suasana untuk melibatkan peserta didik dalam penanaman
                                    karakter.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s29"
                                        id="flexCheckDefault" value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s29"
                                        id="flexCheckDefault" value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s29"
                                        id="flexCheckDefault" value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s29"
                                        id="flexCheckDefault" value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>30. Mengamati dan mendokumentasikan perkembangan karakter peserta didik dalam proses
                                    pembelajaran sehari-hari. </p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"
                                        name="s30"id="flexCheckDefault" value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s30"
                                        id="flexCheckDefault" value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s30"
                                        id="flexCheckDefault" value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s30"
                                        id="flexCheckDefault" value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>31. Menumbuhkan sikap saling manghargai, kemandirian dan tanggung jawab antar siswa. </p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox"
                                        name="s31"id="flexCheckDefault" value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s31"
                                        id="flexCheckDefault" value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s31"
                                        id="flexCheckDefault" value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s31"
                                        id="flexCheckDefault" value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <h4>==== Bilingual ====</h4>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <div class="row">
                            <div class="col">
                                <p>32. Pelaksanaan bilingual (penggunaan istilah asing/dua atau tiga Bahasa) dalam
                                    pembelajaran.</p>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s32"
                                        id="flexCheckDefault" value="1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s32"
                                        id="flexCheckDefault" value="2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        2
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s32"
                                        id="flexCheckDefault" value="3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        3
                                    </label>
                                </div>
                                <div class="form-check form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="s32"
                                        id="flexCheckDefault" value="4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        4
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="sidebar-divider d-none d-md-block bg-success" />
                        <button class="btn btn-warning btn-user btn-block" type="submit">
                            Submit
                        </button>
                    </form>
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
