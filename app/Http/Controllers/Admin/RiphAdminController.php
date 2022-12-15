<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreRiphAdminRequest;
use App\Http\Requests\UpdateRiphAdminRequest;
use App\Models\RiphAdmin;
use App\Http\Controllers\Controller;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class RiphAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('master_riph_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $module_name = 'Master RIPH' ;
        $page_title = '';
        $page_heading = 'Master RIPH' ;
        $heading_class = 'fal fa-ballot';
        $riph_admin = RiphAdmin::all();
        return view('admin.riphAdmin.index', compact('module_name', 'page_title', 'page_heading', 'heading_class', 'riph_admin'));
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
     * @param  \App\Http\Requests\StoreRiphAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRiphAdminRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RiphAdmin  $riphAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(RiphAdmin $riphAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RiphAdmin  $riphAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(RiphAdmin $riphAdmin)
    {
        abort_if(Gate::denies('master_riph_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $module_name = 'Master RIPH' ;
        $page_title = '';
        $page_heading = 'Edit Master RIPH' ;
        $heading_class = 'fal fa-ballot';
        return view('admin.riphAdmin.edit', compact('module_name', 'page_title', 'page_heading', 'heading_class','riphAdmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRiphAdminRequest  $request
     * @param  \App\Models\RiphAdmin  $riphAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRiphAdminRequest $request, RiphAdmin $riphAdmin)
    {
        $riphAdmin->update($request->all());

        return redirect()->route('admin.riphAdmin.index')->with('message','Berhasil update data riph-admin');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RiphAdmin  $riphAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(RiphAdmin $riphAdmin)
    {
        //
    }
}
