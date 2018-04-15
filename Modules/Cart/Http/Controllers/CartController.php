<?php

namespace Modules\Cart\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Cart\Repositories\TempCartRepository;
use Modules\Product\Repositories\ProductRepository;

class CartController extends Controller
{
    private $temp_cart, $product;

    function __construct(TempCartRepository $cart, ProductRepository $product)
    {
        $this->temp_cart = $cart;
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $cart_info = $this->temp_cart->getAll();
        return $cart_info;
    }

    /**
     * Show the form for creating a new resource.
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_info = $this->product->getById($product_id);
        $insert_into_cart = ([
            'product_id' => $product_info-> id,
            'product_name_bangla' => $product_info-> bangla_name,
            'product_name' => $product_info-> name,
            'product_price' => ($product_info-> price)- (($product_info-> price * $product_info-> discount)/100),
            'product_quantity' => 1,
            'product_image' => $product_info->image
        ]);
        $this->temp_cart->create($insert_into_cart);
        echo $product_info;

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
        return view('cart::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('cart::edit');
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
