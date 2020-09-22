<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
  public function main($value='')
  {
    return view('frontend.main');
  }

  public function detail($id)
  {
    return view('frontend.detail');
  }
}
