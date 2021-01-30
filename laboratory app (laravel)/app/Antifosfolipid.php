<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antifosfolipid extends Model
{
    protected $fillable=
    ['patient_id',
     'patient_name',
     'patient_lastname',
     'patient_patronymic',
     'analiseType',
     'contract_number',
     'dateVisit', 
     'lgg',
     'lgm',
     'laborant',
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];
}
