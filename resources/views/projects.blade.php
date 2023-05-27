@extends('layouts.base') <!-- Se extiende la plantilla base -->

@section('content') <!-- Se define la sección content -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyectos</title>
</head>
<body>
    <h1>PROYECTOS ESCRITOS STEP_LARAVEL</h1>
    <div class="row">
        <div class="col">
    <table class="table table-striped table-bordered mx-auto my-auto" style="margin-top: 20px;">
        <thead>
            <tr>
                <th>Título</th>
                <th>Ciudad</th>
                <th>Creado en</th>
                <th>Actualizado en</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->city->name }}</td>
                    <td>{{ $project->created_at }}</td>
                    <td>{{ $project->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>
</body>
</html>
@endsection <!-- Se cierra la sección content -->
