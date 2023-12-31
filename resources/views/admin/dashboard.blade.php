@extends('layouts.app')
@section('content')
    @if (Auth::user()->role == 'interviewer')
        <main class="main-content" style="margin-top: 7rem;">
            <section>
                <div class="page-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h5>Selamat Datang di - Portal Rekrutmen </h5>
                                <p style="text-align: justify;">Akun ini akan digunakan untuk mengirim lamaran pekerjaan
                                    yang
                                    tersedia di PT Dharma Tekno Indonesia. Pastikan email yang digunakan merupakan e-mail
                                    aktif
                                    untuk mendapatkan pemberitahuan mengenai lowongan pekerjaan atau status lamaran</p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </main>
    @else
        <main class="main-content" style="margin-top: 7rem;">
            <section>
                <div class="page-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h5>Selamat Datang di - Portal Rekrutmen </h5>
                                <p style="text-align: justify;">Akun ini akan digunakan untuk mengirim lamaran pekerjaan
                                    yang
                                    tersedia di PT Dharma Tekno Indonesia. Pastikan email yang digunakan merupakan e-mail
                                    aktif
                                    untuk mendapatkan pemberitahuan mengenai lowongan pekerjaan atau status lamaran</p>
                            </div>
                            <div class="col-12 col-lg-6 text-center">
                                <div class="row">
                                    @if (Auth::user()->role == 'applicant')
                                        @if ($application)
                                            @if ($application->status == 'processed' || $application->status == 'interviewed')
                                                <div class="col-12">
                                                    <h4 class="fw-bold text-warning">
                                                        <i class="fa fa-warning"></i>
                                                        Lamaran sedang dalam proses seleksi
                                                    </h4>
                                                </div>
                                            @elseif ($application->status == 'accepted')
                                                <div class="col-12">
                                                    <h4 class="fw-bold text-success">
                                                        <i class="fa fa-success"></i>
                                                        Anda telah diterima
                                                    </h4>
                                                </div>
                                            @endif
                                        @else
                                            <div class="col-12">
                                                <a href="{{ route('form.calon-karyawan.page') }}"
                                                    class="btn bg-gradient-info w-50 mt-4 mb-0 shadow">Lamar</a>
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-12">
                                            <a href="{{ route('data.calon.page') }}"
                                                class="btn bg-gradient-info w-50 mt-4 mb-0 shadow">Data Calon Pelamar</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @if ($application)
                                @if ($application->status == 'interviewed')
                                    <div class="col-12 row d-flex justify-content-center my-2">
                                        <div class="col-12 col-lg-8">
                                            <div class="card rounded-4 shadow">
                                                <div class="card-body">
                                                    <h6 class="text-uppercase fw-bolder">Jadwal Interview</h6>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-12 row">
                                                            <div class="col-4">
                                                                <h6>Tanggal Interview</h6>
                                                                <p>{{ $application->interview_date }}</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <h6>Pewawancara</h6>
                                                                <p class="text-capitalize">
                                                                    {{ $application->interviewer->first_name }}
                                                                    {{ $application->interviewer->last_name }}</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <h6>Pelamar</h6>
                                                                <p class="text-capitalize">{{ $application->fullname }}</p>
                                                            </div>
                                                            <div class="col-12">
                                                                <h6>Address / Link meet</h6>
                                                                <p>{{ $application->interview_location }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endif

                        </div>
                    </div>
                </div>
            </section>
        </main>
    @endif
@endsection


@push('script')
    <script>
        $(document).ready(function() {
            $('#table-data-calon-interview').DataTable({
                responsive: true,
                lengthMenu: [
                    [5, 10, 25, -1],
                    [5, 10, 25, 'All'],
                ],
                order: [
                    [0, 'asc']
                ],
            });
        });
    </script>
@endpush
