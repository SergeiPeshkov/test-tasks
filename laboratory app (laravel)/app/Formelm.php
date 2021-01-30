<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formelm extends Model
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
     'leukocyte',
     'erythrocyte',
     'cylinders',
     'dateResult',
     'analyser',     
     'laborant',
    ];

} 
