<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gepatite extends Model
{
    
    protected $fillable=
    ['patient_id',
    'patient_name',
     'patient_lastname',
     'patient_patronymic',
     'analiseType',
     'contract_number',
     'dateVisit', 
     'age', 
     'folkislota',
     'hbsag',
     'ab_hbcor',
     'ab_hbcor_lgm',
     'hbeag',
     'ab_hbe',
     'ab_hdv',
     'ab_hcv', 
     'hcv', 
     'laborant',
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];
}
