<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{   
    public function index() // should be landing page
    {
        $roleaccess = Auth::user()->roleaccess;
        if ($roleaccess==1)
        {
            $module_name = 'Executive' ;
            $page_title = '';
            $page_heading = 'Daftar Pengajuan';
            $heading_class = 'fal fa-ballot-check';
            return view('admin.landing.indexdirjen', compact('module_name', 'page_title', 'page_heading', 'heading_class'));  
        } 
        if ($roleaccess==2)
        {
            $module_name = 'Landing' ;
            $page_title = '';
            $page_heading = 'Daftar Pengajuan';
            $heading_class = 'fal fa-ballot-check';
            return view('admin.landing.indexuser', compact('module_name', 'page_title', 'page_heading', 'heading_class'));
        }
    }
        

    
}

