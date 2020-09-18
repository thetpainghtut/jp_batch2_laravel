<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function home($value='')
  {
    return view('myhome');
  }

  public function main($key)
  {
    return view('welcome',compact('key'));
  }
}
