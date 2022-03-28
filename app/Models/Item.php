<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }

    public function order_detail(){
        return $this->hasOne(Item::class,'item_id');
    }
}
