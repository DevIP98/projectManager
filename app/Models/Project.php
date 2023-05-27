<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //table Projects
    protected $table = 'projects';
    //primary key
    protected $primaryKey = 'project_id';
    
    //relacion con la tabla cities
    public function city()
    {
        //belongsTo: relacion de muchos a uno
        // Establecer relación "belongsTo" con el modelo "Citie"
        // Se especifica el modelo relacionado y las claves de relación
        return $this->belongsTo(Citie::class, 'city_id', 'city_id');
    }
}
