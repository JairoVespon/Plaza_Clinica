<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Reporte de Horarios</title>
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
        <h1 align="center">Listado de Horarios</h1>
        <hr><br>
        <table>
            <thead>
                <th>Código</th>
                <th>Médico</th>
                <th>Dia de Trabajo</th>
                <th>Hora de Entrada</th>
                <th>Hora de Salida</th>
            </thead>

            @foreach ($data as $item)
            <tr>
                <td style="background-color: bisque">{{$item['id']}}</td>
                <td>{{$item['medico']}}</td>
                <td>{{$item['dia']}}</td>
                <td>{{$item['hora_e']}}</td>
                <td>{{$item['hora_s']}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>