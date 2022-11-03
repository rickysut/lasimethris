<?php

namespace App\Http\Controllers\Admin;

use App\Models\Berkas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerkasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexberkas()
    {
        $module_name = 'User task' ;
        $page_title = 'Berkas Saya';
        $page_heading = 'Berkas Saya' ;
        $heading_class = 'fa fa-file';
        return view('admin.folder.indexberkas', compact('module_name', 'page_title', 'page_heading', 'heading_class'));
    
    }

    public function indexgaleri()
    {
        $module_name = 'User task' ;
        $page_title = 'Galeri Saya';
        $page_heading = 'Galeri Saya' ;
        $heading_class = 'fa fa-image';
        return view('admin.folder.indexgaleri', compact('module_name', 'page_title', 'page_heading', 'heading_class'));
    
    }

    public function indextemplate()
    {
        $module_name = 'User task' ;
        $page_title = 'Template Master';
        $page_heading = 'Template Master' ;
        $heading_class = 'fa fa-heart';
        return view('admin.folder.indextemplate', compact('module_name', 'page_title', 'page_heading', 'heading_class'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Berkas  $berkas
     * @return \Illuminate\Http\Response
     */
    public function show(Berkas $berkas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berkas  $berkas
     * @return \Illuminate\Http\Response
     */
    public function edit(Berkas $berkas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berkas  $berkas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berkas $berkas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berkas  $berkas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berkas $berkas)
    {
        //
    }
}
