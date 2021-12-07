<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Usuario</title>
</head>

<body>
    <div class="container">
        <section class="titlePag container">
            <h3>Register</h3>
        </section>
        <section class="container mainForm">
            <form action="{{route('users.store')}}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="nombreUsuario" class="form-label">Nombre Usuario</label><br />
                    <input type="text" name="nombreUsuario" class="form-control" />
                </div>
                <br />
                <div class="mb-6">
                    <label for="email" class="form-label">Email</label><br />
                    <input type="email" name="email" class="form-control" />
                </div>
                <br />
                <div class="mb-6">
                    <label for="password" class="form-label ">Password</label><br />
                    <input type="password" name="password" class="form-control" />
                </div>
                <input type="submit" class="btn btn-primary" value="Insertar">
            </form>
        </section>

    </div>
</body>
</html>
