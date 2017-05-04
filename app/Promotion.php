<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = ['promotion_id', 'promotion_img', 'description', 'discount'];
    protected $visible = ['promotion_id', 'promotion_img', 'description', 'discount'];

}
