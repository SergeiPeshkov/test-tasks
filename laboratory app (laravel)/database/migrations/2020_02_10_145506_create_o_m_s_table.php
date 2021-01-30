<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOMSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o_m_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('patient_id')->unsigned()->nullable();
            $table->char('patient_name',20);
            $table->char('patient_lastname',20);
            $table->char('patient_patronymic',20);
            $table->char('analiseType');
            $table->integer('contract_number');
            $table->date('dateVisit');
            $table->char('sex')->nullable();
            $table->integer('age',3)->nullable();
            $table->decimal('afp')->nullable();
            $table->decimal('sa242')->nullable();
            $table->decimal('rea')->nullable(); 
            $table->decimal('sa125')->nullable(); 
            $table->decimal('he4')->nullable();
            $table->decimal('psa')->nullable();
            $table->decimal('sa153')->nullable();
            $table->decimal('sa199')->nullable();
            $table->decimal('sa724')->nullable();
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
        Schema::dropIfExists('o_m_s');
    }
}
