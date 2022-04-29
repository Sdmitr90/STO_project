<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Mixed_;

class TechServiceType extends Model
{
    use HasFactory;
    protected $table = 'tech_service_types';

    public function getCategories(): array {
        return \DB::select("select id, title from {$this->table}");
    }

    public function getCategoryById(int $id) {

        return \DB::selectOne("select id, title from {$this->table} where
                    id = :id", ['id' => $id]);
    }


}
