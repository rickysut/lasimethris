<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\Completed;
use Illuminate\Http\Request;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class CompletedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('completed_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $module_name = 'Verification' ;
        $page_title = 'Completed';
        $page_heading = 'Completed' ;
        $heading_class = 'fal fa-file-certificate';
        return view('verifikator.completed.index', compact('module_name', 'page_title', 'page_heading', 'heading_class')); 
    
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
     * @param  \App\Models\Completed  $completed
     * @return \Illuminate\Http\Response
     */
    public function show(Completed $completed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Completed  $completed
     * @return \Illuminate\Http\Response
     */
    public function edit(Completed $completed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Completed  $completed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Completed $completed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Completed  $completed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Completed $completed)
    {
        //
    }
}
