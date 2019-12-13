<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderAddrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('order_addrs', function (Blueprint $table) {
        $table->integer('orderNumber');
        $table->string('addressLine1');
        $table->string('addressLine2')->nullable();
        $table->string('city');
        $table->string('state')->nullable();
        $table->string('postalCode')->nullable();
        $table->string('country');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_addrs');
    }
}
