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
        Schema::create('form_sr4s', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('applicant_id');
            $table->string('type')->nullable();
            $table->string('name_of_applicant')->nullable();
            $table->string('address')->nullable();
            $table->string('company_initials')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('repackage_equipment')->nullable();
            $table->string('premises_location')->nullable();
            $table->string('expirience_in')->nullable();
            $table->integer('years_of_expirience')->nullable();
            $table->string('dealers_in')->nullable();
            $table->string('marketing_of')->nullable();
            $table->boolean('have_adequate_land')->nullable();
            $table->boolean('have_adequate_storage')->nullable();
            $table->boolean('have_adequate_equipment')->nullable();
            $table->boolean('have_contractual_agreement')->nullable();
            $table->boolean('have_adequate_field_officers')->nullable();
            $table->boolean('have_conversant_seed_matters')->nullable();
            $table->string('souce_of_seed')->nullable();
            $table->boolean('have_adequate_land_for_production')->nullable();
            $table->boolean('have_internal_quality_program')->nullable();
            $table->string('receipt')->nullable();
            $table->boolean('accept_declaration')->nullable();
            $table->string('status')->nullable();
            $table->unsignedInteger('inspector_id')->nullable();
            $table->date('valid_from')->nullable();
            $table->date('valid_until')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Add foreign key constraints
            $table->foreign('applicant_id')->references('id')->on('admin_users')->onDelete('cascade');
            $table->foreign('inspector_id')->references('id')->on('admin_users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_sr4s');
    }
};
