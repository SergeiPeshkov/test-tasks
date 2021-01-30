<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analismochi extends Model
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
     'color',
     'relative_density',
     'transparency',
     'reactionPh',
     'protein',
     'glukoza',
     'aceton',
     'bile_pigments',
     'epithelium_flat',
     'epithelium_transition',
     'epithelium_renal',
     'leukocyte',
     'erythrocyte_nochange',
     'erythrocyte_change',
     'cylinders_hyaline',
     'cylinders_grainy',
     'slime',
     'salt',
     'bacterias',  
     'dateResult',
     'analyser',     
     'laborant',
    ];


}
