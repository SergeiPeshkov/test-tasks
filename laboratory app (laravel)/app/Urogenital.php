<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urogenital extends Model
{
    protected $fillable=
    ['patient_id',
    'patient_name',
     'patient_lastname',
     'patient_patronymic',
     'analiseType',
     'contract_number',    
     'dateVisit',  
     'hlamidii_ygm',  
     'hlamidii_ygg',
     'ureplasma',
     'mikoplasma',
     'laborant',
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];
}
