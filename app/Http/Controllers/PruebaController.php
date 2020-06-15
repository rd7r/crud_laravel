<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PruebaController extends Controller{

  public function prueba($name){
    return 'estoy dentro de pruebaController :D and my name is '.$name;
  }

}
