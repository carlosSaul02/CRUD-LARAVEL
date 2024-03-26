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
        <div class="container mt-1 mb-1">
            <h1 class="text-center">EDITAR USUARIOS</h1>

            <form class="row g-3" action="{{ route('usuarios.update', $editados->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group col-md-6">
                    <label class="form-label" for="nombre_usuario">Nombre:*</label>
                    <input required class="form-control" minlength="3" type="text" id="nombre_usuario"
                        name="nombre_usuario" value="{{ $editados->nombre_usuario }}">
                </div>

                <div class="form-group col-md-6">
                    <label class="form-label" for="apellido_usuario">Apellido:*</label>
                    <input required class="form-control" minlength="3" type="text" id="apellido_usuario"
                        name="apellido_usuario" value="{{ $editados->apellido_usuario }}">
                </div>
                <div class="form-group col-md-6">
                    <label class="form-label" for="telefono_usuario">Telefono:*</label>
                    <input required class="form-control" maxlength="8" type="tel" id="telefono_usuario"
                        name="telefono_usuario"
                        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        value="{{ $editados->telefono_usuario }}">
                </div>

                <div class="form-group col-md-6">
                    <label class="form-label" for="email_usuario">Correo:*</label>
                    <input required class="form-control" type="email" id="email_usuario" name="email_usuario"
                        value="{{ $editados->email_usuario }}">
                </div>

                <div class="form-group col-md-6">
                    <label class="form-label" for="cuenta_usuario">Numero de Cuenta:*</label>
                    <input required class="form-control" minlength="13" maxlength="13" type="number" id="cuenta_usuario"
                        name="cuenta_usuario" value="{{ $editados->cuenta_usuario }}" pattern="[0-9]{13}" title="Por favor, ingrese solo números de cuenta de 13 dígitos.">
                </div>

                <div class="form-group col-md-3">
                    <label class="form-label" for="edad_usuario">Edad:*</label>
                    <input required class="form-control" type="number" id="edad_usuario"
                        name="edad_usuario" min="10" max="99" value="{{ $editados->edad_usuario }}">
                </div>

                <div class="form-group col-md-3">
                    <label class="form-label" for="genero_usuario">Género:*</label>
                    <select class="form-select" name="genero_usuario" id="genero_usuario">
                        <option value="M" {{ $editados->genero_usuario == 'M' ? 'selected' : '' }}>Masculino</option>
                        <option value="F" {{ $editados->genero_usuario == 'F' ? 'selected' : '' }}>Femenino</option>
                    </select>
                </div>
                

                <div class="form-group col-md-6">
                    <label class="form-label" for="usuario_usuario">Usuario:*</label>
                    <input required class="form-control" minlength="4" type="text" id="usuario_usuario"
                        name="usuario_usuario" value="{{ $editados->usuario_usuario }}">
                </div>

                <div class="form-group col-md-6">
                    <label class="form-label" for="contrasena_usuario">Contraseña:*</label>
                    <div class="input-group">
                        <input required class="form-control" minlength="4" type="password" id="contrasena_usuario"
                            name="contrasena_usuario" value="{{ $editados->contrasena_usuario }}">
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                            👁️
                        </button>
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <label class="form-label" for="tipo_usuario">Tipo de Usuario:*</label>
                    <select class="form-select" name="tipo_usuario" id="tipo_usuario">
                        <option value="Administrador" {{ $editados->tipo_usuario == 'Administrador' ? 'selected' : '' }}>Administrador</option>
                        <option value="Estudiante" {{ $editados->tipo_usuario == 'Estudiante' ? 'selected' : '' }}>Estudiante</option>
                    </select>
                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    <a href="{{ route('Usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
                <div class="col-12">
                    <p>Requerido*</p>
                </div>

            </form>


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
