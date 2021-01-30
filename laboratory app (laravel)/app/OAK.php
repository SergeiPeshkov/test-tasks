<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OAK extends Model
{
    protected $fillable=
    ['patient_id',
    'analiseType',
    'patient_name',
     'patient_lastname',
     'patient_patronymic',
     'age', 
     'contract_number',
     'dateVisit',
     'HGB',
     'RBC',
     'color',
     'retic',
     'PLT',
     'WBC', 
     'soe',     
     'mieloc',
     'metamieloc',
     'palyad',
     'segmentoyad',
     'EOS',
     'LYM',
     'MON',
     'BAS',
     'plasma',
     'HCT',
     'timeblood',
     'morfley',
     'hipersegment_yader',
     'toksogennaya_zernost',  
     'morferit',    
     'anicitoz',
     'poikilocitos',
     'RBC_BZ',   
     'joli',  
     'dateResult',
     'analyser',
     'laborant',
     'doctor'
    ];

   
}
