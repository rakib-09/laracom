<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Product\Repositories\ProductRepository;
use Carbon;

class ProductController extends Controller
{
    private $product;

    /**
     * initiate ProductRepository to product.
     *
     * @param ProductRepository $product
     */

    public function __construct(ProductRepository $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        //$product_list = $this->product->getAll();
        return view('product::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('product::create');
    }

    public function ranking()
    {
        $productList = $this->product->getAll();
        return view('product::ranking', compact('productList'));
    }

    public function homePageDesign()
    {
        return view('product::homepage');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */


    public function store(Request $request)
    {
        $imagePath = $this->product->imageUpload($request->file('product_image'));
        $filePath = $this->product->fileUpload($request->file('product_pdf'));
        $attributes = array([
            'category_id'=>$request->input('categorys'),
            'name' => $request->input('product_name_en'),
            'bangla_name'=> $request->input('product_name_bn'),
            'writer'=> $request->input('writer_name_en'),
            'writer_bangla'=> $request->input('writer_name_bn'),
            'publication'=> $request->input('publisher_name'),
            'image'=> $imagePath,
            'price'=> $request->input('product_price'),
            'discount'=> $request->input('product_discount'),
            'ext_link'=> $filePath['path'],
            'description'=> $request->input('product_description'),
            'created_At' => \Carbon\Carbon::now('Asia/Dhaka')
        ]);
       $this->product->create($attributes);

        return view('product::create');

    }


    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        $product = $this->product->getById($_POST['id']);
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('product::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        $id = $request->input('product_id');
        echo $id;

        $attributes = array([
            'name' => $request->input('name'),
            'bangla_name'=> $request->input('bangla_name'),
            'writer'=> $request->input('writer'),
            'writer_bangla'=> $request->input('writer_bangla'),
            'publication'=> $request->input('publication'),
            'price'=> $request->input('price'),
            'discount'=> $request->input('discount'),
            'description'=> $request->input('description'),
            'updated_At' => \Carbon\Carbon::now('Asia/Dhaka')
        ]);
        $this->product->update($id, $attributes);
        return redirect('/product/ranking');


    }



    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
