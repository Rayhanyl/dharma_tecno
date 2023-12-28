<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Position;
use App\Models\Education;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use function PHPUnit\Framework\returnCallback;

class DashboardController extends Controller
{
    public function dashboardView()
    {
        $application = Application::whereUserId(Auth::user()->id)->latest('id')->first();
        return view('admin.dashboard', compact('application'));
    }

    public function interviewerView()
    {
        $interviewer = User::where('role', 'interviewer')->get();
        return view('admin.interviewer', compact('interviewer'));
    }

    public function createInterviewerView()
    {
        return view('admin.create_interviewer');
    }

    public function editInterviewerView(User $user)
    {
        return view('admin.edit_interviewer', compact('user'));
    }

    public function updateUserInterviewer(Request $request, User $user)
    {
        try {
            $user->email = $request->email;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->phone_number = $request->phone_number;
            if ($request->password !== null) {
                $user->password = $request->password;
            }
            $user->save();
            Alert::toast('Berhasil mengubah akun', 'success');
            return redirect()->route('interviewer.page');
        } catch (\Throwable $e) {
            Alert::warning('Error', 'Contact Developer to Fix This');
            return redirect()->back();
        }
    }

    public function destroyUserInterviewer(User $user)
    {
        try {
            $user->delete();
            Alert::toast('Berhasil Menghapus akun', 'success');
            return redirect()->route('interviewer.page');
        } catch (\Throwable $e) {
            Alert::warning('Error', 'Contact Developer to Fix This');
            return redirect()->back();
        }
    }

    public function storeUserInterviewer(Request $request)
    {
        try {
            User::create([
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone_number' => '+62' . $request->phone_number,
                'role' => 'interviewer',
            ]);
            Alert::toast('Berhasil membuat akun', 'success');
            return redirect()->route('interviewer.page');
        } catch (\Throwable $e) {
            Alert::warning('Error', 'Contact Developer to Fix This');
            return redirect()->back();
        }
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
        $interviewers = User::whereRole('interviewer')->get();
        return view('ajax.modal_approval', compact('data', 'interviewers'));
    }

    public function updateApproval(Request $request)
    {
        try {
            $application = Application::where('id', $request->idApplication)->first();
            $value = [];
            if ($application->status == 'processed') {
                $value = [
                    'interview_date' => $request->interview_date,
                    'interviewer' => $request->interviewer_id,
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

    public function updateInterview(Request $request)
    {
        try {
            $application = Application::where('id', $request->id)->first();
            $application->update([
                'interview_date' => $request->interview_date,
                'interviewer' => $request->interviewer,
                'interview_location' => $request->interview_location,
            ]);
            // Update user data

            Alert::toast('Jadwal berhasil di update', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::warning('Error', 'Contact Developer to Fix This');
            return redirect()->back();
        }
    }

    // Interviewer

    public function dashboardInterviewView()
    {
        return view('interviewer.index');
    }
}
