<?php

namespace App\Http\Controllers;

use App\Models\MedicalData;
use Illuminate\Http\Request;

class MedicalDataController extends Controller{

public function index()
{
    $medicals = MedicalData::simplePaginate(2);
    return view('medical_data.index',compact('medicals'));
}

public function create()
{
return view('medical_data.create');
}


public function store(Request $request)
{
    $medical = new MedicalData;
    $medical->eps = $request->eps;
    $medical->rh = $request->rh;
    $medical->ultimo_control = $request->ultimo_control;
    session()->flash('message', 'Datos Medicos creados satisfactoriamente!');
    return redirect()->route('medical_data.create');



}


public function show($id)
{

}


public function edit($id)
{

}

public function update(Request $request, MedicalData $medical)
{
    $medical->eps = $request->eps;
    $medical->rh = $request->rh;
    $medical->ultimo_control = $request->ultimo_control;
    session()->flash('message', 'Datos Medicos actualizados satisfactoriamente!');
    return redirect()->route('medical_data.create');



}

public function destroy($id)
{

}
}
