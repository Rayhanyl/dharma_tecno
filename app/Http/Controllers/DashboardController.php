<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\Education;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use RealRashid\SweetAlert\Facades\Alert;
use function PHPUnit\Framework\returnCallback;

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
        $data = Application::where('id', $id)->with('user', 'position')->get();
        $education = Education::where('application_id', $id)->get();
        return view('admin.view_data_applicant', compact('data','education'));
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

    public function modalApproval($application)
    {
        $data = Application::where('id', $application)->get();
        return view('ajax.modal_approval', compact('data'));
    }

    public function updateApproval(Request $request)
    {
        try {
            // Update user data
            Application::where('id', $request->idApplication)->update([
                'status' => $request->approvalApplication,
            ]);
    
            Alert::toast('Profil berhasil di update', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::warning('Error', 'Contact Developer to Fix This');
            return redirect()->back();
        }
    }
}
