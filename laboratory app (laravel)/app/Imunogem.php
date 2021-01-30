<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imunogem extends Model
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
     'group',
     'rh',
     'antiresus',
     'factor_kell',
     'fenotip',      
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];
}
