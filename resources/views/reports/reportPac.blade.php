<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Reporte de Pacientes</title>
        <style>
            table {
                width: 100%; font-size: 18px; border:1px solid black; border-collapse: collapse;
            }
            th {
                background-color: burlywood; border:1px solid black;
            }
            td {
                border:1px solid black;
            }
        </style>
    </head>
    <body>
        <h1 align="center">Listado de Pacientes</h1>
        <hr><br>
        <table>
            <tr>
                <th>Código</th>
                <th>Paciente</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Fecha de Nacimiento</th>
            </tr>

            @foreach ($data as $item)
            <tr>
                <td style="background-color: bisque">{{$item['id']}}</td>
                <td>{{$item['nombre']}} {{$item['apellido']}}</td>
                <td>{{$item['edad']}} años</td>
                <td>{{$item['genero']}}</td>
                <td>{{$item['telefono']}}</td>
                <td>{{$item['direccion']}}</td>
                <td>{{$item['fecha_nacimiento']}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>