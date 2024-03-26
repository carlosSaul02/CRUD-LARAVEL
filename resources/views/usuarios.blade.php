<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Usuarios</title>
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
                            <a class="nav-link" aria-current="page" href="{{ url('/inicio') }}">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/usuarios') }}">USUARIOS</a>
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
        <div class="container mt-1">
            <h1 class="text-center">USUARIOS</h1>

            @if (session('exito'))
                <div class="alert alert-success" role="alert">
                    {{ session('exito') }}
                </div>
            @endif

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="text-center">EXPANDIR PARA AGREGAR NUEVOS USUARIOS</h5>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <form class="row g-3" action="{{ route('Usuarios.store') }}" method="post">
                                @csrf
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="nombre_usuario">Nombre:*</label>
                                    <input required class="form-control" minlength="3" type="text"
                                        id="nombre_usuario" name="nombre_usuario">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-label" for="apellido_usuario">Apellido:*</label>
                                    <input required class="form-control" minlength="3" type="text"
                                        id="apellido_usuario" name="apellido_usuario">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="telefono_usuario">Telefono:*</label>
                                    <input required class="form-control" maxlength="8" type="tel"
                                        id="telefono_usuario" name="telefono_usuario"
                                        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-label" for="email_usuario">Correo:*</label>
                                    <input required class="form-control" type="email" id="email_usuario"
                                        name="email_usuario">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-label" for="cuenta_usuario">Numero de Cuenta:*</label>
                                    <input required class="form-control" type="text" maxlength="13" minlength="13"
                                        id="cuenta_usuario" name="cuenta_usuario" pattern="[0-9]{13}"
                                        title="Por favor, ingrese solo números de cuenta de 13 dígitos.">
                                </div>

                                <div class="form-group col-md-3">
                                    <label class="form-label" for="edad_usuario">Edad:*</label>
                                    <input required class="form-control" type="number" id="edad_usuario"
                                        name="edad_usuario" min="10" max="99">
                                </div>

                                <div class="form-group col-md-3">
                                    <label class="form-label" for="genero_usuario">Genero:*</label>
                                    <select class="form-select" name="genero_usuario" id="genero_usuario">
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-label" for="usuario_usuario">Usuario:*</label>
                                    <input required class="form-control" minlength="4" type="text"
                                        id="usuario_usuario" name="usuario_usuario">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-label" for="contrasena_usuario">Contraseña:*</label>
                                    <div class="input-group">
                                        <input required class="form-control" minlength="4" type="password"
                                            id="contrasena_usuario" name="contrasena_usuario">
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            👁️
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label class="form-label" for="tipo_usuario">Tipo de Usuario:*</label>
                                    <select class="form-select" name="tipo_usuario" id="tipo_usuario">
                                        <option value="Administrador">Administrador</option>
                                        <option value="Estudiante">Estudiante</option>
                                    </select>
                                </div>


                                <div class="col-12">
                                    <button type="submit" class="btn btn-success">GUARDAR</button>
                                </div>
                                <div class="col-12">
                                    <p>Requerido*</p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div>

        <div class="container mt-5">
            <h2 class="text-center">LISTADO DE USUARIOS</h2>
            <div class="table-responsive">
                <table class="table table-hover table-dark table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Email</th>
                            <th scope="col">Cuenta</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Creado</th>
                            <th scope="col">Actualizado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nombre_usuario }}</td>
                                <td>{{ $item->apellido_usuario }}</td>
                                <td>{{ $item->telefono_usuario }}</td>
                                <td>{{ $item->email_usuario }}</td>
                                <td>{{ $item->cuenta_usuario }}</td>
                                <td>{{ $item->edad_usuario }}</td>
                                <td>{{ $item->genero_usuario }}</td>
                                <td>{{ $item->usuario_usuario }}</td>
                                <td>{{ $item->contrasena_usuario }}</td>
                                <td>{{ $item->tipo_usuario }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $item->id }}">
                                        Eliminar
                                    </button>
                                    <a href="{{ route('usuarios.edit', $item->id) }}"
                                        class="btn btn-primary">EDITAR</a>
                                </td>
                            </tr>

                            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel{{ $item->id }}">
                                                Confirmacion</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Desea eliminar este usuario?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
                                            <form action="{{ route('usuarios.destroy', $item->id) }}" method=post>
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Eliminar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
        
    </main>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('contrasena_usuario');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.innerHTML = type === 'password' ? '👁️' : '👁️‍🗨️';
        });
    </script>
</body>


</html>
