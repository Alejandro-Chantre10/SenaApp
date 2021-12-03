<?php

namespace App\Http\Controllers;



use App\Models\Diagnostic;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnostics = Diagnostic::simplePaginate(4);
        return view('diagnostic.index',compact('diagnostics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diagnostic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diagno = new Diagnostic;
        $diagno->fecha = $request->fecha;
        $diagno->hora = $diagno->hora;
        $diagno->descripcion = $request->descripcion;
        $diagno->resultado = $request->resultado;
        return redirect()->route('diagnostic.create');

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
    public function edit( Diagnostic $diagno)
    {
        return view('diagnostic.edit',compact('diagno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Diagnostic $diagno)
    {
        $diagno->fecha = $request->fecha;
        $diagno->hora = $diagno->hora;
        $diagno->descripcion = $request->descripcion;
        $diagno->resultado = $request->resultado;
        return redirect()->route('diagnostic.create');
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
