<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'productName',
        'productID',
        'owner',
        'location',
        'description',
        // 'image',
    ];
}
