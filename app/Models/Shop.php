<?php

namespace App\Models;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    // Allow insert in list fields when create with data
    protected $fillable = ['user_id', 'name', 'slug_name', 'url', 'avatar', 'landing_image'];
}
