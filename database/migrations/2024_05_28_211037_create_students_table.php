<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->uuid('student_uuid');
            $table->string('student_first_name');
            $table->string('student_last_name');
            $table->enum('student_education_level', ['highschool', 'college', 'university']);
            $table->enum('student_last_degree', ['highschool', 'college', 'university']);
            $table->string('student_degree_file_path')->nullable();
            $table->string('student_contact_number')->nullable();
            $table->text('student_address')->nullable();
            $table->string('student_image')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
