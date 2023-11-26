@extends('layouts.app')
@section('content')
<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-8">
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-bolder text-success text-gradient">PT DHARMA TEKNO INDONESIA.
                                </h3>
                                <p class="mb-0">Selamat Datang di - Portal Rekrutmen</p>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <p>Terima kasih telah mengunjungi portal rekrutmen resmi PT Dharma Tekno
                                        Indonesia. Kami sangat antusias untuk menemukan individu berbakat yang ingin
                                        bergabung dengan tim kami dan berkontribusi dalam mewujudkan visi dan misi
                                        perusahaan kami.</p>
                                    <a href="{{ route ('login.page') }}"
                                        class="btn bg-gradient-info w-50 mt-4 mb-0">Lamar
                                        sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                style="background-image:url('../assets/img/dharma_logo_1.png')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin:50px 0px;"> 
        <div class="page-header min-vh-55">
            <div class="container">
                <div class="row my-5">
                    <div class="col-12 my-5">
                        <div class="row">
                            <div class="col-12 col-lg-4 my-auto">
                                <h2 class="text-gradient text-info">Profil <br> Perusahaan</h2>
                            </div>
                            <div class="col-12 col-lg-8">
                                <p style="text-align: justify;line-height:30px;">
                                    <span class="text-success fw-bold">PT Dharma Tekno Indonesia</span> adalah Perusahaan lokal dengan mimpi global, yang mengepankan "kearifan lokal" dalam setiap langkahnya. Dengan "DHARMA" sebagai brand yang di usung, didominasi warna hijau menandakan "ramah lingkungan" dibalut 5 garis yang membentuk perisai sebagai bentuk rukun kompak untuk membentengi kebenaran dalam mecapai tujuan perusahaan.
                                </p>
                                <p>
                                    PT DTI merupakan perusahaan yang bergerak dibidang bisnis alat kesehatan. didirikan oleh pribadi yang memiliki karakter luhur warisan bangsa, - jujur amanah rukun kompak - sebagai landasan dan acuan setiap kegiatan.
                                </p>
                                <p>
                                    PT DTI didukung oleh team profesional yang berpengalaman dalam melaksanakan proyek, siap bersaing dengan perusahaan sejenis. PT DTI siap menjadi mitra bisnis yang profesional dengan mengedepankan kepuasan mitra bisnis dan semua customer. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 my-5">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h2 class="text-gradient text-success">Visi</h2>
                            </div>
                            <div class="col-12 text-center">
                                Menjadi perusahaan penyedia alat kesehatan yang handal bermanfaat untuk nkri.
                            </div>  
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 my-5">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h2 class="text-gradient text-success">Misi</h2>
                            </div>
                            <div class="col-12 text-center">
                                Menyediakan alat kesehatan terpadu dan bermutu ikut andil dalam membantu program pemerintah dalam meningkatkan tingkat kesehatan rakyat indonesia.
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-12 col-lg-4 my-auto">
                        <h2 class="text-gradient text-info">Mengapa Bergabung dengan Kami?</h2>
                    </div>
                    <div class="col-12 col-lg-8">
                        <p style="text-align: justify;line-height:30px;">
                            <span class="text-success fw-bold">PT Dharma Tekno Indonesia</span> adalah tempat di mana
                            ide-ide cemerlang menjadi kenyataan. Kami menghargai inovasi, dedikasi, dan semangat
                            kolaboratif dalam menciptakan solusi teknologi yang memimpin industri. Bergabung dengan
                            kami berarti menjadi bagian dari tim yang dinamis dan berorientasi pada pencapaian
                            tinggi.
                        </p>
                        <p>
                            Keuntungan dan Fasilitas, Kami menyediakan paket kompensasi yang kompetitif, peluang
                            pengembangan karir, dan berbagai fasilitas yang mendukung kesejahteraan karyawan. Di PT
                            Dharma Tekno Indonesia, kami percaya bahwa kebahagiaan dan kesejahteraan karyawan adalah
                            kunci keberhasilan perusahaan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="min-vh-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3> CARA MELAMAR </h1>
                            <p>Jika Anda tertarik untuk menjadi bagian dari PT Dharma Tekno Indonesia, silakan
                                telusuri posisi yang tersedia dan kirimkan lamaran Anda melalui formulir yang telah
                                disediakan. Kami menantikan untuk mengetahui lebih lanjut tentang bakat, pengalaman,
                                dan keterampilan yang dapat Anda bawa ke perusahaan kami.</p>
                    </div>

                    <div class="col-12 row my-4">
                        <div class="col-12 col-lg-4">
                            <div class="card shadow rounded-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3>Login</h3>
                                        </div>
                                        <div class="col-12 my-2">
                                            <p>
                                                Masuk hanya dengan menggunakan email pribadi
                                            </p>
                                        </div>
                                        <div class="col-12 text-end">
                                            <h3>1</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card shadow rounded-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3>Melengkapi Data Diri</h3>
                                        </div>
                                        <div class="col-12 my-2">
                                            <p>
                                                Mengisi data diri, posisi yang dilamar dan melengkapi dokumen
                                            </p>
                                        </div>
                                        <div class="col-12 text-end">
                                            <h3>2</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card shadow rounded-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3>Cek Status</h3>
                                        </div>
                                        <div class="col-12 my-2">
                                            <p>
                                                Lakukan cek status secara berkala melalui email yang terhubung
                                            </p>
                                        </div>
                                        <div class="col-12 text-end">
                                            <h3>3</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 row my-5">
                        <div class="col-12">
                            <h3>Perhatian <strong class="text-warning">!!</strong></h3>
                        </div>
                        <div class="col-12">
                            <ol>
                                <li>Penerimaan Karyawan di PT Dharma Tekno Indonesia tidak dikenakan biaya apapun
                                    (GRATIS).</li>
                                <li>Perhatikan semua data yang diisikan adalah BENAR. Dan dapat
                                    dipertanggungjawabkan
                                    kebenarannya.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: 100px;">
        <div class="min-vh-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact Us</h3>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p class="fw-bold">Get in touch:</p>
                        <p>
                            <small><i class="bi bi-geo-alt"></i> 6th. Floor Gedung Manggala Wana Bhakti Blok IV,
                                Wing Room 602 Jl. Gatot Subroto, Senayan Jakarta Indonesia,</small>
                        </p>
                        <p>
                            <small><i class="bi bi-envelope"></i> hr@dharmatekno.co.id </small>
                        </p>
                        <p>
                            <small><i class="bi bi-telephone"></i> (021) 1234-5678</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
