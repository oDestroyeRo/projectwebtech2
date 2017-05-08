<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voucher extends Model
{
    use SoftDeletes;
    protected $fillable = ['voucher_id', 'voucher_point', 'voucher_price','voucher_img'];
    protected $visible = ['voucher_id', 'voucher_point', 'voucher_price','voucher_img'];
    protected $dates = ['deleted_at'];
}
