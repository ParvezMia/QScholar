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
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id();
            $table->uuid('scholarship_uuid')->unique();
            $table->foreignId('scholarship_organization_id')->constrained('organizations')->onDelete('cascade');
            $table->string('scholarship_name');
            $table->text('scholarship_description')->nullable();
            $table->decimal('scholarship_amount', 10, 2);
            $table->date('scholarship_application_deadline');
            $table->text('scholarship_eligibility_criteria')->nullable();
            $table->string('created_by');
            $table->string('updated_by')->nullable()->default(null);
            $table->string('deleted_by')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations_scholarship');
    }
};
