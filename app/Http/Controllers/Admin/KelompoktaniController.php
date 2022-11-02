<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kelompoktani;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelompoktaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $module_name = 'User task' ;
        $page_title = 'Kelompok Tani';
        $page_heading = 'Kelompok Tani' ;
        $heading_class = 'fa fa-user-alt';
        return view('admin.kelompoktani.index', compact('module_name', 'page_title', 'page_heading', 'heading_class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $module_name = 'User task' ;
        $page_title = 'Tambah Kelompok Tani';
        $page_heading = 'Tambah Kelompok Tani' ;
        $heading_class = 'fa fa-user-alt';
        return view('admin.kelompoktani.create', compact('module_name', 'page_title', 'page_heading', 'heading_class'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelompoktani  $kelompoktani
     * @return \Illuminate\Http\Response
     */
    public function show(Kelompoktani $kelompoktani)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelompoktani  $kelompoktani
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelompoktani $kelompoktani)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelompoktani  $kelompoktani
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelompoktani $kelompoktani)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelompoktani  $kelompoktani
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelompoktani $kelompoktani)
    {
        //
    }
}
