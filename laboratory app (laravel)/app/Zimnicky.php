<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zimnicky extends Model
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
     'countFluid',
     'h1',
     'relative_density1',
     'count1',
     'h2',
     'relative_density2',
     'count2',
     'h3',
     'relative_density3',
     'count3',
     'h4',
     'relative_density4',
     'count4',
     'h5',
     'relative_density5',
     'count5',
     'h6',
     'relative_density6',
     'count6',
     'h7',
     'relative_density7',
     'count7',
     'h8',
     'relative_density8',
     'count8',
     'dateResult',
     'analyser',     
     'laborant',
    ];

}
