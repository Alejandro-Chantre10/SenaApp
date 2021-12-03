<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;

    public function usuario(){
        return $this->hasMany('App\Models\User','id_user','id_apprentice');
    }

    public function datosMedicos(){
        return $this->hasMany('App\Models\MedcialData','id_medical_data','id_apprentice');
    }

    public function datosPersonales(){
        return $this->hasMany('App\Models\PersonalData','id_personal_data','id_apprentice');
    }

    public function programaFormacion(){
        return $this->hasMany('App\Models\TrainingProgram','id_training_program','id_apprentice');
    }
}
