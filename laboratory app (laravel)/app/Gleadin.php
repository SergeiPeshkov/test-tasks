<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gleadin extends Model
{
    protected $fillable=
    ['patient_id',
    'patient_name',
     'patient_lastname',
     'patient_patronymic',
     'analiseType',
     'contract_number',
     'dateVisit', 
     'anti_gliadin',
     'laborant',
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];
}
