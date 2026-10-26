<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersExmpl extends Model
{
    //

    protected $table = 'usersExmpl';

    protected $fillable = [
    'name',
    'email',
    'phone',
    'workstation',
    ];
}
