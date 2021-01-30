<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->char('name');
            $table->char('lastname');
            $table->char('patronymic');
            $table->date('dateOfBirth');
            $table->integer('passportSeries')->nullable();
            $table->integer('passportNumber')->nullable();
            $table->char('issuedBy')->nullable();
            $table->date('issuedDate')->nullable();
            $table->char('phone')->nullable();
            $table->char('address')->nullable();  
            $table->char('nameMember');
            $table->char('lastnameMember');
            $table->char('patronymicMember');
            $table->date('dateOfBirthMember');
            $table->integer('passportSeriesMember')->nullable();
            $table->integer('passportNumberMember')->nullable();
            $table->char('issuedByMember')->nullable();
            $table->date('issuedDateMember')->nullable();
            $table->char('phoneMember')->nullable();
            $table->char('addressMember')->nullable(); 
            $table->char('operator')->nullable();
            $table->char('doctor')->nullable(); 
            $table->char('departament')->nullable();          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacients');
    }
}
