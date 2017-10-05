<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    /**
     * @var string
     */
    protected $table = 'user_detail';

    /**
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'dob', 'gender', 'avatar', 'staff_shop_id'
    ];
}
