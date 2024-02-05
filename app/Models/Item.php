<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table= 'items';
    protected $fillable = [
        'sku',
        'name',
        'price',
        'description',
        'quantity', 
        'image_url'
    ];
}
