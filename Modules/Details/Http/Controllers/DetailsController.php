<?php

namespace Modules\Details\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Product\Repositories\ProductRepository;

class DetailsController extends Controller
{
    private $product;

    public function __construct(ProductRepository $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index($id = "")
    {
        $product = $this->product->getById($id);
        return view('details::index',compact('product'));
    }


}
