<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    protected $table = 'oc_product';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];


    public function data()
    {
        return $this->hasOne(Data::class, 'product_id','product_id');
    }

    public function tax()
    {
        return $this->hasOne(Tax::class, 'tax_class_id','tax_class_id');
    }

    public function discount()
    {
        return $this->hasOne(Discount::class, 'product_id','product_id');
    }


    public function images()
    {
        return $this->hasMany(Images::class, 'product_id','product_id');
    }
}