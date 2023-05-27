@extends('layouts.base') <!-- Se extiende la plantilla base -->

@section('content') <!-- Se define la sección content -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Proyect</title>
</head>
<body>
    <div>
        {{-- Se define el formulario para actualizar un proyecto --}}
        <form action="{{ route('update_project', $project->id ?? '') }}" method="POST">
            @csrf <!-- Agrega el token CSRF para protección contra ataques CSRF -->
            <div>
                <label for="name">Nombre del proyecto</label>
                <input type="text" name="name" id="name" value="{{ $project->name }}">
            </div>
            <div>
                <label for="city">Ciudad</label>
                <select name="city" id="city">
                    @if($cities) <!-- Verifica si la variable $cities está definida y no es nula -->
                        @foreach ($cities as $city)
                            <option value="{{ $city->city_id }}" {{ $city->city_id == $project->city_id ? 'selected' : '' }}>
                                {{ $city->name }}
                            </option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div>
                <button type="submit">Actualizar</button>
            </div>
        </form>
    </div>    
</body>
</html>

@endsection <!-- Se cierra la sección content -->