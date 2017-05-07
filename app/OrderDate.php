<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDate extends Model
{
  protected $fillable = ['order_id', 'date'];
  protected $visible = ['order_id', 'date'];
}
