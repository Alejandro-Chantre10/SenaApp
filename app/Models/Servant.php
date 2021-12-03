<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servant extends Model
{
    use HasFactory;

    public function usuario(){
        return $this->hasMany('App\Models\User','id_user','id_servant');
    }

    public function datosPersonales(){
        return $this->hasMany('App\Models\PersonalData','id_personal_data','id_servant');
    }
}
