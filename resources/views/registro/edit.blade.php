@extends('adminlte::page')

@section('title','Admin')

@section('content_header')
<h1>Datos Personales</h1>
@stop

@section('content')

<form action="{{route('registro.update',$personal->id)}}" class="form-row" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container">
    <div class="mb-6">
        <label for="nombres" class="form-label ">Nombres</label><br />
        <input type="text" name="nombres" value="{{$personal->nombres}}" class="form-control" />
    </div>
    <br />
    <div class="mb-6">
        <label for="apellidos" class="form-label ">Apellidos</label><br />
        <input type="text" name="apellidos" value="{{$personal->apellidos}}" class="form-control" />
    </div>
    <br />
    <div class="mb-6">
        <label for="email" class="form-label ">Email</label><br />
        <input type="text" name="email" value="{{$personal->email}}" class="form-control" />
    </div>
    <div class="mb-6">
        <label for="pasword" class="form-label ">Password</label><br />
        <input type="text" name="password" value="{{$personal->password}}" class="form-control" />
    </div>
    <div class="mb-6">
        <label for="tipo_documento" class="form-label">Tipo Documento</label><br />
        <select class="form-select-sm" name="tipo_documento" value="{{$personal->tipo_documento}}">
            <option>Tarjeta identidad</option>
            <option>Cedula</option>
        </select>
    </div>
    <div class="mb-6">
        <label for="numero_documento" class="form-label date">Número documento</label><br />
        <input type="number" name="numero_documento" value="{{$personal->numero_documento}}" class="form-control" />
    </div>
    <div class="mb-6">
        <label for="edad" class="form-label date">Edad</label><br />
        <input type="number" name="edad" value="{{$personal->edad}}" class="form-control" />
    </div>

    <div class="mb-6">
        <label for="fecha_nacimiento" class="form-label date">Fecha Nacimiento</label><br />
        <input type="date" name="fecha_nacimiento" value="{{$personal->fecha_nacimiento}}" class="form-control" />
    </div>
    <br />
    <div class="mb-6">
        <label for="genero" class="form-label">Género</label><br />
        <select class="form-select-sm" name="genero" value="{{$personal->genero}}">
            <option>Masculino</option>
            <option>Femenino</option>
            <option>Indefinido</option>
        </select>
    </div>
    <br />
    <div class="mb-6">
        <label for="celular" class="form-label">Celular</label><br />
        <input type="number" name="celular" value="{{$personal->celular}}" class="form-control" />
    </div>
    <button class="btn btn-primary btn-block" type="submit">Insertar</button>
</form>
</div>

@stop

@section('css')
{{-- h1{
    color:
} --}}
@stop

@section('js')
@stop

