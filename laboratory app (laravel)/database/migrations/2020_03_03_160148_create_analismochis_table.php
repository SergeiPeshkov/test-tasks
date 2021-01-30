<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalismochisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analismochis', function (Blueprint $table) {
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
            $table->char('color')->nullable();  
            $table->decimal('relative_density')->nullable(); 
            $table->char('transparency')->nullable();  
            $table->decimal('reactionPh')->nullable();  
            $table->decimal('protein')->nullable();  
            $table->char('glukoza')->nullable();  
            $table->char('aceton')->nullable();            
            $table->char('bile_pigments')->nullable();
            $table->char('epithelium_flat')->nullable();
            $table->char('epithelium_transition')->nullable();
            $table->char('epithelium_renal')->nullable();   
            $table->char('leukocyte')->nullable();  
            $table->char('erythrocyte_nochange')->nullable();
            $table->char('erythrocyte_change')->nullable();
            $table->char('cylinders_hyaline')->nullable();
            $table->char('cylinders_grainy')->nullable();          
            $table->char('slime')->nullable();
            $table->char('salt')->nullable();
            $table->char('bacterias')->nullable();           
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
        Schema::dropIfExists('analismochis');
    }
}
