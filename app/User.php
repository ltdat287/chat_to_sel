<?php

namespace App;

use App\Helpers\Helper;
use App\Models\Shop;
use App\Models\UserDetail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'provider', 'provider_id', 'user_detail_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user_detail()
    {
        return $this->belongsTo(UserDetail::class);
    }

    /**
     * @return bool|\Illuminate\Database\Eloquent\Model|null|static
     */
    public static function getShopActive()
    {
        $user = Auth::user();
        if ($user) {
            $shop = Shop::where('user_id', $user->id)->where('is_active', Helper::IS_ACTIVE)->first();

            return $shop;
        }

        return false;
    }
}
