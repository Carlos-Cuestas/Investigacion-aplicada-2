<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>
<body>
    <div class="align-bottom">
        <a href="/"><button class="btn btn-secondary">Regresar</button></a>
    <a href="crear"><button class="btn btn-secondary">Crear</button></a>
    <br>
    <br>
    <table style="height:100px;">
        <tbody>
            <tr>
                <th class="align-middle">
                    <table class="table">
                        <thead>
                          <tr class="table-dark">
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                          </tr>
                        </thead>
                        <tbody class="table-secondary">
                            @foreach ($users as $user)
                            <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->password }}</td>
                            <td><a href="{{ route('users.edit', $user->id) }}">Editar</a></td>
                            <td><form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form></td>

                            @endforeach
                        </tbody>

                      </table>
                </th>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>
