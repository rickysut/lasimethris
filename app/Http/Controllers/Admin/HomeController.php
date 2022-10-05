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
            $breadcrumb = 'Beranda Dirjen' ;
            return view('admin.landing.indexdirjen', compact('breadcrumb'));  
        } 
        if ($roleaccess==2)
        {
            $breadcrumb = 'Beranda User' ;
            return view('admin.landing.indexuser', compact('breadcrumb')); 
        }
    }
        

    
}

