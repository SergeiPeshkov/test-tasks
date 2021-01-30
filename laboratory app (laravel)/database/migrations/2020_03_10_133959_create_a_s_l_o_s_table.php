<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateASLOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_s_l_o_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('patient_id')->nullable();
            $table->char('patient_name',20);
            $table->char('patient_lastname',20);
            $table->char('patient_patronymic',20)->nullable();
            $table->integer('age')->nullable();
            $table->char('analiseType',200);
            $table->integer('contract_number');
            $table->date('dateVisit');
            $table->decimal('result');
            $table->date('dateResult');
            $table->char('analyser',20);
            $table->char('laborant',50);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('a_s_l_o_s');
    }
}
