@extends('layouts.app')
@section('content')
    <main class="main-content" style="margin-top:7rem;">
        <section>
            <div class="page-header">
                <div class="container my-2">
                    <div class="row">
                        <form action="{{ route('application.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 bg-gradient-success shadow py-2 px-2" style="border-radius: 25px;">
                                <h3 class="text-white">Pengisian Data Calon Karyawan</h3>
                            </div>
                            <div class="col-12 my-3">
                                <h4 class="text-danger">PERHATIAN!!</h4>
                                <p style="text-align: justify">
                                <ol>
                                    <li>Penerimaan Karyawan di PT Dharma Tekno Indonesia tidak dikenakan biaya apapun
                                        (GRATIS).</li>
                                    <li>Perhatikan semua data yang diisikan adalah BENAR. Dan dapat dipertanggungjawabkan
                                        kebenarannya.</li>
                                </ol>
                                </p>
                            </div>
                            {{-- Data diri --}}
                            <div class="col-12">
                                <div class="card shadow rounded-4">
                                    <div class="card-body">
                                        <h4>DATA DIRI (IDENTITAS)</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <label for="NamaLengkap" class="form-label">Nama Lengkap</label>
                                                <input type="text" name="fullname" class="form-control"
                                                    placeholder="Nama Lengkap" id="NamaLengkap">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="noidentitas" class="form-label">No Identitas</label>
                                                <input type="number" name="noidentitas" placeholder="No KTP / SIM"
                                                    class="form-control" id="noidentitas">
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label for="tmptlahir" class="form-label">Tempat Lahir</label>
                                                <input type="text" name="tmplahir" placeholder="Tempat Lahir"
                                                    class="form-control" id="tmptlahir">
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label for="ttglahir" class="form-label">Tanggal Lahir</label>
                                                <input type="date" name="ttglahir" placeholder="Tanggal Lahir"
                                                    class="form-control" id="ttglahir">
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label for="agama" class="form-label">Agama</label>
                                                <select name="agama" id="agama" class="form-select">
                                                    <option value="" selected disabled>Pilih Agama</option>
                                                    <option value="islam">Islam</option>
                                                    <option value="protestant">Protestan</option>
                                                    <option value="catholic">Katolik</option>
                                                    <option value="confucius">Konghucu</option>
                                                    <option value="buddha">Budha</option>
                                                    <option value="hindu">Hindu</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label for="nohp" class="form-label">No Hp /Telepon Aktif</label>
                                                <input type="text" name="nohp" placeholder="No Hp / Telepon Aktif"
                                                    class="form-control" id="nohp">
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <label for="alamatlengkap" class="form-label">Alamat Lengkap</label>
                                                <textarea class="form-control" name="alamatlengkap" id="alamatlengkap" cols="10" rows="2"></textarea>
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <label for="alamatlengkap" class="form-label">Alamat Domisili</label>
                                                <br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptionsDomisili" id="inlineRadio1" value="samektp"
                                                        checked>
                                                    <label class="form-check-label" for="inlineRadio1">Sesuai dengan
                                                        KTP</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptionsDomisili" id="inlineRadio2" value="others">
                                                    <label class="form-check-label" for="inlineRadio2">Lainnya</label>
                                                </div>
                                                <textarea class="form-control" name="sesuaiktp" id="sesuaiktp" cols="10" rows="2"></textarea>
                                            </div>
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
                                        <select class="form-select" aria-label="Pilih posisi yang dilamar"
                                            name="position_id">
                                            <option selected>Pilih posisi yang dilamar</option>
                                            @foreach ($positions as $position)
                                                <option value="{{ $position->id }}">{{ $position->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {{-- Riwayat Pendidikan --}}
                            <div class="col-12 my-4">
                                <div class="card shadow rounded-4">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between my-4">
                                            <h4>Riwayat Pendidikan</h4>
                                            <button class="btn btn-success btn-tambah-pendidikan" type="button">
                                                Tambah Pendidikan
                                            </button>
                                        </div>
                                        <div class="education-row">
                                            <div class="row education-item">
                                                <div class="col-12">
                                                    <div class="float-end mt-3">
                                                        <button class="btn btn-danger btn-remove-pendidikan"
                                                            type="button">-</button>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="nama_universitas" class="form-label">Nama Universitas
                                                        (S1/D3)</label>
                                                    <input type="text" name="riwayat_pendidikan[0][nama_universitas]"
                                                        class="form-control" id="nama_universitas">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                                                    <input type="text" name="riwayat_pendidikan[0][tahun_lulus]"
                                                        class="form-control" id="tahun_lulus">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="nilai_ipk" class="form-label">IPK (4.00)</label>
                                                    <input type="text" name="riwayat_pendidikan[0][nilai_ipk]"
                                                        class="form-control" id="nilai_ipk">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="organiasi_diikuti" class="form-label">Organisasi yang
                                                        pernah
                                                        diikuti</label>
                                                    <input type="text" name="riwayat_pendidikan[0][organiasi_diikuti]"
                                                        class="form-control" id="organiasi_diikuti">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="tahun_organisasi" class="form-label">Tahun</label>
                                                    <input type="text" name="riwayat_pendidikan[0][tahun_organisasi]"
                                                        class="form-control" id="tahun_organisasi">
                                                </div>
                                                <div class="col-12">
                                                    <label for="jabatan_organisasi" class="form-label">Jabatan</label>
                                                    <input type="text" name="riwayat_pendidikan[0][jabatan_organisasi]"
                                                        class="form-control" id="jabatan_organisasi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between my-4">
                                            <h4>Setifikat</h4>
                                            <button class="btn btn-success btn-tambah-sertifikat" type="button">
                                                Tambah Sertifikat
                                            </button>
                                        </div>
                                        <div class="row certificate-row">
                                            <div class="col-12 certificate-item">
                                                <label for="sertifikat" class="form-label">Serifikat (Jika
                                                    Ada)</label>
                                                <input type="file" name="sertifikat[]" class="form-control"
                                                    id="sertifikat">
                                                <button class="btn btn-danger btn-remove-certificate"
                                                    type="button">-</button>
                                            </div>
                                        </div>
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
                                            <textarea class="form-control" name="riwayat_pekerjaan" id="riwayat_pekerjaan" cols="10" rows="2"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <label for="riwayat_atasan_bawahan" class="form-label">Sebutkan siapa yang
                                                pernah menjadi atasan/bawahan anda saat itu?</label>
                                            <textarea class="form-control" name="riwayat_atasan_bawahan" id="riwayat_atasan_bawahan" cols="10"
                                                rows="2"></textarea>
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
                                            <input type="text" name="alasan_ingin_bekerja_diperusahaan"
                                                class="form-control" id="alasan_ingin_bekerja_diperusahaan">
                                        </div>
                                        <div class="col-12">
                                            <label for="harapan_gaji" class="form-label">Berapa gaji yang anda
                                                harapkan?</label>
                                            <input type="text" name="harapan_gaji" class="form-control"
                                                id="harapan_gaji">
                                        </div>
                                        <div class="col-12">
                                            <label for="fasilitas_tambahan" class="form-label">Apakah ada fasilitas
                                                tambahan yang anda inginkan?</label>
                                            <input type="text" name="fasilitas_tambahan" class="form-control"
                                                id="fasilitas_tambahan">
                                        </div>
                                        <div class="col-12">
                                            <label for="kesiapan_mulai_bekerja" class="form-label">Kapan anda dapat mulai
                                                bekerja?</label>
                                            <input type="date" name="kesiapan_mulai_bekerja" class="form-control"
                                                id="kesiapan_mulai_bekerja">
                                        </div>
                                        <div class="col-12">
                                            <label for="kenalan_didalam_perusahaan" class="form-label">Adakah kenalan anda
                                                di perusahaan kami?</label>
                                            <input type="text" name="kenalan_didalam_perusahaan" class="form-control"
                                                id="kenalan_didalam_perusahaan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Pengumpulan Berkas --}}
                            <div class="col-12 my-4">
                                <div class="card shadow rounded-4">
                                    <div class="card-body">
                                        <h4>Pengumpulan Berkas</h4>
                                        <hr>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Silahkan upload CV anda melalui link
                                                dibawah ini</label>
                                            <input class="form-control" type="file" id="formFile" name="cv">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn bg-gradient-success rounded-4 w-100">Submit
                                    Lamaran</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endsection
    @push('script')
        <script>
            $(document).ready(function() {
                let iteredu = 1;
                $('#sesuaiktp').prop('readonly', true);
                $('input[name="inlineRadioOptionsDomisili"]').on('change', function() {
                    if ($(this).val() === 'samektp') {
                        $('#sesuaiktp').prop('readonly', true);
                        $('#sesuaiktp').val($('#alamatlengkap').val());
                    } else {
                        $('#sesuaiktp').prop('readonly', false);
                        $('#sesuaiktp').val('');
                    }
                });
                $('#alamatlengkap').on('keyup', function() {
                    if ($('#sesuaiktp').prop('readonly')) {
                        $('#sesuaiktp').val($(this).val());
                    }
                })
                $('.btn-tambah-pendidikan').on('click', function() {
                    $('.education-row').append(`
                        <div class="row education-item">
                            <div class="col-12">
                                <div class="float-end mt-3">
                                    <button class="btn btn-danger btn-remove-pendidikan"
                                        type="button">-</button>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="nama_universitas" class="form-label">Nama Universitas
                                    (S1/D3)</label>
                                <input type="text" name="riwayat_pendidikan[${iteredu}][nama_universitas]"
                                    class="form-control" id="nama_universitas">
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                                <input type="text" name="riwayat_pendidikan[${iteredu}][tahun_lulus]"
                                    class="form-control" id="tahun_lulus">
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="nilai_ipk" class="form-label">IPK (4.00)</label>
                                <input type="text" name="riwayat_pendidikan[${iteredu}][nilai_ipk]"
                                    class="form-control" id="nilai_ipk">
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="organiasi_diikuti" class="form-label">Organisasi yang
                                    pernah
                                    diikuti</label>
                                <input type="text"
                                    name="riwayat_pendidikan[${iteredu}][organiasi_diikuti]"
                                    class="form-control" id="organiasi_diikuti">
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="tahun_organisasi" class="form-label">Tahun</label>
                                <input type="text" name="riwayat_pendidikan[${iteredu}][tahun_organisasi]"
                                    class="form-control" id="tahun_organisasi">
                            </div>
                            <div class="col-12">
                                <label for="jabatan_organisasi" class="form-label">Jabatan</label>
                                <input type="text"
                                    name="riwayat_pendidikan[${iteredu}][jabatan_organisasi]"
                                    class="form-control" id="jabatan_organisasi">
                            </div>
                        </div>
                    `);
                    iteredu++;
                });
                $(document).on('click', '.btn-remove-pendidikan', function() {
                    $(this).parents('.education-item').remove();
                });
                $('.btn-tambah-sertifikat').on('click', function() {
                    $('.certificate-row').append(`
                        <div class="col-12 certificate-item">
                            <label for="sertifikat" class="form-label">Serifikat (Jika
                                Ada)</label>
                            <input type="file" name="sertifikat[]" class="form-control"
                                id="sertifikat">
                            <button class="btn btn-danger btn-remove-certificate"
                                type="button">-</button>
                        </div>
                    `)
                });
                $(document).on('click', '.btn-remove-certificate', function() {
                    $(this).parents('.certificate-item').remove();
                });
            })
        </script>
    @endpush
