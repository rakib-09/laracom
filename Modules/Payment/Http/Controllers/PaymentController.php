<?php

namespace Modules\Payment\Http\Controllers;

use App\Mail\NewOrder;
use Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Cart\Repositories\TempCartRepository;
use Modules\Payment\Repositories\InvoiceRepository;
use Modules\Payment\Repositories\OrderRepository;


class PaymentController extends Controller
{
    private $temp_cart, $invoice, $order;

    function __construct(TempCartRepository $cart, InvoiceRepository $invoice, OrderRepository $order)
    {
        $this->temp_cart = $cart;
        $this->invoice = $invoice;
        $this->order = $order;
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('payment::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('payment::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $gift = $request->input('gift');
        if ($gift == '')
        {
            $gift = 0;
        }
        $insert_into_invoice = ([
            'user_id' => Auth()->id(),
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
            'postal_code' => $request->input('postal'),
            'send_gift' => $gift,
            'created_at' => \Carbon\Carbon::now('Asia/Dhaka'),
        ]);

        $invoice_id = $this->invoice->create($insert_into_invoice);

        foreach ($request->input('tempCartId') as $key => $value)
        {
            $tempCart = $this->temp_cart->getById($_POST['tempCartId'][$key]);
            $insert_into_Order = ([
                'invoice_id' => $invoice_id,
                'product_id' => $tempCart->product_id,
                'product_name' => $tempCart->product_name,
                'product_price' => $tempCart->product_price,
                'quantity' => $tempCart->product_quantity,
                'created_at' => \Carbon\Carbon::now(CommonSetting::timezone())->toDateTimeString(),
                ]);

            $order_id = $this->order->create($insert_into_Order);
            $this->temp_cart->delete($_POST['tempCartId'][$key]);
        }
        Mail::to($request->input('email'))->send(new NewOrder());
        return view('payment::index', compact('invoice_id'));
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('payment::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('payment::edit');
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
