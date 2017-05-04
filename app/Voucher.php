<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = ['voucher_id', 'voucher_point', 'voucher_price'];
    protected $visible = ['voucher_id', 'voucher_point', 'voucher_price'];

}
