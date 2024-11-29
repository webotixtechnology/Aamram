<?php 


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $fillable = [
        'id',
        'user_id',
        'update_id',
        'product_name',
        'product_code',
        'hsn_no',
        'description',
        'video_url',
        'moq',
        'product_type',
        'img',
        'cgst',
        'sgst',
        'igst',
    ];

    public function details()
    {
        
        return $this->hasMany(product_details::class, 'parentID', localKey: 'id');
    }

    
}
