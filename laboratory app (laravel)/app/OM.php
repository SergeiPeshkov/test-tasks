<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OM extends Model
{
    //
    protected $fillable=
    ['patient_id',
    'patient_name',
     'patient_lastname',
     'patient_patronymic',
     'age',
     'sex',
     'analiseType',
     'contract_number',
     'dateVisit', 
     'afp',
     'sa242',
     'rea',
     'sa125',
     'he4',
     'psa',
     'sa153',
     'sa199',
     'sa724',   
     'laborant',
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];
}
