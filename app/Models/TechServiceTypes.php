<?php

namespace App\Models;

use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechServiceTypes extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'id',
    ];

    /**
     * Получить услуги.
     */
    public function getServices ()
    {
        return $this->hasMany(Services::class);
    }
}
