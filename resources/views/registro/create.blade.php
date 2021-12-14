@extends('adminlte::page')


@section('content')

    <body>
        <div class="fondo">
            <h1> INGRESAR DATOS PERSONALES</h1>

            <div class="form">
                <br>
                <form action="{{ route('registro.store') }}" class="form-row" method="POST">
                    @csrf
                    <div class="container main-sections">
                        <section class="section1">
                            <div class="mb-6">
                                <label for="nombres" class="form-label ">Nombres</label>
                                <input type="text" name="nombres" class="form-control" />
                            </div>

                            <div class="mb-6">
                                <label for="apellidos" class="form-label ">Apellidos</label>
                                <input type="text" name="apellidos" class="form-control" />
                            </div>

                            <div class="mb-6">
                                <label for="genero" class="form-label">Género</label><br>
                                <select class="form-select-sm" name="genero">
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                    <option>Indefinido</option>
                                </select>
                            </div>

                            <div class="mb-6">
                                <label for="email" class="form-label ">Email</label>
                                <input type="email" name="email" class="form-control" />
                            </div>

                            <div class="mb-6">
                                <label for="password" class="form-label ">Password</label>
                                <input type="password" name="password" class="form-control" />
                            </div>
                        </section>
                        <section class="section2">
                            <div class="mb-6">
                                <label for="tipo_documento" class="form-label">Tipo Documento</label><br>
                                <select class="form-select-sm" name="tipo_documento">
                                    <option>Tarjeta identidad</option>
                                    <option>Cedula</option>
                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="numero_documento" class="form-label date">Número documento</label>
                                <input type="number" name="numero_documento" class="form-control" />
                            </div>

                            <div class="mb-6">
                                <label for="edad" class="form-label date">Edad</label>
                                <input type="number" name="edad" class="form-control" />
                            </div>

                            <div class="mb-6">
                                <label for="fecha_nacimiento" class="form-label date">Fecha Nacimiento</label>
                                <input type="date" name="fecha_nacimiento" class="form-control" />
                            </div>

                            <div class="mb-6">
                                <label for="celular" class="form-label">Celular</label>
                                <input type="number" name="celular" class="form-control" />
                            </div>
                        </section>
                    </div>

                    <button id="boton" class="btn btn-primary btn-block" type="submit">Insertar</button>
                </form>
            </div>
        </div>
    </body>




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
