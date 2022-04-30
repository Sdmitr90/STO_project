<?php

namespace App\Http\Controllers;

use App\Models\TechServiceType;

class TechServiceTypeController extends Controller
{
    /**
     * * @OA\Get(
     *      path="/TechServiceType/",
     *      operationId="getTechServiceType",
     *      tags={"TechServiceType"},
     *      summary="Получить список всех доступных категорий сервисов",
     *      description="Получаем список всех доступных категорий сервисов",
     *     @OA\Parameter(
     *         name="tags",
     *         in="query",
     *         description="Параметры с Get, для этого запроса пока не принимаются на бэке, это образец",
     *         required=false,
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(type="string"),
     *         ),
     *         style="form"
     *     ),
     *     @OA\Response(
     *         response=200,
     *          description="successful operation",
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */

    public function index()
    {
        $ServiceType = app(TechServiceType::class);
        return  $ServiceType->getCategories() ;
    }
}
