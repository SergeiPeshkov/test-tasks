<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insuline extends Model
{
    protected $fillable=
    ['patient_id',
    'patient_name',
     'patient_lastname',
     'patient_patronymic',
     'analiseType',
     'contract_number',
     'dateVisit', 
     'insuline',
     'indexHoma',
     'laborant',
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];

}
