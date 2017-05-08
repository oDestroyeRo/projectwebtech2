<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
  protected $fillable = ['order_id', 'product_id','total_price','size','type','price'];
  protected $visible = ['order_id', 'product_id','total_price','size','type','price'];
}
