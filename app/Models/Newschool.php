<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Newschool extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'schoolname',
        'schoolnpsn',
        'schooladdr',
        'schoolkel',
        'schoolkec',
        'schoolprov',
        'schoolstatus',
        'schooljenjang',
        'contactname',
        'contactwa',
        'contactjabatan',
        'contactphone',
        'username',
        'userlogin',
        'userpwd',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
