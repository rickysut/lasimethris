<?php

namespace App\Http\Controllers\Verifikator;

use App\Models\Onfarm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class OnfarmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('onfarm_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $module_name = 'Verification' ;
        $page_title = 'Onfarm';
        $page_heading = 'Onfarm' ;
        $heading_class = 'fal fa-map-marker-check';
        return view('verifikator.onfarm.index', compact('module_name', 'page_title', 'page_heading', 'heading_class')); 
    
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
     * @param  \App\Models\Onfarm  $onfarm
     * @return \Illuminate\Http\Response
     */
    public function show(Onfarm $onfarm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Onfarm  $onfarm
     * @return \Illuminate\Http\Response
     */
    public function edit(Onfarm $onfarm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Onfarm  $onfarm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Onfarm $onfarm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Onfarm  $onfarm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Onfarm $onfarm)
    {
        //
    }
}
