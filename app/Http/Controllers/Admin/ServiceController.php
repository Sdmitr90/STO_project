<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {

        $service = app(Service::class);

        return view('admin.services.index', ['services' => $service->getServices()]);
    }




}
