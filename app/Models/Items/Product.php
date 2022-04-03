<?php

namespace App\Models\Items;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'product';
    protected $fillable = ['type_id', 'brandname', 'pic_url', 'price', 'available', 'stock'];
}
