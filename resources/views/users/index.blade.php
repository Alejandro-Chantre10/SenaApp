<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre Usuario</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id_user }}</th>
                    <td>{{ $user->nombreUsuario }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <div>
                        <td>
                            <a href="{{ route('users.create', $user) }}">
                            <button type="button" class="btn btn-success btn-sm">Nuevo</button></a>
                        </td>
                        <td>
                            {{-- <a href="{{ route('users.edit', $user) }}"> --}}
                            <button type="button" class="btn btn-info btn-sm">Editar</button></a>
                        </td>
                        <td>
                            {{-- <form action="{{ route('users.destroy', $users) }}" class="d-inline" method="POST"> --}}
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

</html>
