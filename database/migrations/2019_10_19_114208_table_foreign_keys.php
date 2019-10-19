<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('employees', function (Blueprint $table) {
        //     // $table->foreign('reportsTo')->references('employeeNumber')->on('employees')->onDelete('cascade');
        //     // $table->foreign('officeCode')->references('officeCode')->on('offices')->onDelete('cascade');
           
        // });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('employees');
        // Schema::table('employees', function (Blueprint $table) {
        //     $table->dropIndex(['reportsTo']);
        //     $table->dropIndex(['officeCode']); // Drops index 'geo_state_index'
        // });
    }
}
