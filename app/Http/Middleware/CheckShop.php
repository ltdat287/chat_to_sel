<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class CheckShop
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check user login have shop
        $shop = User::getShopActive();
        if (empty($shop)) {
            return redirect(route('home'))->withErrors([trans('labels.user_not_have_shop')]);
        }

        return $next($request);
    }
}
