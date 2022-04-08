<?php

namespace App\Models\Items;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $type_id
 * @property string $brandname
 * @property string $pic_url
 * @property string $price
 * @property bool $available
 * @property int $stock 
 */
class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'type_id',
        'brandname',
        'pic_url',
        'price',
        'available',
        'stock'
    ];

    /**
     * @inheritdoc
     */
    public $timestamps = false; 
}
