<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glukoza extends Model
{
    //
    protected $fillable=
    ['patient_id',
    'patient_name',
     'patient_lastname',
     'patient_patronymic',
     'analiseType',
     'contract_number',
     'dateVisit', 
     'age',
     'glukoza',
     'laborant',
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];

}
