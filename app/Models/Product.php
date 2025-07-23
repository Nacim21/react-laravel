<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    //
    protected $primaryKey = 'product_id';

    public function category(): HasOne{
        return $this->hasOne(Category::class,'category_id','product_category_id');
    }

    public function supplier(): BelongsTo{
        return $this->belongsTo(Supplier::class,'product_supplier_id','supplier_id');
    }
}
