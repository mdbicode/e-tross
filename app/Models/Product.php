<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = 'products';

    public $guarded = ['id'];

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }
}
