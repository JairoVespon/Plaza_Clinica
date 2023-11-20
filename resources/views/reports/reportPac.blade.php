<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Reporte de Pacientes</title>
        <style>
            body {
                background-color: #632432;
                font-family: Arial; 
            }
            table {
                background-color: white;
                text-align: left;
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                padding: 10px;
            }
            thead {
                background-color: #246355;
                border-bottom: solid 5px #0F362D;
                color: white;
            }
            tr:nth-child(even){
                background-color: #ddd;
            }
        </style>
    </head>
    <body>
        <h1 align="center">Listado de Pacientes</h1>
        <hr><br>
        <table>
            <thead>
                <th>Código</th>
                <th>Paciente</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Fecha de Nacimiento</th>
            </thead>

            @foreach ($data as $item)
            <tr>
                <td style="background-color: lightblue">{{$item['id']}}</td>
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