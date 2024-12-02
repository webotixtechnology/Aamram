<?php 


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inward extends Model
{
    use HasFactory;

    protected $table = ' purchase_details';
    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $fillable = [
         'ID',	
		'user_id'	,
		'updateduser',		
		'PurchaseDate'	,
	    'billdate'	,
		'batch_id'	,
		'Bill_No'	,
        'Tquantity',
		'update_id',
       
    ];

    public function details()
    {
        
        return $this->hasMany(inward_details::class, 'pid', localKey: 'ID');
    }

    
}