<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGelmintiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gelminties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('patient_id')->unsigned()->nullable();
            $table->char('patient_name',20);
            $table->char('patient_lastname',20);
            $table->char('patient_patronymic',20)->nullable();
            $table->char('analiseType');
            $table->integer('contract_number');
            $table->integer('age')->nullable();
            $table->date('dateVisit');   
            $table->char('helminth_eggs')->nullable();
            $table->char('protozoa')->nullable();
            $table->char('occultBloodReaction')->nullable();
            $table->char('sterkobilin')->nullable();
            $table->char('bilirubin')->nullable();
            $table->date('dateResult');
            $table->char('analyser')->nullable();
            $table->char('laborant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gelminties');
    }
}
