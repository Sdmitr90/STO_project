<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Services",
 *     description="Services model",
 *     @OA\Xml(
 *         name="Services"
 *     )
 * )
 */

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';

    /**
     * @OA\Property(
     *      title="Services",
     *      description="Список сервисов",
     *      example="[{title: Замена передного тормозного диска, coefficient: 1, tech_service_types_id: 2},...,{}]"
     * )
     *
     * @var object
     */

    public function getServices(): array {

        return \DB::select("select title, coefficient, tech_service_types_id from {$this->table}");
    }
}
