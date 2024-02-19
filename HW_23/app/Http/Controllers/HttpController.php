<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpController extends Controller
{
    public function get(Request $request)
    {
        if($request->isMethod('POST'))
        {
            return 'Форма отправлена POST запросом';
        } 
        else if($request->isMethod('GET')) {
            return 'Форма отправлена GET запросом';
        }
        else{
            return 'Ошибка';
        }
    }
}
