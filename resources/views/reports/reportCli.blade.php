<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Reporte de Clinicas</title>
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
        <h1 align="center">Listado de Clinicas</h1>
        <hr><br>
        <table>
            <tr>
                <th>Código</th>
                <th>Clínica</th>
                <th>Teléfono</th>
                <th>Dirección</th>
            </tr>

            @foreach ($data as $item)
            <tr>
                <td style="background-color: bisque">{{$item['id']}}</td>
                <td>{{$item['nombre']}}</td>
                <td>{{$item['telefono']}}</td>
                <td>{{$item['direccion']}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>