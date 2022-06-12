<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Calculate",
 *     description="Рассчет стоимости выбранных сервисов",
 *     @OA\Xml(
 *         name="Calculate"
 *     )
 * )
 */
class Calculator extends Model
{
    use HasFactory;

    protected $table = 'services';

    const HOURLY_RATE = '1000';

    public function getCalculate($serviceId)
    {
        $result = 0;
        $services = $this->getServices();
        foreach ($services as $service) {
            foreach ($serviceId as $item) {
                if ($service->id == $item) {
                    $price = Calculator::HOURLY_RATE * $service->coefficient;
                    $result += $price;
                }
            }
        }
        return $result;
    }


    private function getServices(): array
    {
        return \DB::select("select id, coefficient from {$this->table}");
    }
}
