<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User1 extends Authenticatable
{
    protected $table = 'users1'; // Explicitly specify the table name
    protected $fillable = ['name', 'email', 'password'];
}

