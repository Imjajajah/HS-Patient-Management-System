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
        Schema::create('ep_assessments', function (Blueprint $table) {
            $table->id('ep_assessment_id');
            $table->date('ep_assessment_date')->nullable()->comment('mm-dd-yyyy');
            $table->string('ep_assessment_time', 8)->nullable()->comment('hh:mm am/pm');
            $table->text('ep_assessment_assessments')->nullable();
            $table->text('ep_assessment_summary')->nullable();
            //
            $table->string('ep_assessment_test')->nullable();
            $table->string('ep_assessment_test_instruction')->nullable();
            $table->string('ep_assessment_priority')->nullable();
            $table->string('order_test_file')->nullable();
            $table->string('ep_test_email')->nullable();
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
        Schema::dropIfExists('ep_assessments');
    }
};
