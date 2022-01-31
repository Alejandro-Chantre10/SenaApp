@extends('adminlte::page')

@section('content')
<div class="fondo">

    <div class="form rounded border border-primary">

        <h1>Enfermedades</h1>

        <form action="{{ route('disease.store') }}" class="form-row" method="POST">
            @csrf
            <div class="container main-sections">
                <section class="section1">
                    <div class="mb-6">
                        <label for="nombre" class="form-label ">Nombres</label>
                        <input type="text" name="nombre" class="form-control" />
                    </div>

                    <div class="mb-6">
                        <label for="descripcion" class="form-label ">Descripción</label>
                        <input type="text" name="descripcion" class="form-control" />
                    </div>

                    <div class="mb-6">
                        <label for="tiempo_enfermedad" class="form-label ">Tiempo de la enfermedad</label>
                        <input type="date" name="tiempo_enfermedad" class="form-control" />
                    </div>
                </section>
            </div>
            <button id="boton" class="btn btn-primary btn-block" type="submit">Insertar</button>
        </form>

    </div>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style type="text/css">
    * {
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

    .form {
        background-color: rgba(9, 18, 32, 1);
        border-radius: 5%;
        margin-left: 20px;
        margin-right: 20px;
    }


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