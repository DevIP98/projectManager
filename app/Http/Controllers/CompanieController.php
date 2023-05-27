<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companie;

class CompanieController extends Controller
{
    //funcion para mostrar todos los registros de la tabla companies
    public function getAllCompanies() {
        $companies = Companie::all();
        return $companies;
    }
    //funcion para insertar un nuevo registro en la tabla companies
    public function insertCompanie() {
        $companie = new Companie;
        $companie->name = 'Compañia 1';
        $companie->save();
    
        return "<script>alert('Registros guardados'); window.location.href = '".route('companies')."'</script>";
    }
    //funcion para insertar 30 registros en la tabla companies
    public function insertCompanies() {
        for ($i=1; $i <= 30; $i++) { 
            $companie = new Companie;
            $companie->name = 'Compañia '.$i;
            $companie->save();
        }
        return "<script>alert('Registros guardados');window.location.href = '".route('companies')."'</script>";
    }
}
