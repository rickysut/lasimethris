<?php

namespace App\Http\Controllers\Admin;

use App\Models\PullRiph;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class PullRiphController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('pull_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $module_name = 'User task' ;
        $page_title = 'Pull Data RIPH';
        $page_heading = 'Pull/Sync Data RIPH' ;
        $heading_class = 'fa fa-sync-alt';
        $npwp_company = Auth::user()::find(Auth::user()->id)->data_user->npwp_company;
        return view('admin.pullriph.index', compact('module_name', 'page_title', 'page_heading', 'heading_class', 'npwp_company')); 
    }


    public function pull(Request $request)
    {   
        //dd($request->string('npwp'), $request->string('nomor'));
        try {
            $options = array(
                'soap_version' => SOAP_1_1,
                'exceptions' => true,
                'trace' => 1,
                'cache_wsdl' => WSDL_CACHE_MEMORY,
                'connection_timeout' => 25,
                'style' => SOAP_RPC,
                'use' => SOAP_ENCODED,
            );
    
            $client = new \SoapClient('http://riph.pertanian.go.id/api.php/simethris?wsdl', $options);
            $parameter = array(
                'user' => 'simethris',
                'pass' => 'wsriphsimethris',
                'npwp' => $request->string('npwp'),
                'nomor' =>  $request->string('nomor')
            );
            $response = $client->__soapCall('get_riph', $parameter);
        } catch (\Exception $e) {

            Log::error('Soap Exception: ' . $e->getMessage());
            throw new \Exception('Problem with SOAP call');
        }
        $res = json_decode(json_encode((array)simplexml_load_string($response)),true);
       
        //$res = simplexml_load_string($response);
        //dd($res->riph);
        return $res;
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
        $riph = $request->string('no_ijin');
        if (empty(PullRiph::where('no_ijin', '=' , $riph)->first())){
            PullRiph::create($request->all());
            return back()->with('message', 'Sukses menyimpan data RIPH');  
        } else {
            return back()->withErrors('RIPH sudah ada'); 
        }
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
