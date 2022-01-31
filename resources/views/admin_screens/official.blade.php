@extends('adminlte::page')

@section('title','Admin')

@section('content_header')

@stop

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    


<div class="fondoControl">
    <h1 class="text-center logopa">CONTROL DE USUARIOS</h1>
    <form action="">

    </form>

    <form class="form-group has-search">
        <span class="fa fa-search form-control-feedback"></span>
        <input type="text" class="form-control" placeholder="Search">
    </form>

    <div class="mb-2 bg-secondary text-white row"
        style="margin: 0 20px; margin-top: 40px; margin-bottom: 20px; border-radius: 24px; padding: 30px;">
        <div class="col">
            <img src="image\avatar.png" alt="logo senapp" class="avatar" style="width: 70px;height: 70px;">
        </div>
        <div class="col">
            Nombres y Apellidos: <br> Javier Andres Solarte Yande
        </div>
        <div class="col">
            Documento de Identidad:: <br> 1002967698
        </div>
        <div class="col">
            Fecha de registro:: <br> 03/02/2021
        </div>
        <button type="button" class="btn btn-outline-light logopa">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye-fill"
                viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
            </svg>
        </button>
    </div>
    <div class="mb-2 bg-secondary text-white row"
        style="margin: 0 20px; margin-top: 40px; margin-bottom: 20px; border-radius: 24px; padding: 30px;">
        <div class="col">
            <img src="image\avatar.png" alt="logo senapp" class="avatar" style="width: 70px;height: 70px;">
        </div>
        <div class="col">
            Nombres y Apellidos: <br> Javier Andres Solarte Yande
        </div>
        <div class="col">
            Documento de Identidad:: <br> 1002967698
        </div>
        <div class="col">
            Fecha de registro:: <br> 03/02/2021
        </div>
        <button type="button" class="btn btn-outline-light logopa">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye-fill"
                viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
            </svg>
        </button>
    </div>
    <div class="mb-2 bg-secondary text-white row"
        style="margin: 0 20px; margin-top: 40px; margin-bottom: 20px; border-radius: 24px; padding: 30px;">
        <div class="col">
            <img src="image\avatar.png" alt="logo senapp" class="avatar" style="width: 70px;height: 70px;">
        </div>
        <div class="col">
            Nombres y Apellidos: <br> Javier Andres Solarte Yande
        </div>
        <div class="col">
            Documento de Identidad:: <br> 1002967698
        </div>
        <div class="col">
            Fecha de registro:: <br> 03/02/2021
        </div>
        <button type="button" class="btn btn-outline-light logopa">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye-fill"
                viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
            </svg>
        </button>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

</div>

</body>


@section('css')
@stop

@stop

@section('js')
@stop
