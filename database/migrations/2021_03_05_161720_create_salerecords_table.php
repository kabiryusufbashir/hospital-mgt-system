<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalerecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salerecords', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            // $table->foreignId('user_id')->constrained()->onDelete('cascade'); //Accountant Id
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('user_id');
            $table->double('amount');
            $table->double('quantity');
            $table->double('discount');
            $table->double('grossTotal');
            $table->string('serviceType');
            $table->string('paymentMethod');
            $table->string('paymentStatus');
            $table->timestamps();

            $table->index('patient_id');
            $table->index('user_id');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salerecords');
    }
}
