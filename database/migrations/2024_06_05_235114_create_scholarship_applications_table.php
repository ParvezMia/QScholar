<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('scholarship_applications', function (Blueprint $table) {
            $table->id();
            $table->string('scholarship_id');
            $table->string('applicant_name');
            $table->string('email');
            $table->string('phone');
            $table->date('dob');
            $table->text('address');
            $table->string('education_level');
            $table->string('gpa');
            $table->text('essay');
            $table->text('extra_curricular');
            $table->text('references');
            $table->string('file_path');
            $table->string('created_by');
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('scholarship_applications');
    }
}


