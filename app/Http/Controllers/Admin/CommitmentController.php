<?php

namespace App\Http\Controllers\Admin;

use App\Models\Commitment;
use App\Http\Controllers\Controller;
use App\Models\DataUser;
use App\Models\PullRiph;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
            //$user_npwp = preg_replace('/[^0-9]/', '', $npwp->data_user->npwp_company);
            //00.000.000.0-000.000
            $mask = "%s%s.%s%s%s.%s%s%s.%s-%s%s%s.%s%s%s";
            $formated = vsprintf($mask, str_split($npwp));
            // dd($formated);
            $query = PullRiph::where('npwp', $formated)->orderBy('tgl_ijin', 'desc')->select(sprintf('%s.*', (new PullRiph())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'commitment_show';
                $editGate = 'commitment_edit';
                $deleteGate = 'commitment_delete';
                $crudRoutePart = 'task.commitment';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
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
                return $row->tgl_ijin ? $row->tgl_ijin : '';
            });
            $table->editColumn('periodetahun', function ($row) {
                return $row->periodetahun ? $row->periodetahun : '';
            });
            $table->editColumn('volume_riph', function ($row) {
                return $row->volume_riph ? $row->volume_riph : '';
            });
            $table->editColumn('volume_produksi', function ($row) {
                return $row->volume_produksi ? $row->volume_produksi : '';
            });
            $table->editColumn('luas_wajib_tanam', function ($row) {
                return $row->luas_wajib_tanam ? $row->luas_wajib_tanam : '';
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PullRiph  $commitment
     * @return \Illuminate\Http\Response
     */
    public function show(PullRiph $riphdata)
    {
        $module_name = 'User task' ;
        $page_title = 'Commitment';
        $page_heading = 'Rincian Komitmen Wajib Tanam-produksi' ;
        $heading_class = 'fal fa-file-invoice';
        return view('admin.commitment.show', compact('module_name', 'page_title', 'page_heading', 'heading_class', 'riphdata'));
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
    public function destroy(Commitment $commitment)
    {
        abort_if(Gate::denies('commitment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commitment->delete();

        return back();
    }

    public function massDestroy(MassDestroyPermissionRequest $request)
    {
        PullRiph::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
