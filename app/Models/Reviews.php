<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reviews extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'user_id',  'product_id', 'rating', 'review'
    ];
}
