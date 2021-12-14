@extends('adminlte::page')

@section('content')
    <div class="fondo">

        <h1> EDITAR DATOS PERSONALES</h1>
        <form action="{{ route('registro.update', $personal->id) }}" class="form-row" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container">
                <div class="mb-6">
                    <label for="nombres" class="form-label ">Nombres</label><br />
                    <input type="text" name="nombres" value="{{ $personal->nombres }}" class="form-control" />
                </div>
                <br />
                <div class="mb-6">
                    <label for="apellidos" class="form-label ">Apellidos</label><br />
                    <input type="text" name="apellidos" value="{{ $personal->apellidos }}" class="form-control" />
                </div>
                <br />
                <div class="mb-6">
                    <label for="email" class="form-label ">Email</label><br />
                    <input type="text" name="email" value="{{ $personal->email }}" class="form-control" />
                </div>
                <div class="mb-6">
                    <label for="pasword" class="form-label ">Password</label><br />
                    <input type="text" name="password" value="{{ $personal->password }}" class="form-control" />
                </div>
                <div class="mb-6">
                    <label for="tipo_documento" class="form-label">Tipo Documento</label><br />
                    <select class="form-select-sm" name="tipo_documento" value="{{ $personal->tipo_documento }}">
                        <option>Tarjeta identidad</option>
                        <option>Cedula</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="numero_documento" class="form-label date">Número documento</label><br />
                    <input type="number" name="numero_documento" value="{{ $personal->numero_documento }}"
                        class="form-control" />
                </div>
                <div class="mb-6">
                    <label for="edad" class="form-label date">Edad</label><br />
                    <input type="number" name="edad" value="{{ $personal->edad }}" class="form-control" />
                </div>

                <div class="mb-6">
                    <label for="fecha_nacimiento" class="form-label date">Fecha Nacimiento</label><br />
                    <input type="date" name="fecha_nacimiento" value="{{ $personal->fecha_nacimiento }}"
                        class="form-control" />
                </div>
                <br />
                <div class="mb-6">
                    <label for="genero" class="form-label">Género</label><br />
                    <select class="form-select-sm" name="genero" value="{{ $personal->genero }}">
                        <option>Masculino</option>
                        <option>Femenino</option>
                        <option>Indefinido</option>
                    </select>
                </div>
                <br />
                <div class="mb-6">
                    <label for="celular" class="form-label">Celular</label><br />
                    <input type="number" name="celular" value="{{ $personal->celular }}" class="form-control" />
                </div>
                <button class="btn btn-primary btn-block" type="submit">Insertar</button>
        </form>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style type="text/css">

        *{
            margin: 0;
            padding: 0;
        }
        .form-control,
        .form-select-sm {
            background-color: rgb(58, 10, 10);
            opacity: 0.85;
            padding: 0 20px;
            box-shadow: 0px 0px 5px rgba(58, 64, 73, 1);
            height: 30px;
            width: 300px;
        }

        h1 {
            margin-left: 34%;
        }

        .fondo {
            background-image: url("/image/fondo.jpg");
            width: 100%;
            height: 100%;
            padding: 200px;
            background-position: relative;


        }

        .form{
            background-color: rgba(9, 18, 32, 1);
            border-radius: 5%;
            margin-left: 200px;
            margin-right: 200px;        }


        #boton {
            height: 40px;
            width: 170px;
            border-radius: 5%;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 80px;
            background: rgb(255, 255, 255);
            color: black;
            margin-left: 40%;
        }

        .main-sections {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

    </style>
@stop

@section('js')
@stop
