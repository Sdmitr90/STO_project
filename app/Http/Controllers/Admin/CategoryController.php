<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\TechServiceType;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index() {

        $category = app(TechServiceType::class);




       return view('admin.tech_service.index', ['categories' => $category->getCategories()]);
   }

   public function edit() {
       return view('admin.tech_service.edit');
   }




}
