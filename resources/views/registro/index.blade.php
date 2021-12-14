@extends('adminlte::page')

@section('content')

    <div class="fondo">
        <h1>LISTADO DE APRENDICES</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tipo Documento</th>
                    <th scope="col">Número Documento</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col">Género</th>
                    <th scope="col">Celular</th>
            </thead>
            <tbody>
                @foreach ($personals as $personal)
                    <tr>
                        <th scope="row">{{ $personal->id }}</th>
                        <td>{{ $personal->nombres }}</td>
                        <td>{{ $personal->apellidos }}</td>
                        <td>{{ $personal->email }}</td>
                        <td>{{ $personal->tipo_documento }}</td>
                        <td>{{ $personal->numero_documento }}</td>
                        <td>{{ $personal->edad }}</td>
                        <td>{{ $personal->fecha_nacimiento }}</td>
                        <td>{{ $personal->genero }}</td>
                        <td>{{ $personal->celular }}</td>
                        <div>
                            <td>
                                <a href="{{ route('registro.create', $personal) }}">
                                    <button type="button" class="btn btn-success btn-sm">Nuevo</button></a>
                            </td>
                            <td>
                                <a href="{{ route('registro.edit', $personal->id) }}">
                                    <button type="button" class="btn btn-info btn-sm">Editar</button></a>
                            </td>
                            <td>
                                {{-- <form action="{{ route('personals.destroy', $personals) }}" class="d-inline" method="POST"> --}}
                                @method('DELETE')
                                @csrf
                                <button type="button" class="btn btn-danger btn-sm">Borrar</button>
                                </form>
                            </td>
                        </div>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


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
            padding: 300px;
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

        .table{
            background-color: rgba(9, 18, 32, 1);
            border-radius: 2%;
            padding: 20px;



        }

    </style>
@stop

@stop

@section('js')
@stop
