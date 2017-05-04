<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    protected $fillable = ['size', 'size_price'];
    protected $visible = ['size', 'size_price'];

}
