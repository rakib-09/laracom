<?php

namespace Modules\Homepage\Http\Controllers;

use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Product\Repositories\HomepageRepository;
use Modules\Product\Repositories\ProductRepository;
use Modules\Cart\Repositories\TempCartRepository;


class HomepageController extends Controller
{
    private $product, $cart, $homepage;

    /**
     * Display a listing of the resource.
     * @param ProductRepository $product
     * @param TempCartRepository $cart
     */

    public function __construct(ProductRepository $product, TempCartRepository $cart, HomepageRepository $homepage)
    {
        $this->product = $product;
        $this->cart = $cart;
        $this->homepage = $homepage;
    }


    public function index()
    {
        $homepage_all = $this->homepage->getAll();

        $all_products = $this->product->getAll();
        return view('homepage::index', compact('all_products','homepage_all'));

    }
}
