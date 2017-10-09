<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'type_id', 'shop_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product_variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}
