<?php

namespace App\Http\Controllers;

use App\Models\PersonalData;
use Illuminate\Http\Request;

class PersonalDataController extends Controller
{

    public function index()
    {
        $personals = PersonalData::all();
        return view('registro.index',compact('personals'));
    }

    public function create()
    {
        return view('registro.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'genero'=>'required',
            'email'=>'required',
            'password'=>'required',
            'tipo_documento'=>'required',
            'numero_documento'=>'required',
            'edad'=>'required',
            'fecha_nacimiento'=>'required',
            'celular'=>'required',
        ]);
        $personal = new PersonalData;
        $personal->nombres = $request->nombres;
        $personal->apellidos =  $request->apellidos;
        $personal->genero = $request->genero;
        $personal->email = $request->email;
        $personal->password = $request->password;
        $personal->tipo_documento = $request->tipo_documento;
        $personal->numero_documento =  $request->numero_documento;
        $personal->edad = $request->edad;
        $personal->fecha_nacimiento = $request->fecha_nacimiento;
        $personal->celular = $request->celular;

        // return $personal;

        $personal->save();
        return redirect()->route('registro.create');

    }


    public function show()
    {

    }


    public function edit($id)
    {
        $personal = PersonalData::findOrFail($id);
        return view('registro.edit',compact($personal));
    }

    public function update(Request $request, $id)
    {
        $personal= request();
        PersonalData::where('id','=',$id)->update($personal);
        $personal=PersonalData::findOrFail($id);
        return view('registro.edit',compact('personal'));
        // $personal->nombres = $request->nombres;
        // $personal->apellidos =  $request->apellidos;
        // $personal->genero = $request->genero;
        // $personal->email = $request->email;
        // $personal->password = $request->password;
        // $personal->tipo_documento = $request->tipo_documento;
        // $personal->num_documento =  $request->num_documneto;
        // $personal->edad = $request->edad;
        // $personal->fecha_nacimiento = $request->fecha_nacimiento;

        // $personal->celular = $request->celular;

        // $personal->save();

        // return redirect()->route('registro.index');


    }

    public function destroy(PersonalData $personal)
    {
        $personal->delte();
        return redirect()->route('registro.index');
    }
}
