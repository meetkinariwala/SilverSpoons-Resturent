<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
        "/register_user","/login_api","/api/addOrders","/api/getOrders","/api/removeOrder","/api/update/qty","/api/makePayment","/api/addtablebooking"
        ,"/api/get/Menu/cat","/api/getCountOfCart",'/order/history',"/api/getCouponFromCode",
        "/api/editProfile"


    ];
}
