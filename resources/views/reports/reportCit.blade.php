<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Reporte de Citas</title>
        <style>
            body {
                background-color: #632432; font-family: Arial; 
            }
            table {
                background-color: white; text-align: left;
                border-collapse: collapse; width: 100%;
            }
            th, td {
                padding: 10px;
            }
            thead {
                background-color: #246355; border-bottom: solid 5px #0F362D;
                color: white;
            }
            tr:nth-child(even){
                background-color: #ddd;
            }
        </style>
    </head>
    <body>
        <h1 align="center">Listado de Citas</h1>
        <hr><br>
        <table>
            <thead>
                <th>Código</th>
                <th>Paciente a Atender</th>
                <th>Médico Encargado</th>
                <th>Motivo</th>
                <th>Fecha de Atención</th>
                <th>Fecha del Registro</th>
            </thead>

            @foreach ($data as $item)
            <tr>
                <td style="background-color: lightblue">{{$item['id']}}</td>
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