<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_detail';

    protected $fillable = ['first_name', 'last_name', 'dob', 'gender', 'avatar', 'staff_shop_id'];
}
