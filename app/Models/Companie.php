<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companie extends Model
{
    //table Companies
    protected $table = 'companies';
    //primary key
    protected $primaryKey = 'company_id';
}
