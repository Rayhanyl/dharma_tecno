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
                            <a href="{{ Auth::user()->role === 'admin' ? route('data.calon.page') : route('form.calon-karyawan.page') }}"
                                class="btn bg-gradient-info w-50 mt-4 mb-0 shadow">{{ Auth::user()->role === 'admin' ? 'Data Calon Pelamar' : 'Lamar' }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
