<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biohimy extends Model
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
     'alt',
     'ast',
     'bilirubin_ob',
     'bilirubin_pr',
     'bilirubin_npr',
     'mochevina',
     'kreatinin',
     'belok_ob',
     'albumin',
     'c_belok',
     'revmo_factor',
     'moch_kislota',
     'kalij',
     'natrij',
     'hloridy',
     'kalcij_ion',
     'kalcij_ob',
     'magnij',
     'zhelezo',
     'holesterin',
     'trigliceridy',
     'lpvp',
     'lpnp',
     'fostofaza',
     'ggt',
     'alfa_amilaza',
     'diastaza',
     'kfk',
     'ldg',
     'ferritin',
     'transferrin',
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];

}
