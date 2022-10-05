<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() 
    {
        $roleaccess = Auth::user()->roleaccess;
        if ($roleaccess==1)
        {
            $breadcrumb = trans('cruds.dashboard.title') . ' Dirjen';
            return view('admin.dashboard.indexdirjen', compact('breadcrumb'));  
        } 
        if ($roleaccess==2)
        {
            $breadcrumb = trans('cruds.dashboard.title'). ' User';
            return view('admin.dashboard.indexuser', compact('breadcrumb')); 
        }
    }
}
