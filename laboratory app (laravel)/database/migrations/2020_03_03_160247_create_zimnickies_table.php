<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZimnickiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zimnickies', function (Blueprint $table) {
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
            $table->decimal('countFluid')->nullable();    
            $table->char('h1')->nullable();
            $table->char('relative_density1')->nullable();
            $table->char('count1')->nullable();
            $table->char('h2')->nullable();
            $table->char('relative_density2')->nullable();
            $table->char('count2')->nullable();
            $table->char('h3')->nullable();
            $table->char('relative_density3')->nullable();
            $table->char('count3')->nullable();
            $table->char('h4')->nullable();
            $table->char('relative_density4')->nullable();
            $table->char('count4')->nullable();
            $table->char('h5')->nullable();
            $table->char('relative_density5')->nullable();
            $table->char('count5')->nullable();
            $table->char('h6')->nullable();
            $table->char('relative_density6')->nullable();
            $table->char('count6')->nullable();
            $table->char('h7')->nullable();
            $table->char('relative_density7')->nullable();
            $table->char('count7')->nullable();
            $table->char('h8')->nullable();
            $table->char('relative_density8')->nullable();
            $table->char('count8')->nullable();            
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
        Schema::dropIfExists('zimnickies');
    }
}
