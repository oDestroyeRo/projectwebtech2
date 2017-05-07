<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = ['point'];
    protected $visible = ['id', 'point'];

    // public function user()
    // {
    //     return $this->hasOne('App\User');
    // }

}
