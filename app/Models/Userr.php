<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userr extends Model
{
    //table Users
    protected $table = 'users';
    //primary key
    protected $primaryKey = 'user_id';
}
