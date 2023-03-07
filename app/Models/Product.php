<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getAvatarAttribute($value)
    {
        // If the product has an avatar, return its URL
        if ($value) {
            return asset('storage/' . $value);
        }

        // Otherwise, return the default avatar for products
        return asset(config('voyager.product.default_avatar', 'products/product.png'));
    }

}
