@extends('layouts.app')
@section('content')
    <main class="main-content" style="margin-top: 7rem;">
        <section>
            <div class="page-header">
                <div class="container my-2">
                    <div class="row gap-4">
                        <div class="col-12 bg-gradient-success shadow py-2" style="border-radius: 25px;">
                            <h3 class="text-white">Create Interviewer</h3>
                        </div>
                        <div class="col-12">
                            <div class="card"
                                style="box-shadow: rgba(17, 17, 26, 0.05) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;">
                                <div class="card-body">
                                    <form class="row g-3" action="{{ route('store.user.interviewer') }}" method="POST">
                                        @csrf
                                        <div class="col-6">
                                            <label for="">First Name</label>
                                            <input type="text" class="form-control" name="first_name" id="first_name">
                                        </div>
                                        <div class="col-6">
                                            <label for="">Last Name</label>
                                            <input type="text" class="form-control" name="last_name" id="last_name">
                                        </div>
                                        <div class="col-6">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" name="email" id="email">
                                        </div>
                                        <div class="col-6">
                                            <label for="">Phone Number</label>
                                            <input type="number" class="form-control" name="phone_number"
                                                id="phone_number">
                                        </div>
                                        <div class="col-12">
                                            <label for="">Password</label>
                                            <input type="password" class="form-control" name="password" id="password">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary w-75">Submit</button>
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
