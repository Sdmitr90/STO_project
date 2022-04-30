<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Mixed_;

/**
 * @OA\Schema(
 *     title="TechServiceType",
 *     description="TechServiceType model",
 *     @OA\Xml(
 *         name="TechServiceType"
 *     )
 * )
 */

class TechServiceType extends Model
{
    use HasFactory;
    protected $table = 'tech_service_types';

    /**
     * @OA\Property(
     *      title="TechServiceType",
     *      description="Список категорий сервисов",
     *      example="[{id: 1, title: ДВС&Трансмиссия},...,{}]"
     * )
     *
     * @var object
     */

    public function getCategories() {
        return \DB::select("select id, title from {$this->table}");
    }

    public function getCategoryById(int $id) {

        return \DB::selectOne("select id, title from {$this->table} where
                    id = :id", ['id' => $id]);
    }


}
