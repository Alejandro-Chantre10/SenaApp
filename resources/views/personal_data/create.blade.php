<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="css\personal.css">
    <title>Document</title>
</head>


<body>
    <section>
        <h1>REGISTER<h1>
    </section>

<form action="{{ route('personal_data.store') }}" class="form-row" method="POST">
    @csrf

    <div class="mb-6">
        <label for="nombres" class="form-label ">Nombres</label><br />
        <input type="text" name="nombres" class="form-control" />
    </div>
    <br />
    <div class="mb-6">
        <label for="apellidos" class="form-label ">Apellidos</label><br />
        <input type="text" name="apellidos" class="form-control" />
    </div>
    <br />
    <div class="mb-6">
        <label for="email" class="form-label ">Email</label><br />
        <input type="text" name="email" class="form-control" />
    </div>
    <div class="mb-6">
        <label for="pasword" class="form-label ">Password</label><br />
        <input type="text" name="password" class="form-control" />
    </div>
    <div class="mb-6">
        <label for="tipo_documento" class="form-label">Tipo Documento</label><br />
        <select class="form-select-sm" name="tipo_documento">
            <option>Tarjeta identidad</option>
            <option>Cedula</option>
        </select>
    </div>
    <div class="mb-6">
        <label for="numero_documento" class="form-label date">Número documento</label><br />
        <input type="number" name="numero_documento" class="form-control" />
    </div>
    <div class="mb-6">
        <label for="edad" class="form-label date">Edad</label><br />
        <input type="number" name="edad" class="form-control" />
    </div>

    <div class="mb-6">
        <label for="fecha_nacimiento" class="form-label date">Fecha Nacimiento</label><br />
        <input type="date" name="fecha_nacimiento" class="form-control" />
    </div>
    <br />
    <div class="mb-6">
        <label for="genero" class="form-label">Género</label><br />
        <select class="form-select-sm" name="genero">
            <option>Masculino</option>
            <option>Femenino</option>
            <option>Indefinido</option>
        </select>
    </div>
    <br />
    <div class="mb-6">
        <label for="celular" class="form-label">Celular</label><br />
        <input type="number" name="celular" class="form-control" />
    </div>
    {{-- <div class="mb-6">
                    <label for="foto" class="form-label">Foto</label><br />
                    <input type="image" name="foto" class="form-control" />
                </div> --}}
    <button class="btn btn-primary btn-block" type="submit">Insertar</button>
</form>
</body>
</html>

