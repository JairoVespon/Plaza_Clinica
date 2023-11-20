<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Reporte de Clinicas</title>
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
        <h1 align="center">Listado de Clinicas</h1>
        <hr><br>
        <table>
            <thead>
                <th>Código</th>
                <th>Clínica</th>
                <th>Teléfono</th>
                <th>Dirección</th>
            </thead>

            @foreach ($data as $item)
            <tr>
                <td style="background-color: lightblue">{{$item['id']}}</td>
                <td>{{$item['nombre']}}</td>
                <td>{{$item['telefono']}}</td>
                <td>{{$item['direccion']}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>