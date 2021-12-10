@extends('adminlte::page')

@section('title','Admin')

@section('content_header')
<h1>Listado de aprendices</h1>
@stop

@section('content')

<body>
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
</body>

@stop

@section('css')

@stop

@section('js')
@stop
