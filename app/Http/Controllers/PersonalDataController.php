<?php

namespace App\Http\Controllers;

use App\Models\PersonalData;
use Illuminate\Http\Request;

class PersonalDataController extends Controller
{

    public function index()
    {
        $personals = PersonalData::simplePaginate(2);
        return view('personal_data.index',compact('personals'));
    }

    public function create()
    {
        return view('personal_data.create');
    }


    public function store(Request $request)
    {
        $personal = new PersonalData;
        $personal->nombres = $request->nombres;
        $personal->apellidos =  $request->apellidos;
        $personal->tipo_documento = $request->tipo_documento;
        $personal->num_documento =  $request->num_documneto;
        $personal->edad = $request->edad;
        $personal->fecha_nacimiento = $request->fecha_nacimiento;
        $personal->genero = $request->genero;
        $personal->celular = $request->celular;
        $personal->foto = $request->foto;
        session()->flash('message', 'Datos Personales creados satisfactoriamente!');
        return redirect()->route('personal_data.create');


    }


    public function show($id)
    {

    }


    public function edit(PersonalData $personal)
    {
        return view('personal_data.edit',compact('personal'));
    }

    public function update(Request $request, PersonalData $personal)
    {
        $personal->nombres = $request->nombres;
        $personal->apellidos =  $request->apellidos;
        $personal->tipo_documento = $request->tipo_documento;
        $personal->num_documento =  $request->num_documneto;
        $personal->edad = $request->edad;
        $personal->fecha_nacimiento = $request->fecha_nacimiento;
        $personal->genero = $request->genero;
        $personal->celular = $request->celular;
        $personal->foto = $request->foto;
        session()->flash('message', 'Datos Personales actualizados satisfactoriamente!');
        return redirect()->route('personal_data.create');


    }

    public function destroy($id)
    {

    }
}
