<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todolist';
    protected $fillable = ['name, description', 'done', 'created_at', 'updated_at'];
}
