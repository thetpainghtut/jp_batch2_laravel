<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
  protected $fillable = [
      'name', 'profile', 'phoneno', 'address', 'salary', 'department_id', 'position_id'
  ];

  public function department()
  {
    return $this->belongsTo('App\Department');
  }

  public function position()
  {
    return $this->belongsTo('App\Position');
  }
}
