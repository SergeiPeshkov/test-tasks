<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serum extends Model
{
    protected $fillable=
    ['patient_id',
    'patient_name',
     'patient_lastname',
     'patient_patronymic',
     'analiseType',
     'contract_number',
     'dateVisit',    
     't3',
     't3free',
     't4',
     't4free',
     'ttg',
     'atktg',
     'atktpo',     
     'laborant',
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];
}
