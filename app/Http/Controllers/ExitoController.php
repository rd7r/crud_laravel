<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ExitoController extends Controller{

  public function a_la_cima($name){
    return 'you can '.$name;
  }
}
