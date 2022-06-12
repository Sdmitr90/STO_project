<?php

namespace App\Http\Controllers;

use App\Models\TechServiceType;

class TechServiceTypeController extends Controller
{

    /**
     * * @OA\Get(
     *      path="/TechServiceType",
     *      operationId="index",
     *      tags={"TechServiceType"},
     *      summary="Получить список всех доступных категорий сервисов",
     *      description="Получаем список всех доступных категорий сервисов",
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

    /**
     * * @OA\Get(
     *      path="/TechServiceType/{id}",
     *      operationId="servicesTypeId",
     *      tags={"TechServiceType/id"},
     *      summary="Получить список сервисов выбранной категории",
     *      description="Получаем список сервисов выбранной категории",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="введите id необходимой категории",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         ),
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
    public function servicesTypeId($id)
    {
        $ServiceType = app(TechServiceType::class);
        return  $ServiceType->getServicesByCategoryId($id) ;
    }
}
