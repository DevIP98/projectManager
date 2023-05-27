<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userr;

class UserrController extends Controller
{
    //funcion para mostrar todos los registros de la tabla users
    public function getAllUsers() {
        $users = Userr::all();
        return $users;
    }
    //funcion para insertar un nuevo registro en la tabla users
    public function insertUser() {
        $user = new Userr;
        $user->name = 'Usuario 1';
        $user->save();
    return "<script>alert('Registros guardados'); window.location.href = '".route('users')."'</script>";
    }
    //funcion para insertar 30 registros en la tabla users
    public function insertUsers() {
        for ($i=1; $i <= 30; $i++) { 
            $user = new Userr;
            $user->name = 'Usuario '.$i;
            $user->save();
        }
        return "<script>alert('Registros guardados');window.location.href = '".route('users')."'</script>";
    }
}
