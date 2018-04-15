<?php

namespace Modules\Homepage\Http\Controllers;

use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Product\Repositories\ProductRepository;
use Modules\Cart\Repositories\TempCartRepository;


class HomepageController extends Controller
{
    private $product, $cart;

    /**
     * Display a listing of the resource.
     * @param ProductRepository $product
     * @param TempCartRepository $cart
     */

    public function __construct(ProductRepository $product, TempCartRepository $cart)
    {
        $this->product = $product;
        $this->cart = $cart;
    }


    public function index()
    {

        $all_products = $this->product->getAll();


        return view('homepage::index', compact('all_products'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('homepage::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('homepage::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('homepage::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
