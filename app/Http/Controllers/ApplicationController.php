<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreApplicationRequest;
use App\Http\Requests\UpdateApplicationRequest;
use App\Models\Education;

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
        $application = Application::create([
            'fullname'              => $request->fullname,
            'identity_number'       => $request->noidentitas,
            'birthplace'            => $request->tmplahir,
            'birthdate'             => $request->ttglahir,
            'religion'              => $request->agama,
            'address'               => $request->alamatlengkap,
            'residence_address'     => $request->sesuaiktp,
            'active_phone'          => $request->nohp,
            'job_histories'         => $request->riwayat_pekerjaan,
            'leader_job_histories'  => $request->riwayat_atasan_bawahan,
            'reason_to_apply'       => $request->alasan_ingin_bekerja_diperusahaan,
            'salary_expectation'    => $request->harapan_gaji,
            'facility_expectation'  => $request->fasilitas_tambahan,
            'work_date'             => $request->kesiapan_mulai_bekerja,
            'relation_person'       => $request->kenalan_didalam_perusahaan,
            'cv'                    => $request->cv,
            'status'                => 'processed',
            'position_id'           => $request->position_id,
            'user_id'               => Auth::User()->id,
        ]);
        foreach ($request->riwayat_pendidikan as $value) {
            Education::create([
                'application_id'    => $application->id,
                'university'        => $application->nama_universitas,
                'organizations'     => $application->organiasi_diikuti,
                
            ]);
        }
        return redirect()->back();
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
