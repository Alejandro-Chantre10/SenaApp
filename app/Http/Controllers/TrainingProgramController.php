<?php

namespace App\Http\Controllers;

use App\Models\TrainingProgram;
use Illuminate\Http\Request;

class TrainingProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs =  TrainingProgram::simplePaginate(2);
        return view('training_program.index',compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('training_program.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $program =  new TrainingProgram;
        $program->nombre = $request->nombre;
        $program->ficha = $request->ficha;
        $program->nivel_academico = $request->nivel_acedemico;
        $program->fecha_inicio = $request->fecha_inicio;
        $program->fecha_fin = $request->fecha_fin;
        $program->etapa = $request->etapa;
        session()->flash('message', 'Programa creado satisfactoriamente!');
        return redirect()->route('training_program.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( TrainingProgram $program)
    {
        return view('training_program.edit',compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrainingProgram $program)
    {
        $program->nombre = $request->nombre;
        $program->ficha = $request->ficha;
        $program->nivel_academico = $request->nivel_acedemico;
        $program->fecha_inicio = $request->fecha_inicio;
        $program->fecha_fin = $request->fecha_fin;
        $program->etapa = $request->etapa;
        return redirect()->route('training_program.create');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
