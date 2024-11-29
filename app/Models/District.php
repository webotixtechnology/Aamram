<?php 


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class District extends Model{
    use HasFactory;
    protected $table = 'district';
    protected $fillable = [
        'district_id',
        'country_id',
        'state_id',	
        'district_name',
        'date'
    ];

}