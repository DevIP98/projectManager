<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citie;

class CitieController extends Controller
{
    //funcion para mostrar todos los registros de la tabla cities
    public function getAllCities() {
        $cities = Citie::all();
        return $cities;
    }
    //funcion para insertar un nuevo registro en la tabla cities
    public function insertCitie() {
        $citie = new Citie;
        $citie->name = 'Ciudad 1';
        $citie->save();
    
        return "<script>alert('Registros guardados'); window.location.href = '".route('cities')."'</script>";
    }
    //funcion para insertar 30 registros en la tabla cities
    public function insertCities() {
        for ($i=1; $i <= 30; $i++) { 
            $citie = new Citie;
            $citie->name = 'Ciudad '.$i;
            $citie->save();
        }
        return "<script>alert('Registros guardados');window.location.href = '".route('cities')."'</script>";
    }
}
