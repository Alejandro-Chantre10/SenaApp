@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')


@stop

@section('content')
    <div class="container">

            <h1>Acudiente</h1>

            <form action="{{ route('attendant.store') }}" class="form-row" method="POST">
                @csrf
                <div class="container main-sections">
                    <section class="section1">
                        <div class="mb-6">
                            <label for="nombre" class="form-label ">Nombres</label>
                            <input type="text" name="nombre" class="form-control" />
                        </div>

                        <div class="mb-6">
                            <label for="identificacion" class="form-label ">Identificación</label>
                            <input type="number" name="identificacion" class="form-control" />
                        </div>

                        <div class="mb-6">
                            <label for="celular" class="form-label ">Celular</label>
                            <input type="number" name="celular" class="form-control" />
                        </div>
                           <div class="mb-6">
                            <label for="correo" class="form-label ">Correo</label>
                            <input type="eamil" name="correo" class="form-control" />
                        </div>
                    </section>
                </div>
                <button id="boton" class="btn btn-primary btn-block" type="submit">Insertar</button>
            </form>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style type="text/css">
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

        .modal-content{
            background-color: rgb(58, 10, 10);
        }

        #boton {
            height: 40px;
            width: 170px;
            border-radius: 5%;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 80px;
            background: white;
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
