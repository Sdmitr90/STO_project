<?php

namespace App\Http\Controllers;

use App\Models\Calculator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class CalculatorController extends Controller
{
//    public $norm = Calculator::HOURLY_RATE;

   public function calculate (Request $request) 
   {

    // Вместо 'titles' нужно вписать название массива, 
    // который будет отправляться с фронта:
    // $serviceNames = $request->input('titles');

    $services = [
        [
            'title' => "Замена масла ДВС с фильтром",
        ],
        [
            'title' => "Замена воздушного фильтра ДВС",  
        ],
        [
            'title' => "Замена свечей зажигания",
        ],
    ];
    
    $result = 0;

    foreach ($services as $service)
    {

        $coefficient= FacadesDB::table('services')->where('title', $service['title'])
                                                    ->value('coefficient');
        $price = Calculator::HOURLY_RATE * $coefficient;
        $result += $price;
    }

    // Для проверки калькулятора:
    // return view('calculate', ['result' => $result]);

    return $result;

   }
}
