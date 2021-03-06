<?php
namespace Modules\Cart\Http\Controllers;

use Auth;
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
        if(Auth::check())
        {
            $cartlists = $this->temp_cart->getAllById(auth()->id());
            return $cartlists;
        }
        else
        {
            $cartlist_session =session('cartList');
            return $cartlist_session;

        }

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
        if(Auth::check())
        {
            $profile = auth()->id();
        }
        else {
            $profile = 0;
        }
        $insert_into_cart = ([
            'user_id' => $profile,
            'product_id' => $product_info-> id,
            'product_name_bangla' => $product_info-> bangla_name,
            'product_name' => $product_info-> name,
            'product_price' => ($product_info-> price)- (($product_info-> price * $product_info-> discount)/100),
            'product_quantity' => 1,
            'product_image' => $product_info->image
        ]);
        $tempCartVal = $this->temp_cart->create($insert_into_cart);
        $insert_into_cart['id'] = $tempCartVal;
        $request->session()->push('cartList', $insert_into_cart);
        echo $product_info."---".$tempCartVal;

    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //$request->session()->forget('cartList');
        $val = $request->session()->get('cartList');
        dd($val);

        foreach ($val as $k => $v)
        {
           print_r( $v);
        }
        //getCartInfo();

    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show(Request $request)
    {
        if(Auth::check())
        {
            $cartlists = $this->temp_cart->getAllById(auth()->id());
            return view('cart::index', compact('cartlists'));
        }
        else
        {
            $cartlist_session = $request->session()->get('cartList');
            return view('cart::index', compact('cartlist_session'));

        }
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        foreach ($_POST['cart_id'] as  $key => $value)
        {
            $this->temp_cart->update($_POST['cart_id'][$key], [
                'product_quantity' => $_POST['cart-quantity'][$key],
                'product_price' => $_POST['cart_price'][$key] * $_POST['cart-quantity'][$key]
            ]);
        }

        if($request->session()->has('cartList'))
        {
            $cart_session = $request->session()->get('cartList');

            foreach ($cart_session as $key=>$value) {
                //echo $_POST['cart_id'][$key];
                if ($cart_session[$key]['id'] == $_POST['cart_id'][$key])
                {
                    $cart_session[$key]['product_quantity'] = $_POST['cart-quantity'][$key];
                    $cart_session[$key]['product_price'] = $_POST['cart_price'][$key] * $_POST['cart-quantity'][$key];
                    //echo "update done";
                }
            }
            //print_r($cart_session);
            $request->session()->forget('cartList');

            $request->session()->put('cartList', $cart_session);
        }

        return redirect('/cart');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Request $request)
    {
        $tempCartID = $request->input('cart_id');
        $this->temp_cart->delete($tempCartID);
        return "done";

    }
}
