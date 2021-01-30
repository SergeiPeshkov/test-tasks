<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peptid extends Model
{
    protected $fillable=
    ['patient_id',
    'patient_name',
     'patient_lastname',
     'patient_patronymic',
     'analiseType',
     'contract_number',    
     'dateVisit',  
     'a_ssr',    
     'peptid', 
     'laborant',
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];
}

