<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $primaryKey = 'product_id';
    protected $table = 'categories';

    public function product(){
        return $this->belongsTo(Product::class,'product_category_id','category_id');
    }

}
