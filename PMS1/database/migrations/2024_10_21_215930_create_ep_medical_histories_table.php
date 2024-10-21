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
        Schema::create('ep_medical_histories', function (Blueprint $table) {
            $table->id('ep_medical_history_id');
            $table->date('ep_medical_history_date')->nullable()->comment('mm-dd-yyyy');
            $table->string('ep_medical_history_time', 8)->nullable()->comment('hh:mm am/pm');
            $table->text('ep_medical_history_diagnosis')->nullable();
            $table->text('ep_medical_history_treatment')->nullable();
            $table->text('ep_medical_history_surgery')->nullable();
            $table->text('ep_medical_history_medications')->nullable();
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
        Schema::dropIfExists('ep_medical_histories');
    }
};
