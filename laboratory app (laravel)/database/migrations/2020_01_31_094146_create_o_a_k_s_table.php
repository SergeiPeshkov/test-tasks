<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOAKSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o_a_k_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();        
            $table->integer('patient_id')->unsigned()->nullable();
            $table->char('analiseType', 200);
            $table->date('dateVisit');
            $table->date('dateResult');          
            $table->integer('contract_number')->unsigned();
            $table->char('patient_name',20);
            $table->char('patient_lastname',20);
            $table->char('patient_patronymic',20);
            $table->integer('age',3)->nullable();
            $table->decimal('WBC', 8, 2)->nullable();
            $table->decimal('NEU', 8, 2)->nullable();
            $table->decimal('LYM', 8, 2)->nullable();
            $table->decimal('MON', 8, 2)->nullable();
            $table->decimal('EOS', 8, 2)->nullable();
            $table->decimal('BAS', 8, 2)->nullable();
            $table->decimal('RBC', 8, 2)->nullable();
            $table->decimal('HGB', 8, 2)->nullable();
            $table->decimal('HCT', 8, 2)->nullable();
            $table->decimal('MCV', 8, 2)->nullable();
            $table->decimal('MCH', 8, 2)->nullable();
            $table->decimal('MCHC', 8, 2)->nullable();
            $table->decimal('RDW_CV', 8, 2)->nullable();
            $table->decimal('PLT', 8, 2)->nullable();
            $table->decimal('MPV', 8, 2)->nullable();
            $table->decimal('RDW', 8, 2)->nullable();
            $table->decimal('PST', 8, 2)->nullable();
            $table->decimal('anicitoz', 8, 2)->nullable();
            $table->decimal('anizohromiya', 8, 2)->nullable();
            $table->decimal('poikilocitos', 8, 2)->nullable();
            $table->decimal('RBC_BZ', 8, 2)->nullable();
            $table->decimal('polihromat', 8, 2)->nullable();
            $table->decimal('joli', 8, 2)->nullable();
            $table->decimal('eritronormoblasty', 8, 2)->nullable();
            $table->decimal('hipersegment_yader', 8, 2)->nullable();
            $table->decimal('blasty', 8, 2)->nullable();
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
        Schema::dropIfExists('o_a_k_s');
    }
}
