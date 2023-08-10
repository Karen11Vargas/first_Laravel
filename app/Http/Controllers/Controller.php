<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function Example(){
       $parameters = config('parameters.key'); //Acceder
       config('parameters.key', 'my-temporaly-key'); //Agregar un valor al 
                                                    //archivo de parametros
       $parameters = config('parameters.key');

    }
}
