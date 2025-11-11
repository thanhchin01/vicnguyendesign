<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    //
    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'email',
        'job',
        'age',
        'phone',
        'type,',
        'acreage',
        'scale',
        'address'
    ];
}
