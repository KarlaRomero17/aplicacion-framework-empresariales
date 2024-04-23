<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: auto;
            padding: 50px;
        }

        table,
        td,
        th {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th {

            height: 70px;
        }

        td {
            height: 30px;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

    </style>
     <script src="{{ asset(mix('js/app.js')) }}" defer></script>
     <!-- Styles -->
     <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
</head>
<body>
    <h1>Reporte de alumnos</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Direccion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $item)
            <tr>
                <td>{{$item->nombre}}</td>
                <td>{{$item->apellido}}</td>
                <td>{{$item->edad}}</td>
                <td>{{$item->direccion}}</td>
                <td>
                    <a href="/alumnos/ver/{{ $item->id }}" class="button">Ver</a>
                    <a href="/alumnos/editar/{{ $item->id }}" class="button fa-solid fa-pen-to-square">Editar</a>
                    <a href="/alumnos/eliminar/{{ $item->id }}" class="button" onclick="return  eliminarAlumnof('EliminarAlumno')">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="/alumnos/crear" class="button">Nuevo</a>

</body>

<script>
    function eliminarAlumno(value) {
        console.log(value)
    action = confirm(value) ? true : event.preventDefault()
    }
    </script>
</html>
