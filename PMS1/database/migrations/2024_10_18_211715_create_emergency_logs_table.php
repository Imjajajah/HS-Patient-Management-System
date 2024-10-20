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
        Schema::create('emergency_logs', function (Blueprint $table) {
            $table->id('emergency_logs_id');
            $table->date('emergency_date_logs')->nullable()->comment('mm-dd-yyyy');
            $table->string('emergency_time_logs', 8)->nullable()->comment('hh:mm am/pm');
            $table->string('patient_name'); // The patient affected
            $table->string('action'); // e.g., 'edited' or 'inputted'
            $table->string('field')->nullable(); // The field changed (like 'BP')
            $table->text('old_value')->nullable(); // Old value (for edits)
            $table->text('new_value')->nullable(); // New value (for edits)
            $table->text('message'); // Activity message for easy retrieval
            //
            $table->unsignedBigInteger('user_id'); // The user who made the change
            $table->unsignedBigInteger('emergency_patient_id');

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('emergency_patient_id')->references('emergency_patient_id')->on('emergency_patients')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
