<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceOrderedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_ordereds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('contract_number')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->integer('count')->unsigned();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_ordereds');
    }
}
