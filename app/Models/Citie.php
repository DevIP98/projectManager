<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citie extends Model
{
    //table Cities
    protected $table = 'cities';
    //primary key
    protected $primaryKey = 'city_id';
}
