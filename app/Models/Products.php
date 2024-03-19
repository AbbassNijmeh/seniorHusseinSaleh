<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'category_id', 'name', 'price', 'discount', 'description', 'require_prescription'
    ];
    public function category()
    {
        return $this->belongsTo(Categories::class,'category_id');
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class,'product_id');
    }
}
