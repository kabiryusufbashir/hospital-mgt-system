<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bios', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('bios');
    }
}
