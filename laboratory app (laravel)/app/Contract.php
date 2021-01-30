<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable=['patient_id','number', 'sum', 'sumInCheck', 'status'];

   
}

