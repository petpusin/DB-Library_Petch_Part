<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignMultiAddr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('multi_addrs', function (Blueprint $table) {
          $table->foreign('customerNumber')->references('customerNumber')->on('customers')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('multi_addrs', function (Blueprint $table) {
          $table->dropForeign(['customerNumber']);
      });
    }
}
