<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';

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

    public function products()
    {
        return $this->hasMany(Product::class, 'supplier_id');
    }
}
