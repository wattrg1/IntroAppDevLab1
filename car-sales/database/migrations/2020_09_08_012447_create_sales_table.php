<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
          $table->bigIncrements('id');
     $table->timestamps();
     $table->string('user_id');
     $table->unsignedBigInteger('car_id');
     $table->foreign('car_id')->references('id')->on('cars');
     $table->date('purchase_date');
  $table->decimal('purchase_price', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
