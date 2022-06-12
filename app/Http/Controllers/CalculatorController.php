<?php

namespace App\Http\Controllers;

use App\Models\Calculator;
use Illuminate\Http\Request;


class CalculatorController extends Controller
{
    /**
     * *@OA\Post(
     *     path="/Calculate",
     *     tags={"Calculate"},
     *     operationId="servicesId",
     *     summary="Рассчитать стоимость выбранных сервисов",
     *     @OA\RequestBody(
     *         description="введите id необходимых сервисов, Response в первой строке, в самом начале(посчитанная сумма), остальное - Debugger, если включен",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="id",
     *                     type="integer"
     *                 ),
     *                 example={"id":{1,3,4}},
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     * )
     */
    public function calculate(Request $request)
    {
        $services = $request->input('id');
        $calculatePrice = app(Calculator::class);
        return $calculatePrice->getCalculate($services);

    }

    public function index(){
        return view('calculate');
    }
}
