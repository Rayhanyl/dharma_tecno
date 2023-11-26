<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardView(){
        return view('admin.dashboard');
    }

    public function dataDiriView(){
        return view('data_diri');
    }

    public function statusLamaranView(){
        return view('user.status');
    }

    public function formCalonKaryawanView(){
        return view('admin.form_calon');
    }

    public function dataCalonPelamarView(){
        return view('admin.data_calon_pelamar');
    }
    public function dataPelamarView(){
        return view('admin.data_pelamar');
    }
}
