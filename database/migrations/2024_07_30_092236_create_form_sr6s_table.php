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
        Schema::create('form_sr6s', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedInteger('applicant_id');
            $table->string('type');
            $table->string('name_of_applicant');
            $table->string('phone_number')->nullable();
            $table->text('address')->nullable();
            $table->text('premises_location')->nullable();
            $table->integer('years_of_expirience')->nullable();
            $table->boolean('seed_grower_in_past')->default(false);
            $table->string('grower_number')->nullable();
            $table->boolean('have_adequate_storage')->default(false);
            $table->string('previous_grower_number')->nullable();
            $table->text('cropping_histroy')->nullable();
            $table->boolean('have_adequate_isolation')->default(false);
            $table->boolean('have_adequate_labor')->default(false);
            $table->boolean('aware_of_minimum_standards')->default(false);
            $table->string('signature_of_applicant')->nullable();
            $table->string('status')->default('pending');
            $table->unsignedInteger('inspector_id')->nullable();
            $table->text('status_comment')->nullable();
            $table->string('registration_number')->unique();
            $table->date('valid_from')->nullable();
            $table->date('valid_until')->nullable();
            $table->timestamps(); 
            $table->softDeletes();

            $table->foreign('inspector_id')->references('id')->on('admin_users')->onDelete('set null');
            $table->foreign('applicant_id')->references('id')->on('admin_users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_sr6s');
    }
};
