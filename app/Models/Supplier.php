<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    protected $primaryKey = 'supplier_id';

    public function product(): HasMany{
        return $this->hasMany(Product::class, 'product_supplier_id', 'supplier_id');
    }

}
