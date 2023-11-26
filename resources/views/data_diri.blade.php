@extends('layouts.app')
@section('content')
<main class="main-content mt-0">
    <section class="min-vh-100 mb-8">
        <div class="page-header" style="min-height:140vh;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>Data Diri</h3>
                        <hr>
                    </div>
                    <div class="col-12">
                        <div class="card shadow rounded-4">
                            <div class="card-body">
                                <form class="row" action="#"  method="POST">
                                    @csrf
                                  <div class="col-12 col-lg-6 mb-3">
                                    <label for="nama-depan">Nama Depan</label>
                                    <input type="text" class="form-control" id="nama-depan" name="nama_depan" placeholder="Masukan nama depan" aria-label="Nama Depan" aria-describedby="nama-depan-addon">
                                  </div>
                                  <div class="col-12 col-lg-6 mb-3">
                                    <label for="nama-belakang">Nama Belakang</label>
                                    <input type="text" class="form-control" id="nama-belakang" name="nama_belakang" placeholder="Masukan nama belakang" aria-label="Nama Belakang" aria-describedby="nama-belakang-addon">
                                  </div>
                                  <div class="col-12 mb-3">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email" aria-label="Email" aria-describedby="email-addon">
                                  </div>
                                  <div class="col-12 mb-3">
                                    <label for="">Phone</label>
                                    <input type="number" class="form-control" placeholder="Enter Your Number Phone" name="phone" aria-label="Phone" aria-describedby="phone-addon">
                                    <div id="emailHelp" class="form-text">Example number: 852xxxxxxx</div>
                                  </div>
                                  <div class="col-12 col-lg-6 mb-3">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password" aria-describedby="password-addon">
                                    <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
                                  </div>
                                  <div class="col-12 col-lg-6 mb-3">
                                    <label for="">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password" aria-label="Password" name="confirm_password" aria-describedby="confirm-password-addon">
                                  </div>
                                  <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Update Data Diri</button>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
