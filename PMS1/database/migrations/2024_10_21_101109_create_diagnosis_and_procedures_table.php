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
        Schema::create('diagnosis_and_procedures', function (Blueprint $table) {
            $table->id('diagnosis_and_procedue_id');
            $table->date('diagnosis_and_procedure_date')->nullable()->comment('mm-dd-yyyy');
            $table->string('diagnosis_and_procedure_time', 8)->nullable()->comment('hh:mm am/pm');
            $table->text('impairment')->nullable();
            $table->text('activity_restriction')->nullable();
            $table->text('personal_factor')->nullable();
            $table->text('environmental_factor')->nullable();
            $table->text('diagnosis')->nullable();
            $table->text('prognosis')->nullable();
            //
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('emergency_patient_id')->nullable();

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('emergency_patient_id')->references('emergency_patient_id')->on('emergency_patients')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnosis_and_procedures');
    }
};
