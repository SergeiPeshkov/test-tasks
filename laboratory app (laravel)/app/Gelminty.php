<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gelminty extends Model
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
     'helminth_eggs',
     'protozoa',
     'occultBloodReaction',
     'sterkobilin',
     'bilirubin',
     'dateResult',
     'analyser',     
     'laborant',
    ];

}
