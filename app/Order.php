<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id', 'order_id', 'price'];
    protected $visible = ['id', 'order_id', 'price'];

    public function user()
    {
      return $this->belongsTo('App\User');
    }

}
