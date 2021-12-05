<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    protected $table = 'oc_product_description';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }



}