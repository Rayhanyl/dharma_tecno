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
        $application = Application::whereUserId(Auth::user()->id)->latest('id')->first();
        return view('admin.dashboard', compact('application'));
    }

    public function dataDiriView()
    {
        return view('data_diri');
    }

    public function statusLamaranView()
    {
        $application = Application::whereUserId(Auth::user()->id)->latest('id')->first();
        return view('user.status', compact('application'));
    }

    public function viewDataApplicant($id)
    {
        $data = Application::where('id', $id)->with('user', 'position', 'educations', 'certificate')->get();
        return view('admin.view_data_applicant', compact('data'));
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
        return view('admin.data_calon_pelamar', compact('data'));
    }

    public function historyPelamarView()
    {
        $user = Auth::user();
        if ($user->role === 'admin') {
            $data = Application::get();
            return view('admin.history_pelamar', compact('data'));
        } else {
            $data = Application::where('user_id', $user->id)->with('user', 'position')->get();
            return view('user.history_lamaran', compact('data'));
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
            $application = Application::where('id', $request->idApplication)->first();
            $value = [];
            if ($application->status == 'processed') {
                $value = [
                    'interview_date' => $request->interview_date,
                    'interviewer' => $request->interviewer,
                    'interview_location' => $request->interview_location,
                ];
            }
            $status = [
                'status' => $request->approvalApplication,
            ];
            $merge = array_merge($value, $status);
            $application->update($merge);
            // Update user data

            Alert::toast('Profil berhasil di update', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::warning('Error', 'Contact Developer to Fix This');
            return redirect()->back();
        }
    }
}
