<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
  protected $fillable = [
      'name', 'profile', 'phoneno', 'address', 'salary', 'department_id', 'position_id'
  ];
}
