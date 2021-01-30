<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSexHormonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sex_hormones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('patient_id')->unsigned()->nullable();
            $table->char('patient_name',20);
            $table->char('patient_lastname',20);
            $table->char('patient_patronymic',20);
            $table->char('analiseType');
            $table->integer('contract_number');
            $table->date('dateVisit');
            $table->decimal('prolaktin')->nullable();
            $table->decimal('progesteron')->nullable();
            $table->decimal('estradiol')->nullable();
            $table->decimal('folukulo_hormon')->nullable();
            $table->decimal('luten_hormon')->nullable(); 
            $table->decimal('testosteron')->nullable(); 
            $table->decimal('testosteron_ob')->nullable(); 
            $table->decimal('testosteron_free')->nullable(); 
            $table->date('dateResult');
            $table->char('analyser');
            $table->char('laborant');
            $table->char('doctor');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sex_hormones');
    }
}
