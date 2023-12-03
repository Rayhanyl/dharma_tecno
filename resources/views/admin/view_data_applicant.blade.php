@extends('layouts.app')

@section('content')
<main class="main-content" style="margin-top:7rem;">
    <section>
        <div class="page-header">
            <div class="container">
                <div class="col-12">
                    <a href="{{ route ('data.pelamar.page') }}" class="btn btn-warning">
                        Back to Data calon pelamar
                    </a>
                </div>
                @foreach ($data as $item)
                    
                <div class="col-12 my-2">
                    <h5>Posisi yang dilamar : {{ $item->position->name }}</h5>
                    @if($item->status == 'approved')
                        <p class="text-uppercase">Berkas Diterima</p>
                    @elseif($item->status == 'interviewed')
                        <p class="text-uppercase">Tahap Interview</p>
                    @elseif($item->status == 'accepted')
                        <p class="text-uppercase">Lamaran Diterima</p>
                    @elseif($item->status == 'rejected')
                        <p class="text-uppercase">Tidak Lolos</p>
                    @else
                        <p class="text-uppercase">Berkas Diproses</p>
                    @endif
                </div>

                <div class="row my-2">
                    {{-- Data diri --}}
                    <div class="col-12">
                        <div class="card shadow rounded-4">
                            <div class="card-body row">
                                <h4>DATA DIRI (IDENTITAS)</h4>
                                <hr>
                                <div class="col-12 col-md-6">
                                    <label for="NamaLengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="fullname" class="form-control" placeholder="Nama Lengkap"
                                        id="NamaLengkap" value="{{ $item->fullname }}" readonly>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="noidentitas" class="form-label">No Identitas</label>
                                    <input type="number" name="noidentitas" placeholder="No KTP / SIM"
                                        class="form-control" id="noidentitas" value="{{ $item->identity_number }}"
                                        readonly>
                                </div>
                                <div class="col-12 col-md-3">
                                    <label for="tmptlahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" name="noidentitas" placeholder="Tempat Lahir"
                                        class="form-control" id="tmptlahir" value="{{ $item->birthplace }}" readonly>
                                </div>
                                <div class="col-12 col-md-3">
                                    <label for="ttglahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="ttglahir" placeholder="Tanggal Lahir" class="form-control"
                                        id="ttglahir" value="{{ $item->birthdate }}" readonly>
                                </div>
                                <div class="col-12 col-md-3">
                                    <label for="agama" class="form-label">Agama</label>
                                    <select name="agama" id="agama" class="form-select" disabled>
                                        <option value="{{ $item->religion }}">{{ $item->religion }}</option>
                                    </select>
                                    <input type="hidden" name="agama" value="{{ $data->first()->religion }}">
                                </div>

                                <div class="col-12 col-md-3">
                                    <label for="nohp" class="form-label">No Hp /Telepon Aktif</label>
                                    <input type="text" name="nohp" placeholder="No Hp / Telepon Aktif"
                                        class="form-control" id="nohp" value="{{ $item->active_phone }}" readonly>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="alamatlengkap" class="form-label">Alamat Lengkap</label>
                                    <textarea class="form-control" name="alamatlengkap" id="alamatlengkap" cols="10"
                                        rows="2" disabled>{{ $item->address }}</textarea>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="alamatlengkap" class="form-label">Alamat
                                        Domisili</label>
                                    <br>
                                    <textarea class="form-control" name="sesuaiktp" id="sesuaiktp" cols="10"
                                        rows="2" disabled>{{ $item->residence_address }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Posisi Yang di Lamar --}}
                    <div class="col-12 my-4">
                        <div class="card shadow rounded-4">
                            <div class="card-body">
                                <h4>Posisi Yang di Lamar</h4>
                                <hr>
                                <select class="form-select" aria-label="Pilih posisi yang dilamar" disabled>
                                    <option value="{{ $item->position->name }}" selected>{{ $item->position->name }}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    {{-- Riwayat Pekerjaan --}}
                    <div class="col-12 my-4">
                        <div class="card shadow rounded-4">
                            <div class="card-body">
                                <h4>Riwayat Pekerjaan</h4>
                                <hr>
                                <div class="col-12">
                                    <textarea class="form-control" name="riwayat_pekerjaan" id="riwayat_pekerjaan" cols="10"
                                        rows="2" disabled>{{ $item->job_histories }}</textarea>
                                </div>
                                <div class="col-12">
                                    <label for="riwayat_atasan_bawahan" class="form-label">Sebutkan siapa yang
                                        pernah menjadi atasan/bawahan anda saat itu?</label>
                                    <textarea class="form-control" name="riwayat_atasan_bawahan" id="riwayat_atasan_bawahan"
                                        cols="10" rows="2" disabled>{{ $item->leader_job_histories }}</textarea>
                                    <div id="riwayat_atasan_bawahan" class="form-text">Atasan : 3 orang, bapak a,
                                        bapal b, ibu c / Bawahan : 5 orang, mas d, mba e, dst.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Minat dan Konsep Pribadi --}}
                    <div class="col-12 my-4">
                        <div class="card shadow rounded-4">
                            <div class="card-body">
                                <h4>Minat dan Konsep Pribadi</h4>
                                <hr>
                                <div class="col-12">
                                    <label for="alasan_ingin_bekerja_diperusahaan" class="form-label">Mengapa anda
                                        ingin bekerja di perusahaan kami?</label>
                                    <input type="text" name="alasan_ingin_bekerja_diperusahaan" class="form-control"
                                        id="alasan_ingin_bekerja_diperusahaan" value="{{ $item->reason_to_apply }}" readonly>
                                </div>
                                <div class="col-12">
                                    <label for="harapan_gaji" class="form-label">Berapa gaji yang anda
                                        harapkan?</label>
                                    <input type="text" name="harapan_gaji" class="form-control" id="harapan_gaji" value="{{ $item->salary_expectation }}" readonly>
                                </div>
                                <div class="col-12">
                                    <label for="fasilitas_tambahan" class="form-label">Apakah ada fasilitas
                                        tambahan yang anda inginkan?</label>
                                    <input type="text" name="fasilitas_tambahan" class="form-control"
                                        id="fasilitas_tambahan" value="{{ $item->facility_expectation }}" readonly>
                                </div>
                                <div class="col-12">
                                    <label for="kesiapan_mulai_bekerja" class="form-label">Kapan anda dapat mulai
                                        bekerja?</label>
                                    <input type="text" name="kesiapan_mulai_bekerja" class="form-control"
                                        id="kesiapan_mulai_bekerja" value="{{ $item->work_date }}" readonly>
                                </div>
                                <div class="col-12">
                                    <label for="kenalan_didalam_perusahaan" class="form-label">Adakah kenalan anda
                                        di perusahaan kami?</label>
                                    <input type="text" name="kenalan_didalam_perusahaan" class="form-control"
                                        id="kenalan_didalam_perusahaan" value="{{ $item->relation_person }}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Berkas --}}
                    <div class="col-12 my-4">
                        <div class="card shadow rounded-4">
                            <div class="card-body">
                                <h4>Berkas</h4>
                                <hr>
                                <div class="mb-3">
                                    <h6>file cv</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
    </section>
</main>
@endsection
