<?php 


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inward_details extends Model
{
    use HasFactory;

    protected $table = ' purchase_product';
    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $fillable = [
         'id ',	
		'pid'	,
		'types',		
		'services'	,
	    'size'	,
		'stage'	,
		'Quantity	'	,
		'update_id',
       
    ];
}