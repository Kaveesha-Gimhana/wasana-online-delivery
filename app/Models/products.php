<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $primaryKey = 'product_code';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'product_code',
        'image',
        'price',
        'category',
        'description'
    ];
}
