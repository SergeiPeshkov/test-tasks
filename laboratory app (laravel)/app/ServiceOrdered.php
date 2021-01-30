<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceOrdered extends Model
{
    protected $fillable=['contract_number', 'patient_id','service_id','count'];
}
