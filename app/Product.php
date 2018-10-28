<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['imagePath', 'title', 'stock', 'description', 'price'];

    public function restoreStock($id, $qty) {
        $product = Product::find($id);
        $product->stock += $qty;
        $product->save();
    }
}
