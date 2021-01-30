<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeptidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peptids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('patient_id')->unsigned()->nullable();
            $table->char('patient_name',20);
            $table->char('patient_lastname',20);
            $table->char('patient_patronymic',20);
            $table->char('analiseType');
            $table->integer('contract_number');
            $table->date('dateVisit');
            $table->decimal('a_ssr')->nullable();                    
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
        Schema::dropIfExists('peptids');
    }
}
