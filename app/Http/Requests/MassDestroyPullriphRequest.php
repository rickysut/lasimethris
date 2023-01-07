<?php

namespace App\Http\Requests;

use App\Models\PullRiph;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPullriphRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('commitment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:pull_riphs,id',
        ];
    }
}
