<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folkislota extends Model
{
    //
    protected $fillable=
    ['patient_id',
    'patient_name',
     'patient_lastname',
     'patient_patronymic',
     'analiseType',
     'contract_number',
     'dateVisit',    
     'folkislota',
     'b12',
     'laborant',
     'dateResult',
     'analyser',     
     'doctor'
    ];
}
