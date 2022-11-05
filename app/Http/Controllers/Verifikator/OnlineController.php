<?php

namespace App\Http\Controllers\Verifikator;

use App\Models\Online;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class OnlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('online_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $module_name = 'Online' ;
        $page_title = 'Online';
        $page_heading = 'Online' ;
        $heading_class = 'fal fa-file-certificate';
        return view('verifikator.online.index', compact('module_name', 'page_title', 'page_heading', 'heading_class')); 
    
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
     * @param  \App\Models\Online  $online
     * @return \Illuminate\Http\Response
     */
    public function show(Online $online)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Online  $online
     * @return \Illuminate\Http\Response
     */
    public function edit(Online $online)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Online  $online
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Online $online)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Online  $online
     * @return \Illuminate\Http\Response
     */
    public function destroy(Online $online)
    {
        //
    }
}
