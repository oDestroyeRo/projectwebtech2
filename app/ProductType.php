<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $fillable = ['type', 'type_price'];
    protected $visible = ['type', 'type_price'];

}
