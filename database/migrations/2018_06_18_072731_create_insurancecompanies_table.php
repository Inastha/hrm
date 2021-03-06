<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsurancecompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('insurancecompanies')){
        Schema::create('insurancecompanies', function (Blueprint $table) {
            $table->increments('icid');
            $table->integer('ictype');
            $table->string('icname',100);
            $table->string('icaddress',100);
            $table->string('iclogo',100);
            $table->string('icphone',20);
            $table->string('icfax',30);
            $table->string('icurl',30);
            $table->string('icemail',30);
            $table->boolean('icstatus');
            $table->timestamps();
        });
    }
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurancecompanies');
    }
}
