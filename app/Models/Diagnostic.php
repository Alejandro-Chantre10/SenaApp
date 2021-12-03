<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;

    public function medico(){
    return $this->hasMany('App\Models\Doctor','id_doctor','id_diagnosis');
    }

    public function aprendiz(){
        return $this->hasMany('App\Models\Apprentice','id_apprentice','id_diagnosis');
        }
}
