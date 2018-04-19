<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllUser extends Model
{
    protected $fillable = ['role_id', 'name','email', 'password'];
}
