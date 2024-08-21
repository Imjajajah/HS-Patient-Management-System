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
        Schema::create('patients', function (Blueprint $table) {
            $table->id('patient_id');
            //
            $table->string('patient_type')->nullable()->comment('Inpatient, Outpatient');
            $table->string('first_name')->nullable()->fulltext();
            $table->string('middle_name')->nullable()->fulltext();
            $table->string('last_name')->nullable()->fulltext();
            $table->string('extension')->nullable()->fulltext();
            //
            $table->string('sex')->nullable()->comment('Male, Female');
            $table->string('civil_status')->nullable()->comment('Single, Divorce, Married');
            //
            $table->date('dob')->nullable()->comment('mm-dd-yyyy');
            //
            $table->string('phone')->nullable()->comment('because one phone number can be use for multiple patient from the same house');
            $table->string('email')->nullable()->comment('because one email can be use for multiple patient from the same house');
            $table->string('employment')->nullable()->comment('Employed, Unemployed, etc.');
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            //
            $table->text('street_address')->nullable();
            $table->text('street_address_2')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->text('zip')->nullable();
            //
            $table->string('emergency_first_name')->nullable();
            $table->string('emergency_middle_name')->nullable();
            $table->string('emergency_last_name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('emergency_phone')->nullable();
            $table->string('emergency_phone_2')->nullable();
            $table->string('emergency_email')->nullable()->comment('because one email can be use for multiple patient from the same house');
            //
            $table->text('reason_registration')->nullable();
            $table->text('additional_note')->nullable();
            $table->string('history_operation')->nullable()->comment('Yes, No');
            $table->text('history_note')->nullable();
            $table->string('current_condition')->nullable()->comment('Yes, No');
            $table->text('condition_note')->nullable();
            $table->string('taking_medications')->nullable()->comment('Yes, No');
            $table->text('medications_note')->nullable();
            $table->string('food_allergy')->nullable()->comment('Yes, No');
            $table->text('food_allergy_note')->nullable();
            $table->string('drug_allergy')->nullable()->comment('Yes, No');
            $table->text('drug_allergy_note')->nullable();
            $table->string('patient_smoke')->nullable()->comment('Yes, No');
            $table->string('patient_alcohol')->nullable()->comment('Yes, No');
            $table->string('family_history')->nullable();
            //
            $table->string('primary_holder')->nullable()->comment('Yes, No');
            $table->string('insurance_company')->nullable()->fulltext();
            $table->string('insurance_number')->nullable()->fulltext();
            $table->date('effective_date')->nullable()->comment('mm-dd-yyyy');
            $table->date('expiration_date')->nullable()->comment('mm-dd-yyyy');
            $table->string('plan_type')->nullable();
            $table->string('holder_first_name')->nullable()->fulltext();
            $table->string('holder_last_name')->nullable()->fulltext();
            $table->date('holder_dob')->nullable()->comment('mm-dd-yyyy');
            $table->string('holder_phone')->nullable();
            $table->string('holder_email')->nullable();
            $table->text('holder_street_address')->nullable();
            $table->text('holder_street_address_2')->nullable();
            $table->text('holder_city')->nullable();
            $table->text('holder_state')->nullable();
            $table->text('holder_zip')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
