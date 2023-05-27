<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

use App\Models\Citie;

class ProjectController extends Controller
{
   // Obtener todos los proyectos y pasarlos a la vista projects.blade.php
   public function index()
   {
       // Cargar de forma anticipada la relación 'city' en los proyectos
       $projects = Project::with('city')->get();

       // Pasar la variable $projects a la vista
       return view('projects', compact('projects'));
   }
    //para traer todos los registros de la tabla projects
    public function getAllProjects() {
        $projects = Project::all();
        return $projects;
    }
    //para traer 10 registros de la tabla projects
    public function getTenProjects() {
        $projects = Project::take(10)->get();
        return $projects;
    }
    //ahora pero con el metodo findorfail apuntando al id
    public function getProjectById($id) {
        $project = Project::findOrFail($id);
        return $project;
    }
    //funcion para insertar un nuevo registro en la tabla projects
    public function insertProject() {
        $project = new Project;
        $project->city_id = 1;
        $project->company_id = 1;
        $project->user_id = 1;
        $project->name = 'Proyecto 1';
        $project->execution_date = '2023-05-11';
        $project->is_active = 1;
        $project->save();
    
        return "<script>alert('Registros guardados'); window.location.href = '".route('projects')."'</script>";
    }
    //funcion para insertar 30 registros en la tabla projects
    public function insertProjects() {
        for ($i=1; $i <= 30; $i++) { 
            $project = new Project;
            $project->city_id = 1;
            $project->company_id = 1;
            $project->user_id = 1;
            $project->name = 'Proyecto '.$i;
            $project->execution_date = '2023-05-11';
            $project->is_active = 1;
            $project->save();
        }
        return "<script>alert('Registros guardados');</script>";
    }
    //funcion para actualizar el nombre de un registro en la tabla projects apuntando al id
    public function updateProject() {
        $project = Project::findOrFail(3);
        $project->name = 'sistema de ventas';
        $project->save();
    
        return "<script>alert('Registro actualizado'); window.location.href = '".route('projects')."'</script>";
    }
    //funcion para actualizar el nombre de un registro en la tabla projects apuntando al id y pasarlos a la vista update_project.blade.php
    public function updateProjectView($id) {
        $project = Project::findOrFail($id); // Obtiene el proyecto correspondiente al ID proporcionado
        $cities = Citie::all(); // Obtiene todas las ciudades utilizando el modelo Citie
        return view('update_project', compact('project', 'cities')); // Retorna la vista 'update_project' con las variables project y cities
    }
    //funcion para actulizar el nombre del proyecto recuperado de la vista update_project.blade.php
    public function updateProjectSave(Request $request) {
        $project = Project::findOrFail($request->project_id); // Obtiene el proyecto correspondiente al ID proporcionado
        $project->name = $request->name; // Actualiza el nombre del proyecto con el valor del campo 'name' del formulario
        $project->save(); // Guarda los cambios en la base de datos
        return "<script>alert('Registro actualizado'); window.location.href = '".route('projects')."'</script>";
    }
    //actualizar la fecha de ejecución y nombre de todos los proyectos que estén activos y que además tengan el id de ciudad igual a 4
    public function updateProjects() {
        $projects = Project::where('is_active', 1)->where('city_id', 4)->get();
        foreach ($projects as $project) {
            $project->execution_date = '2023-06-15';
            $project->name = 'software gobierno';
            $project->save();
        }
        return "<script>alert('Registros actualizados'); window.location.href = '".route('projects')."'</script>";
    }
    //funcion para eliminar registros de la tabla projects cuando el id sea mayor a 33
    public function deleteProjects() {
        $projects = Project::where('project_id', '>', 33)->delete();
        return "<script>alert('Registros eliminados'); window.location.href = '".route('projects')."'</script>";
    }
    //funcion para eliminar los primeros 5 registros de la tabla projects
    public function deleteProjects2() {
        $projects = Project::take(5)->delete();
        return "<script>alert('Registros eliminados'); window.location.href = '".route('projects')."'</script>";
    }
}