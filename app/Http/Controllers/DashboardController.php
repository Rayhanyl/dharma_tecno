<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboardView()
    {
        return view('admin.dashboard');
    }

    public function dataDiriView()
    {
        return view('data_diri');
    }

    public function statusLamaranView()
    {
        return view('user.status');
    }

    public function viewDataApplicant($id){
        $data = Application::where('id', $id)->get();
        return view('admin.view_data_applicant');
    }

    public function formCalonKaryawanView()
    {
        $positions = Position::all();
        return view('admin.form_calon', compact('positions'));
    }

    public function dataCalonPelamarView()
    {
        $statuses = ['processed', 'approved', 'interviewed'];
        $data = Application::whereIn('status', $statuses)->get();
        return view('admin.data_calon_pelamar',compact('data'));
    }
    public function historyPelamarView()
    {
        $user = Auth::user();
        if ($user->role === 'admin') {
            $data = Application::get();
            return view('admin.history_pelamar',compact('data'));
        } else {
            $data = Application::where('user_id', $user->id)->with('user', 'position')->get();
            return view('user.history_lamaran',compact('data'));
        }
    }
}
