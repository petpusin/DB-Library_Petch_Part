<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('employeeNumber');
            $table->string('email');
            $table->string('Lastname',50);
            $table->string('Firstname',50);
            $table->string('extension', 50);
            $table->string('officeCode', 10);
            $table->unsignedinteger('reportsTo');
            $table->string('jobTitle', 50);
           
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
