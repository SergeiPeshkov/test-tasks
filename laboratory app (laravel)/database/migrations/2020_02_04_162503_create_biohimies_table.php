<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiohimiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biohimies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('patient_id')->unsigned()->nullable();
            $table->char('patient_name',20);
            $table->char('patient_lastname',20);
            $table->char('patient_patronymic',20);
            $table->int('age',3)->nullable();
            $table->char('sex',20)->nullable();
            $table->char('analiseType',200);
            $table->integer('contract_number');
            $table->date('dateVisit');
            $table->decimal('alt', 8, 2)->nullable();
            $table->decimal('ast', 8, 2)->nullable();
            $table->decimal('bilirubin_ob', 8, 2)->nullable();
            $table->decimal('bilirubin_pr', 8, 2)->nullable();
            $table->decimal('bilirubin_npr', 8, 2)->nullable();
            $table->decimal('mochevina', 8, 2)->nullable();
            $table->decimal('kreatinin', 8, 2)->nullable();
            $table->decimal('belok_ob', 8, 2)->nullable();
            $table->decimal('albumin', 8, 2)->nullable();
            $table->decimal('c-belok', 8, 2)->nullable();
            $table->decimal('revmo_factor', 8, 2)->nullable();
            $table->decimal('moch_kislota', 8, 2)->nullable();
            $table->decimal('kalij', 8, 2)->nullable();
            $table->decimal('natrij', 8, 2)->nullable();
            $table->decimal('hloridy', 8, 2)->nullable();
            $table->decimal('kalcij_ion', 8, 2)->nullable();
            $table->decimal('kalcij_ob', 8, 2)->nullable();
            $table->decimal('magnij', 8, 2)->nullable();
            $table->decimal('zhelezo', 8, 2)->nullable();
            $table->decimal('holesterin', 8, 2)->nullable();
            $table->decimal('trigliceridy', 8, 2)->nullable();
            $table->decimal('lpvp', 8, 2)->nullable();
            $table->decimal('lpnp', 8, 2)->nullable();
            $table->decimal('fostofaza', 8, 2)->nullable();
            $table->decimal('ggt', 8, 2)->nullable();
            $table->decimal('alfa_amilaza', 8, 2)->nullable();
            $table->decimal('diastaza', 8, 2)->nullable();
            $table->decimal('kfk', 8, 2)->nullable();
            $table->decimal('ldg', 8, 2)->nullable();
            $table->char('analyser', 20);
            $table->char('laborant', 20);
            $table->char('doctor', 20);    

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biohimies');
    }
}
