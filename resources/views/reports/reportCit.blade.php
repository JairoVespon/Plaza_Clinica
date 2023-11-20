<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Reporte de Citas</title>
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
        <h1 align="center">Listado de Citas</h1>
        <hr><br>
        <table>
            <tr>
                <th>Código</th>
                <th>Paciente a Atender</th>
                <th>Médico Encargado</th>
                <th>Motivo</th>
                <th>Fecha de Atención</th>
                <th>Fecha del Registro</th>
            </tr>

            @foreach ($data as $item)
            <tr>
                <td style="background-color: bisque">{{$item['id']}}</td>
                <td>{{$item['paciente']}}</td>
                <td>{{$item['medico']}}</td>
                <td>{{$item['motivo']}}</td>
                <td>{{$item['fecha_a']}}</td>
                <td>{{$item['created_at']}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>