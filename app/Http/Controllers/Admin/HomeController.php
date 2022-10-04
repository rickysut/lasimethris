<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use App\Models\Belanja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController
{   
    public function index()
    {
        $breadcrumb = trans('cruds.dashboard.title') ;
        return view('admin.dashboard.index', compact('breadcrumb'));  
    }

    
}

