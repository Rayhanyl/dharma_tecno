<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('birthplace');
            $table->date('birthdate');
            $table->string('identity_number');
            $table->enum('religion', ['islam', 'protestant', 'chatolic', 'confucius', 'buddha', 'hindu', 'jewish']);
            $table->text('address');
            $table->text('residence_address');
            $table->string('active_phone');
            $table->text('job_histories');
            $table->text('leader_job_histories');
            $table->string('reason_to_apply');
            $table->string('salary_expectation');
            $table->text('facility_expectation');
            $table->date('work_date');
            $table->string('relation_person');
            $table->string('cv');
            $table->enum('status', ['processed', 'approved', 'rejected', 'interviewed', 'accepted']);
            $table->foreignId('position_id');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
