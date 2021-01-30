<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PSA extends Model
{
    protected $fillable=
    ['patient_id',
    'patient_name',
     'patient_lastname',
     'patient_patronymic',
     'analiseType',
     'contract_number',
     'dateVisit', 
     'generalPSA',     
     'freePSA',
     'relationPSA',
     'laborant',
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];

}
