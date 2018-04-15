<?php
/**
 * Created by PhpStorm.
 * User: rakib
 * Date: 4/16/2018
 * Time: 12:39 AM
 */
use Modules\Cart\Http\Controllers\CartController as Cart;

function getCartInfo(){
    return app(Cart::class)->index();
}