<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hpylory extends Model
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
     'hpylory',     
     'laborant',
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];
}
