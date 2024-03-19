<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetails extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'product_id', 'quantity', 'price','order_id'
    ];
    public function order(){
        return $this->belongsTo(Orders::class,'order_id');
    }
}
