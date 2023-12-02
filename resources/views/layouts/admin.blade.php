<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('/assets/icono-gym.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>Vista Usuario</title>
</head>

<body>
    <div class="container">
        <div class="main">
            <div class="topbar">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <img src="/assets/logo.jpg" class="logo" boder-radius="50%">
                    <a class="navbar-brand" href="#">Vista Usuario </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Index.html">Programar una clase</a>
                                <a class="nav-link" href="Index.html">Descripcion de clases</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                            <img src="/assets/ImagenMiembro.png" class="rounded-circle" width="160" alt="imagen de perfil">
                            <div class="mt-3">
                                <h3>Nombre de usuario </h3>
                                <a href="">Editar perfil</a>
                                <a href="">Salir</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-1">
                    <div class="card mb-3 content">
                        <h1 class="m-3 pt-3">Información</h1>
                        <div class="card-body">
                            @yield('contenido')
                        </div>
                    </div>
                    <div class="card mb-3 content">
                        <h1 class="m-3">Objetivos</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Nombre de las metas </h5>
                                </div>
                                <div class="col-md-9 text-second">
                                    Descripcion de ejercicios
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Para que funcione el menu-->
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}"></script>
    <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}"></script>
</body>

</html>