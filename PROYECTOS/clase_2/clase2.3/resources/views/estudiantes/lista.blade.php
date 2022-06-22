<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <h2 class="bg-success display-5">Listado de Estudiantes</h2>

        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($estudiantes as $estudiante)
                    <tr>
                        <td>{{$estudiante->nombre}}</td>
                        <td>{{$estudiante->apellido}}</td>
                        <td>{{$estudiante->edad}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>