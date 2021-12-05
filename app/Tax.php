<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    protected $fillable = [];
    protected $table = 'oc_tax_class';


    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

}
