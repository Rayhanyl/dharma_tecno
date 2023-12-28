<?php

namespace Database\Seeders;

use App\Models\Application;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Application::create([
            'fullname'               => 'Rayhan yuda lesmana',
            'birthplace'             => 'Purwakarta',
            'birthdate'              => Carbon::now(),
            'identity_number'        => 12345678910,
            'religion'               => 'islam',
            'address'                => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nesciunt consequuntur officiis. Aliquam.',
            'residence_address'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nesciunt consequuntur officiis. Aliquam.',
            'active_phone'           => '+6285282205728',
            'job_histories'          => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nesciunt consequuntur officiis. Aliquam.',
            'leader_job_histories'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nesciunt consequuntur officiis. Aliquam.',
            'reason_to_apply'        => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nesciunt consequuntur officiis. Aliquam.',
            'salary_expectation'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nesciunt consequuntur officiis. Aliquam.',
            'facility_expectation'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nesciunt consequuntur officiis. Aliquam.',
            'relation_person'        => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nesciunt consequuntur officiis. Aliquam.',
            'work_date'              => Carbon::now(),
            'cv'                     => 'CV',
            'cv_ext'                 => '.pdf',
            'status'                 => 'processed',
            'interviewer_id'         => null,
            'position_id'            => 2,
            'user_id'                => 2
        ]);
    }
}
