<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>
<body>
    <a href="/"><button class="btn btn-secondary">Regresar</button></a>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        @method('POST')
        <br>
        <label>Nombre</label>
        <input type="text" name="name">
        <br><br>
        <label>Apellido</label>
        <input type="text" name="lastname">
        <br><br>
        <label>Contrasena</label>
        <input type="text" name="password">
        <br><br>
        <button type="submit" class="btn btn-secondary">Mandar</button>

    </form>
</body>
</html>
