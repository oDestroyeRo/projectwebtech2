<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = ['product_id', 'product_img', 'product_name', 'product_price'];
    protected $visible = ['product_price', 'product_img', 'product_name', 'product_id'];

    protected $dates = ['deleted_at'];
}
