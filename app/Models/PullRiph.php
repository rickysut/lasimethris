<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PullRiph extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Auditable;

    public $table = 'pull_riphs';

    protected $fillable = [
        'npwp',
        'keterangan',
        'nama',
        'no_ijin',
        'periodetahun',
        'tgl_ijin',
        'tgl_akhir',
        'no_hs',
        'volume_riph',
        'volume_produksi',
        'luas_wajib_tanam',
        'status',
        'formRiph',
        'formSptjm',
        'logBook',
        'formRt',
        'formRta',
        'formRpo',
        'formLa',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
