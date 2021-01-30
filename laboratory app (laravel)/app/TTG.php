<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TTG extends Model
{
    protected $fillable=
    ['patient_id',
    'patient_name',
     'patient_lastname',
     'patient_patronymic',
     'analiseType',
     'contract_number',
     'dateVisit', 
     'ttg',       
     'laborant',
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];
}
