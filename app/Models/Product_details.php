<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_details extends Model
{
    use HasFactory;

    protected $table = 'product_details';
    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $fillable = [
        'id',
        'parent_id',
        'user_id',
        'update_id',
        'client_id',
        'product_size',
        'unit',
        'dist_price',
        'bottom_price',
        'stock',
    ];
}
