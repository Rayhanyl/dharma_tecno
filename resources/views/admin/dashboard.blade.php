@extends('layouts.app')
@section('content')
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <h5>Selamat Datang di - Portal Rekrutmen </h5>
                            <p style="text-align: justify;">Akun ini akan digunakan untuk mengirim lamaran pekerjaan yang
                                tersedia di PT Dharma Tekno Indonesia. Pastikan email yang digunakan merupakan e-mail aktif
                                untuk mendapatkan pemberitahuan mengenai lowongan pekerjaan atau status lamaran</p>
                        </div>
                        <div class="col-12 col-lg-6 text-center">
                            @if (Auth::user()->role == 'applicant')
                                @if (
                                    $application->status == 'approved' ||
                                        $application->status == 'processed' ||
                                        $application->status == 'interviewed' ||
                                        $application->status == 'accepted')
                                    <h4 class="fw-bold text-warning">
                                        <i class="fa fa-warning"></i>
                                        Lamaran sedang dalam proses seleksi
                                    </h4>
                                @else
                                    <a href="{{ route('form.calon-karyawan.page') }}"
                                        class="btn bg-gradient-info w-50 mt-4 mb-0 shadow">Lamar</a>
                                @endif
                            @else
                                <a href="{{ route('data.calon.page') }}"
                                    class="btn bg-gradient-info w-50 mt-4 mb-0 shadow">Data Calon Pelamar</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
