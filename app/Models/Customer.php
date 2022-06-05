<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{

    use SoftDeletes;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'website',
        'address',
        'city',
        'state',
        'zip',
        'country',
    ];
}
