<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function show($operation, $num1, $num2)
    {
        if (preg_match('/^[0-9]$/', $num1) && preg_match('/^[0-9]$/', $num2)) {
            switch ($operation) {
                case '+':
                    return $num1 + $num2;
                case '-':
                    return $num1 - $num2;
                case '*':
                    return $num1 * $num2;
                case 'div':
                    return $num1 / $num2;
            }
        } else {
            return 'Неверное значение';
        }
    }
}
