<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('feces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('patient_id')->unsigned()->nullable();
            $table->char('patient_name',20);
            $table->char('patient_lastname',20);
            $table->char('patient_patronymic',20)->nullable();
            $table->char('analiseType');
            $table->integer('contract_number');
            $table->integer('age')->nullable();
            $table->string('diagnosis')->nullable();
            $table->date('dateVisit');
            $table->char('count')->nullable();
            $table->char('forma')->nullable();
            $table->char('consistency')->nullable();
            $table->char('color')->nullable();
            $table->char('smell')->nullable();
            $table->char('nfood')->nullable();
            $table->char('slime')->nullable();
            $table->char('blood')->nullable();
            $table->char('pus')->nullable();
            $table->char('cloth')->nullable();
            $table->char('conkrementy')->nullable();           
            $table->char('food')->nullable();
            $table->char('muscle_fibers_notchange')->nullable();
            $table->char('muscle_fibers_change')->nullable();
            $table->char('vegetable_fiber')->nullable();
            $table->char('neutral_fat')->nullable();
            $table->char('fatty_acid')->nullable();
            $table->char('soap')->nullable();
            $table->char('crystals')->nullable();       
            $table->char('micro_slime')->nullable();
            $table->char('epithelial_cells')->nullable();
            $table->char('leukocyte')->nullable();
            $table->char('erythrocyte')->nullable();
            $table->char('elementsWithSignsOfMalignancy')->nullable();
            $table->char('iodophilic_flora')->nullable();
            $table->char('protozoa')->nullable();
            $table->char('helminth_eggs')->nullable();
            $table->char('fungus_like_elements')->nullable();
            $table->string('conclusion')->nullable();      
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
        Schema::dropIfExists('feces');
    }
}
