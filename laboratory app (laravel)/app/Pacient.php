<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    //
    protected $fillable=[
    'name', 
    'lastname',
    'patronymic',
    'dateOfBirth',
    'passportSeries',
    'passportNumber',
    'issuedBy',
    'issuedDate', 
    'phone',
    'address',
    'nameMember',
    'dateOfBirthMember',
    'phoneMember',
    'addressMember',
    'passportSeriesMember', 
    'passportNumberMember',
    'issuedByMember',
    'issuedDateMember',
    'operator',
    'doctor',
    'departament'];

   
   
}

