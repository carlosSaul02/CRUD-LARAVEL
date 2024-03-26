<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Inicio</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/inicio') }}">Prueba Semana 3</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/inicio') }}">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/usuarios') }}">USUARIOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/solicitudes') }}">SOLICITUDES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/equipos') }}">EQUIPOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/aprobacion') }}">APROBACION DE SOLICITUDES</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <main>
        <div class="container mt-1 mb-1">
            <h1 class="text-center">BIENVENIDO</h1>
            <div class="container">
                <div class="row">
                    <div class="card col">
                        <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="..." width="300">
                        <div class="card-body">
                            <h5 class="card-title">USUARIOS</h5>
                            <p class="card-text">Pagina para añadir, editar y eliminar USUARIOS.</p>
                            <button class="btn btn-primary">
                                <a class="nav-link" href="{{ url('/usuarios') }}">Ir a Usuarios</a>
                            </button>
                        </div>
                    </div>
                    <br>
                    <div class="card col">
                        <img src="https://images.unsplash.com/photo-1579444741963-5ae219cfe27c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">SOLICITUDES</h5>
                            <p class="card-text">Pagina para que el estudiante solicite equipos.</p>
                            <button class="btn btn-primary">
                                <a class="nav-link" href="{{ url('/solicitudes') }}">Ir a Solicitudes</a>
                            </button>
                        </div>
                    </div>
                    <br>
                </div>
                
                <div class="row">
                    <div class="card col">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="img-fluid rounded" alt="Imagen de alumnos">
                        <div class="card-body">
                            <h5 class="card-title">EQUIPOS</h5>
                            <p class="card-text">Pagina para añadir, editar y eliminar EQUIPOS.</p>
                            <button class="btn btn-primary">
                                <a class="nav-link" href="{{ url('/equipos') }}">Ir a Equipos</a>
                            </button>
                        </div>
                    </div>
                    <br>
                    <div class="card col">
                        <img src="https://images.unsplash.com/photo-1417733403748-83bbc7c05140?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">APROBACION DE SOLICITUDES</h5>
                            <p class="card-text">Pagina para que el administrador apruebe las solicitudes.</p>
                            <button class="btn btn-primary">
                                <a class="nav-link" href="{{ url('/aprobacion') }}">Ir a Aprobacion</a>
                            </button>
                        </div>
                    </div>
                </div>

            </div>


            <br>
            
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

<footer class="bg-dark text-white text-center p-3">
    <p>&copy; 2023 Prueba Semana 3. Todos los derechos reservados.</p>
</footer>


</html>
