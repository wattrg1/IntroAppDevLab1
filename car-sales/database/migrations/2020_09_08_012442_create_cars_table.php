<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
          $table->bigIncrements('id');
  $table->unsignedBigInteger('yard_id');
  $table->foreign('yard_id')->references('id')->on('yards');
  $table->string('type');
  $table->string('description');
  $table->decimal('price', 10, 2);
  $table->decimal('kms', 10, 2);
  $table->unsignedBigInteger('year');
    $table->string('image');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
