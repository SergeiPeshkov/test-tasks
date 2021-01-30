<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sgom extends Model
{
    protected $fillable=
    ['patient_id',
    'patient_name',
     'patient_lastname',
     'patient_patronymic',    
     'analiseType',
     'contract_number',
     'age',   
     'dateVisit', 
     'psa',
     'testosteron',   
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];
}

