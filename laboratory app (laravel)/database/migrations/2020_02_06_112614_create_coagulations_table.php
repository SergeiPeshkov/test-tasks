<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoagulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coagulations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('patient_id')->unsigned()->nullable();
            $table->char('patient_name',20);
            $table->char('patient_lastname',20);
            $table->char('patient_patronymic',20);
            $table->integer('age',3);
            $table->char('analiseType',200);
            $table->integer('contract_number');
            $table->date('dateVisit');
            $table->decimal('pro_time')->nullable();
            $table->decimal('pro_index')->nullable();
            $table->decimal('mno')->nullable();
            $table->decimal('fibrinogenA')->nullable();
            $table->decimal('achtv')->nullable();    
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
        Schema::dropIfExists('coagulations');
    }
}
