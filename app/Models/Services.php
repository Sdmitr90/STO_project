<?php

namespace App\Models;

use App\Models\TechServiceTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    /**
     * Получить вид услуги.
     */
    public function getTechServiceTypes ()
    {
        return $this->belongsTo(TechServiceTypes::class, 'tech_service_types_id', 'id');
    }

}
