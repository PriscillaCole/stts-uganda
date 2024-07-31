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
        Schema::create('form_qds', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('applicant_id')->unique();
            $table->string('name_of_applicant');
            $table->text('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('farm_location')->nullable();
            $table->text('premises_location')->nullable();
            $table->integer('years_of_expirience')->nullable();
            $table->boolean('have_been_qds')->default(false);
            $table->string('previous_grower_number')->nullable();
            $table->boolean('have_adequate_storage_facility')->default(false);
            $table->text('cropping_history')->nullable();
            $table->boolean('have_adequate_isolation')->default(false);
            $table->integer('isolation_distance')->nullable();
            $table->boolean('have_adequate_labor')->default(false);
            $table->integer('number_of_labors')->nullable();
            $table->boolean('aware_of_minimum_standards')->default(false);
            $table->string('signature_of_applicant')->nullable();
            $table->text('recommendation')->nullable();
            $table->text('certification')->nullable();
            $table->string('status')->default('pending');
            $table->date('valid_from')->nullable();
            $table->date('valid_until')->nullable();
            $table->unsignedInteger('inspector_id')->nullable();
            $table->string('grower_number')->nullable();
            $table->string('registration_number')->unique();
            $table->timestamps(); 

            $table->foreign('inspector_id')->references('id')->on('admin_users')->onDelete('set null');
            $table->foreign('applicant_id')->references('id')->on('admin_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_qds');
    }
};
