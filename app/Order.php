<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'order_id', 'price'];
    protected $visible = ['user_id', 'order_id', 'price'];

}
