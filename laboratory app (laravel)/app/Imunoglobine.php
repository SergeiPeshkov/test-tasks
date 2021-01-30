<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imunoglobine extends Model
{
    protected $fillable=
    ['patient_id',
    'patient_name',
     'patient_lastname',
     'patient_patronymic',
     'analiseType',
     'contract_number',
     'dateVisit', 
     'imE',
     'imG',
     'imA',
     'imM',
     'laborant',
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];

}
