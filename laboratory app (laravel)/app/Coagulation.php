<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coagulation extends Model
{
    protected $fillable=
    ['patient_id',
    'patient_name',
     'patient_lastname',
     'patient_patronymic',
     'age',
     'analiseType',
     'contract_number',
     'dateVisit', 
     'pro_index',
     'mno',
     'pro_time',
     'achtv',    
     'fibrinogenA',     
     'tromb_time',
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];

}
