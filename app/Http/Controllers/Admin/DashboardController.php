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
           
            if (Auth::user()->roles[0]->title == 'Admin'){
                $module_name = 'Dashboard' ;
                $page_title = 'Monitoring Realisasi';
                $page_heading = 'Monitoring' ;
                $heading_class = 'fal fa-analytics';
                return view('admin.dashboard.indexadmin', compact('module_name', 'page_title', 'page_heading', 'heading_class')); 
            }
            if (Auth::user()->roles[0]->title == 'Verifikator'){
                $module_name = 'Dashboard' ;
                $page_title = 'Monitoring Verifikasi';
                $page_heading = 'Monitoring' ;
                $heading_class = 'fal fa-chart-bar';
                return view('admin.dashboard.indexverifikator', compact('module_name', 'page_title', 'page_heading', 'heading_class')); 
            }
        } 
        if (($roleaccess==2)||($roleaccess==3))
        {
            $module_name = 'Dashboard' ;
            $page_title = 'Ringkasan Data';
            $page_heading = 'Dashboard' ;
            $heading_class = 'fal fa-tachometer';
            return view('admin.dashboard.indexuser', compact('module_name', 'page_title', 'page_heading', 'heading_class')); 
            
        }
    }

    public function map() 
    {
        $roleaccess = Auth::user()->roleaccess;
        if ($roleaccess==1)
        {  
            if (Auth::user()->roles[0]->title == 'Admin'){
                $module_name = 'Dashboard' ;
                $page_title = 'Pemetaan';
                $page_heading = 'Pemetaan' ;
                $heading_class = 'fal fa-map-marked-alt';
                return view('admin.dashboard.map', compact('module_name', 'page_title', 'page_heading', 'heading_class')); 
            }
            if (Auth::user()->roles[0]->title == 'Verifikator'){
                $module_name = 'Dashboard' ;
                $page_title = 'Pemetaan';
                $page_heading = 'Pemetaan' ;
                $heading_class = 'fal fa-map-marked-alt';
                return view('admin.dashboard.map', compact('module_name', 'page_title', 'page_heading', 'heading_class')); 
            }
        } 
        if (($roleaccess==2)||($roleaccess==3))
        {
            $module_name = 'Dashboard' ;
            $page_title = 'Pemetaan';
            $page_heading = 'Pemetaan' ;
            $heading_class = 'fal fa-map-marked-alt';
            return view('admin.dashboard.map', compact('module_name', 'page_title', 'page_heading', 'heading_class')); 
            
        } 
    }
}
