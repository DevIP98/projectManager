<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ruta para mostrar la function getAllProjects del controlador ProjectController
Route::get('projects', 'App\Http\Controllers\ProjectController@getAllProjects')->name('projects');

//ruta para mostrar la function getTenProjects del controlador ProjectController
Route::get('projects/ten', 'App\Http\Controllers\ProjectController@getTenProjects');

//ruta para mostrar la function getProjectById del controlador ProjectController
Route::get('projects/{id}', 'App\Http\Controllers\ProjectController@getProjectById');

//ruta para mostrar la function insertProject del controlador ProjectController
Route::get('insert', 'App\Http\Controllers\ProjectController@insertProject');

//ruta para mostrar la function insertProjects del controlador ProjectController
Route::get('inserts', 'App\Http\Controllers\ProjectController@insertProjects');

//ruta para mostrar la function getAllCities del controlador CitieController
Route::get('cities', 'App\Http\Controllers\CitieController@getAllCities')->name('cities');

//ruta para mostrar la function insertCitie del controlador CitieController
Route::get('insertcitie', 'App\Http\Controllers\CitieController@insertCitie');

//ruta para mostrar la function insertCities del controlador CitieController
Route::get('insertcities', 'App\Http\Controllers\CitieController@insertCities');

//ruta para mostrar la function getAllCompanies del controlador CompanieController
Route::get('companies', 'App\Http\Controllers\CompanieController@getAllCompanies')->name('companies');

//ruta para mostrar la function insertCompany del controlador CompanieController
Route::get('insertcompany', 'App\Http\Controllers\CompanieController@insertCompanie');

//ruta para mostrar la function insertCompanies del controlador CompanieController
Route::get('insertcompanies', 'App\Http\Controllers\CompanieController@insertCompanies');

//ruta para mostrar la function getAllUsers del controlador UserrController
Route::get('users', 'App\Http\Controllers\UserrController@getAllUsers')->name('users');

//ruta para mostrar la function insertUser del controlador UserrController
Route::get('insertUser', 'App\Http\Controllers\UserrController@insertUser');

//ruta para mostrar la function insertUsers del controlador UserrController
Route::get('insertusers', 'App\Http\Controllers\UserrController@insertUsers');

//ruta para mostrar la funcion updateProject del controlador ProjectController
Route::get('updateProject', 'App\Http\Controllers\ProjectController@updateProject');

//ruta para mostrar la funcion updateProjects del controlador ProjectController
Route::get('updateProjects', 'App\Http\Controllers\ProjectController@updateProjects');

//ruta para mostrar la funcion deleteProjects del controlador ProjectController
Route::get('deleteProjects', 'App\Http\Controllers\ProjectController@deleteProjects');

//ruta para mostrar la funcion deleteProjects2 del controlador ProjectController
Route::get('deleteProjects2', 'App\Http\Controllers\ProjectController@deleteProjects2');

//ruta para mostrar la vista projects.blade.php de la tabla projects
Route::get('projects', [ProjectController::class, 'index']);

//ruta para mostrar la vista update_project.blade.php de la tabla projects
// Route::get('update_project/{id}', [ProjectController::class, 'updateProjectSave'])->name('update_project');
Route::post('update_project', [ProjectController::class, 'updateProjectSave'])->name('update_project_save');


Route::get('update_project/{id}', [ProjectController::class, 'updateProjectView'])->name('update_project');


