<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [];
    protected $table = 'oc_product_special';

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    
}
