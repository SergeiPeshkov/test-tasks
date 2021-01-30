<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mbelok extends Model
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
     'gr',     
     'count',
     'specific_weight',
     'protein',
     'daily_protein',
     'dateResult',
     'analyser',     
     'laborant',
    ];


}
