<?php

namespace App\Http\Controllers\Admin;

use App\Models\PullRiph;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PullRiphController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $module_name = 'User task' ;
        $page_title = 'Pull Data RIPH';
        $page_heading = 'Pull/Sync Data RIPH' ;
        $heading_class = 'fa fa-sync-alt';
        return view('admin.pullriph.index', compact('module_name', 'page_title', 'page_heading', 'heading_class')); 
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
     * @param  \App\Models\PullRiph  $pullRiph
     * @return \Illuminate\Http\Response
     */
    public function show(PullRiph $pullRiph)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PullRiph  $pullRiph
     * @return \Illuminate\Http\Response
     */
    public function edit(PullRiph $pullRiph)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PullRiph  $pullRiph
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PullRiph $pullRiph)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PullRiph  $pullRiph
     * @return \Illuminate\Http\Response
     */
    public function destroy(PullRiph $pullRiph)
    {
        //
    }
}
