<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/personas" method="post">
        @csrf
        Nombre <input type="text" name="nombre" id=""> <br>
        Apellido <input type="text" name="apellido" id=""> <br>
        <input type="submit" value="Enviar">

    </form>

    @isset($insertado)
        <b>Persona insertada correctamente</b>
    @endisset

    @isset($eliminado)
    <b>Persona eliminada correctamente</b>
    @endisset
    <table>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Fecha Creacion</td>
            <td>Fecha Modificacion</td>
        </tr>
        @foreach($personas as $persona)

            <tr>
                <td>
                    {{ $persona -> id }}
                </td>
                <td>
                    {{ $persona -> nombre }}
                </td>
                <td>
                    {{ $persona -> apellido }}
                </td>
                <td>
                    {{ $persona -> created_at }}
                </td>
                <td>
                    {{ $persona -> updated_at }}
                </td>
                
                <td> <a href="/eliminarPersona?id={{ $persona -> id}}"> Eliminar</a> </td>

            </tr>
        @endforeach
    </table>
</body>
</html>