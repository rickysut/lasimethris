<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class UpdateRiphAdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('master_riph_edit');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'periode' => [
                'integer',
                'required',
            ],
            'v_pengajuan_import' => [
                'integer',
                'required',
            ],
            'v_beban_tanam' => [
                'integer',
                'required',
                
            ],
            'v_beban_produksi' => [
                'integer',
                'required',
                
            ],
            'jumlah_importir' => [
                'integer',
                'required',
                
            ],
        ];
    }

    public function messages()
    {
        return [
            'periode.required' => 'Periode harus diisi',
            'v_pengajuan_import.required'  => 'Total Volume RIPH harus diisi',
            'v_beban_tanam.required'  => 'Total Wajib Tanam harus diisi',
            'v_beban_produksi.required'  => 'Total Wajib Produksi harus diisi',
            'jumlah_importir.required'  => 'Jumlah produksi harus diisi',
            'periode.integer' => 'Periode harus numerik',
            'v_pengajuan_import.integer'  => 'Total Volume RIPH harus numerik',
            'v_beban_tanam.integer'  => 'Total Wajib Tanam harus numerik',
            'v_beban_produksi.integer'  => 'Total Wajib Produksi harus numerik',
            'jumlah_importir.integer'  => 'Jumlah produksi harus numerik',
        ];
    }
}
