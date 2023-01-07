<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PullRiph extends Model
{
    use HasFactory;
    use SoftDeletes;

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
        'luas_wajib_tanam'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
