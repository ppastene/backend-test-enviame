<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    use HasFactory;

    protected $casts = [
        'shipping_address' => 'array',
        'customer' => 'array',
        'status' => 'array',
        'label' => 'array',
        'links' => 'array',
    ];
}
