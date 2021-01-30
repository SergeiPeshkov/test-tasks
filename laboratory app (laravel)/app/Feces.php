<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feces extends Model
{
    //
    protected $fillable=
    ['patient_id',
    'patient_name',
     'patient_lastname',
     'patient_patronymic',
     'analiseType',
     'contract_number',
     'age',
     'diagnosis',
     'dateVisit',  
     'count',
     'forma',
     'consistency',
     'color',
     'smell',
     'nfood',
     'slime',
     'blood',
     'pus',
     'cloth',
     'conkrementy',
     'food',
     'muscle_fibers_notchange',
     'muscle_fibers_change',
     'vegetable_fiber',
     'neutral_fat',
     'fatty_acid',
     'soap',
     'crystals',
     'micro_slime',
     'epithelial_cells',
     'leukocyte',
     'erythrocyte',
     'elementsWithSignsOfMalignancy',
     'iodophilic_flora',
     'protozoa',
     'helminth_eggs',
     'fungus_like_elements',
     'conclusion',    
     'laborant',
     'dateResult',
     'analyser',  
    
    ];

}
