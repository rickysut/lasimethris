<?php

namespace App\Http\Controllers\Admin;

use App\Models\Commitment;
use App\Http\Controllers\Controller;
use App\Models\PullRiph;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use App\Models\User;
use App\Models\DataUser;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MassDestroyPullriphRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class CommitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        abort_if(Gate::denies('commitment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $npwp = Auth::user()::find(Auth::user()->id)->data_user->npwp_company;
            if (!$npwp) return null; 
            
            $query = PullRiph::where('npwp', $npwp)->orderBy('tgl_ijin', 'desc')->select(sprintf('%s.*', (new PullRiph())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'commitment_show';
                $deleteGate = 'commitment_delete';
                $crudRoutePart = 'task.commitment';

                return view('partials.pullRiphActions', compact(
                'viewGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('no_ijin', function ($row) {
                return $row->no_ijin ? $row->no_ijin : '';
            });
            $table->editColumn('tgl_ijin', function ($row) {
                return $row->tgl_ijin ? date('d/m/Y', strtotime($row->tgl_ijin)) : '';
            });
            $table->editColumn('periodetahun', function ($row) {
                return $row->periodetahun ? $row->periodetahun : '';
            });
            $table->editColumn('volume_riph', function ($row) {
                return $row->volume_riph ? str_replace('.', ',', $row->volume_riph) : '';
            });
            $table->editColumn('volume_produksi', function ($row) {
                return $row->volume_produksi ? str_replace('.', ',', $row->volume_produksi) : '';
            });
            $table->editColumn('luas_wajib_tanam', function ($row) {
                return $row->luas_wajib_tanam ? str_replace('.', ',', $row->luas_wajib_tanam) : '';
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? $row->status : 0;
            });
            
            $table->rawColumns(['actions', 'placeholder']);
            return $table->make(true);
        }

        $module_name = 'User task' ;
        $page_title = 'Commitment';
        $page_heading = 'Daftar Komitmen Wajib Tanam' ;
        $heading_class = 'fal fa-ballot-check';
        return view('admin.commitment.index', compact('module_name', 'page_title', 'page_heading', 'heading_class')); 
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
        $realnpwp = Auth::user()::find(Auth::user()->id)->data_user->npwp_company;
        $pullRiph = PullRiph::where('npwp', $realnpwp)->first();
        DB::beginTransaction();
        try {
            if ($pullRiph){
                $npwp = str_replace('.', '', $realnpwp);
                $npwp = str_replace('-', '', $npwp);
                $userFiles = [];
                $userFiles += array('status' => 1);
                if ($request->hasFile('formRiph')) {
                    if  ($request->formRiph !=null){
                        $file = $request->file('formRiph');
                        $file_name = 'formRiph.'.$file->getClientOriginalExtension();
                        $file_path = $file->storeAs('uploads/'.$npwp, $file_name, 'public');
                        $userFiles += array('formRiph' => $file_path);
                    };
                }
                if ($request->hasFile('formSptjm')) {
                    if  ($request->formSptjm !=null){
                        $file = $request->file('formSptjm');
                        $file_name = 'formSptjm.'.$file->getClientOriginalExtension();
                        $file_path = $file->storeAs('uploads/'.$npwp, $file_name, 'public');
                        $userFiles += array('formSptjm' => $file_path);
                    };
                }
                if ($request->hasFile('logBook')) {
                    if  ($request->logBook !=null){
                        $file = $request->file('logBook');
                        $file_name = 'logBook.'.$file->getClientOriginalExtension();
                        $file_path = $file->storeAs('uploads/'.$npwp, $file_name, 'public');
                        $userFiles += array('logBook' => $file_path);
                    };
                }
                if ($request->hasFile('formRt')) {
                    if  ($request->formRt !=null){
                        $file = $request->file('formRt');
                        $file_name = 'formRt.'.$file->getClientOriginalExtension();
                        $file_path = $file->storeAs('uploads/'.$npwp, $file_name, 'public');
                        $userFiles += array('formRt' => $file_path);
                    };
                }
                if ($request->hasFile('formRta')) {
                    if  ($request->formRta !=null){
                        $file = $request->file('formRta');
                        $file_name = 'formRta.'.$file->getClientOriginalExtension();
                        $file_path = $file->storeAs('uploads/'.$npwp, $file_name, 'public');
                        $userFiles += array('formRta' => $file_path);
                    };
                }
                if ($request->hasFile('formRpo')) {
                    if  ($request->formRpo !=null){
                        $file = $request->file('formRpo');
                        $file_name = 'formRpo.'.$file->getClientOriginalExtension();
                        $file_path = $file->storeAs('uploads/'.$npwp, $file_name, 'public');
                        $userFiles += array('formRpo' => $file_path);
                    };
                }
                if ($request->hasFile('formLa')) {
                    if  ($request->formLa !=null){
                        $file = $request->file('formLa');
                        $file_name = 'formLa.'.$file->getClientOriginalExtension();
                        $file_path = $file->storeAs('uploads/'.$npwp, $file_name, 'public');
                        $userFiles += array('formLa' => $file_path);
                    };
                }
                PullRiph::updateOrCreate(
                    ['npwp' => $realnpwp],
                    $userFiles
                ); 
            
            }
        } catch(ValidationException $e)
        {
            DB::rollback();
            return back()->with(['error' => __('Terjadi kesalahan saat unggah file')]);
        } catch(\Exception $e)
        {
            DB::rollback();
            //throw $e;
            return back()->with(['error' => __('Terjadi kesalahan saat unggah file')]);
        }
        
        DB::commit();
        return back()->with('message', 'Sukses mengunggah file..'); 
    }

    protected function pull($npwp, $nomor)
    {   
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
                'npwp' => $npwp,
                'nomor' =>  $nomor
            );
            $response = $client->__soapCall('get_riph', $parameter);
        } catch (\Exception $e) {

            Log::error('Soap Exception: ' . $e->getMessage());
            throw new \Exception('Problem with SOAP call');
        }
        $res = json_decode(json_encode((array)simplexml_load_string($response)),true);
       
        return $res;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PullRiph  $commitment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pullRiph = PullRiph::findOrFail($id);
        $npwp = Auth::user()::find(Auth::user()->id)->data_user->npwp_company;
        $npwp = str_replace('.', '', $npwp);
        $npwp = str_replace('-', '', $npwp);
        $pullData = $this->pull($npwp, $pullRiph->no_ijin);
        
        $module_name = 'User task' ;
        $page_title = 'Commitment';
        $page_heading = 'Rincian Komitmen Wajib Tanam-produksi' ;
        $heading_class = 'fal fa-file-invoice';
        return view('admin.commitment.show', compact('module_name', 'page_title', 'page_heading', 'heading_class', 'pullRiph', 'pullData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commitment  $commitment
     * @return \Illuminate\Http\Response
     */
    public function edit(Commitment $commitment)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commitment  $commitment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commitment $commitment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commitment  $commitment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('commitment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pullRiph = PullRiph::find($id);
        $pullRiph->delete();

        return back();
    }

    public function massDestroy(MassDestroyPullriphRequest $request)
    {
        PullRiph::whereIn('id', request('ids'))->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}

    

