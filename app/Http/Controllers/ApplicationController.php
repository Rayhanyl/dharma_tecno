<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Application;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreApplicationRequest;
use App\Http\Requests\UpdateApplicationRequest;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $application = new Application;
        if ($request->hasFile('cv')) {
            $request->file('cv')->storeAs('public/media/applications', $request->cv->hashName());
        }
        $application->fullname              = $request->fullname;
        $application->identity_number       = $request->noidentitas;
        $application->birthplace            = $request->tmplahir;
        $application->birthdate             = $request->ttglahir;
        $application->religion              = $request->agama;
        $application->address               = $request->alamatlengkap;
        $application->residence_address     = $request->sesuaiktp;
        $application->active_phone          = $request->nohp;
        $application->job_histories         = $request->riwayat_pekerjaan;
        $application->leader_job_histories  = $request->riwayat_atasan_bawahan;
        $application->reason_to_apply       = $request->alasan_ingin_bekerja_diperusahaan;
        $application->salary_expectation    = $request->harapan_gaji;
        $application->facility_expectation  = $request->fasilitas_tambahan;
        $application->work_date             = $request->kesiapan_mulai_bekerja;
        $application->relation_person       = $request->kenalan_didalam_perusahaan;
        $application->cv                    = $request->cv->hashName();
        $application->cv_ext                = $request->cv->getClientOriginalExtension();
        $application->status                = 'processed';
        $application->position_id           = $request->position_id;
        $application->user_id               = Auth::User()->id;
        $application->save();
        if ($request->riwayat_pendidikan) {
            foreach ($request->riwayat_pendidikan as $value) {
                $education = new Education;
                $education->application_id    = $application->id;
                $education->university        = $value['nama_universitas'];
                $education->ipk               = $value['nilai_ipk'];
                $education->organizations     = $value['organiasi_diikuti'];
                $education->graduated_year    = $value['tahun_lulus'];
                $education->year              = $value['tahun_organisasi'];
                $education->position          = $value['jabatan_organisasi'];
                $education->save();
            }
        }
        if ($request->sertifikat) {
            foreach ($request->sertifikat as $idx => $value) {
                $certificate = new Certificate;
                // if ($request->hasFile('sertifikat')[$idx]) {
                $request->file('sertifikat')[$idx]->storeAs('public/media/certificates', $request->sertifikat[$idx]->hashName());
                // }
                $certificate->application_id    = $application->id;
                $certificate->certificate       = $request->sertifikat[$idx]->hashName();
                $certificate->certificate_ext   = $request->sertifikat[$idx]->getClientOriginalExtension();
                $certificate->save();
            }
        }

        Alert::toast('Pendaftaran berhasil, Form lamaran akan segera di proses', 'success');
        return redirect()->route('data.pelamar.page');
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApplicationRequest $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        //
    }
}
