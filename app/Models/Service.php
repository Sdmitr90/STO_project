<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';

    public function getServices(): array {

        return \DB::select("select title, coefficient, tech_service_types_id from {$this->table}");
    }
}
