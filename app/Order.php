<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['product_id', 'order_id', 'price'];
    protected $visible = ['product_id', 'order_id', 'price'];

}
