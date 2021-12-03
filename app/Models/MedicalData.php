<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalData extends Model
{
    use HasFactory;

    public function enfermedades(){
        return $this->hasMany('App\Models\Disease','id_disease','id_medical_data');
    }

    public function acudientes(){
    return $this->hasMany('App\Models\Attendant','id_attendant','id_medical_data');
}
}

