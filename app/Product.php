<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_id', 'product_img', 'product_name', 'product_price'];
    protected $visible = ['product_price', 'product_img', 'product_name', 'product_id'];
}
