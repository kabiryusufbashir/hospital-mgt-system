<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientdatarecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientdatarecords', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->string('weight');
            $table->string('height');
            $table->string('temperature');
            $table->string('bp');
            $table->text('complaints');
            $table->text('prescription');
            $table->text('doctorRemarks');
            $table->text('nurseRemarks');
            $table->text('pharmacistRemarks');
            $table->text('laboratoristRemarks');
            $table->integer('doctorId');
            $table->integer('nurseId');
            $table->integer('pharmacistId');
            $table->integer('laboratoristId');
            $table->integer('accountantId');
            $table->string('attendStatus');
            $table->timestamps();

            $table->index('patient_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patientdatarecords');
    }
}
