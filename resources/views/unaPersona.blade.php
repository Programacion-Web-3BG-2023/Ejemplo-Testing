<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Persona Numero {{ $persona -> id }}</h1>

    <b>Nombre:</b> {{ $persona -> nombre }} <br>
    <b>Apellido:</b> {{ $persona -> apellido }} <br>
    <b>Fecha de Creación:</b> {{ $persona -> created_at }} <br>
    <b>Fecha de Modificación:</b> {{ $persona -> nombre }} <br>

</body>
</html>