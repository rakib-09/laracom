<?php

namespace Modules\Checkout\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Cart\Repositories\TempCartRepository;
use Modules\Product\Repositories\ProductRepository;
use Auth;

class CheckoutController extends Controller
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
    public function index(Request $request)
    {
        if(Auth::check())
        {
            $cartlists = $this->temp_cart->getAllById(auth()->id());
            if($request->session()->has('cartList'))
            {
                $cartlist_session = $request->session()->get('cartList');
                $user_id = ([
                    'user_id' => Auth()->id()
                ]);
                foreach($cartlist_session as $key=> $value)
                {
                    $this->temp_cart->update($cartlist_session[$key][0],$user_id);
                }
            }
            return view('checkout::index', compact('cartlists'));

        }
        else
        {
            $cartlist_session = $request->session()->get('cartList');
            return view('checkout::index', compact('cartlist_session'));

        }

    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(Request $request)
    {
        if(Auth::check())
        {
            $cartlists = $this->temp_cart->getAllById(auth()->id());
            if($request->session()->has('cartList'))
            {
                $cartlist_session = $request->session()->get('cartList');
                $user_id = ([
                    'user_id' => Auth()->id()
                ]);
                foreach($cartlist_session as $key=> $value)
                {
                    $this->temp_cart->update($cartlist_session[$key][0],$user_id);
                }
            }
            $request->session()->forget('cartList');
            return redirect()->back();

        }
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
        return view('checkout::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('checkout::edit');
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
