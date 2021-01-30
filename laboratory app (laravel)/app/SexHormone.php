<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SexHormone extends Model
{
    //
protected $fillable=
    ['patient_id',
    'patient_name',
     'patient_lastname',
     'patient_patronymic',
     'sex',
     'age',
     'analiseType',
     'contract_number',
     'dateVisit', 
     'prolaktin',
     'progesteron',
     'estradiol',
     'folukulo_hormon',
     'luten_hormon',
     'testosteron', 
     'testosteron_ob',
     'testosteron_free',
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];
}
