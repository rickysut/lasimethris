<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataUser extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'data_users';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'mobile_phone',
        'fix_phone',
        'company_name',
        'direktur_name',
        'npwp_company',
        'nib_company',
        'address_company',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'desa',
        'ktp',
        'assignment',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
