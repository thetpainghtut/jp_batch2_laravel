<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
  protected $fillable = [
      'staff_id', 'attendance_bonus', 'attendance_deduction','other_bonus','other_deduction','ssb','total'
  ];
}
