<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Product\Repositories\ProductRepository;
use Modules\Product\Repositories\HomepageRepository;
use Carbon;

class ProductController extends Controller
{
    private $product, $homepage;

    /**
     * initiate ProductRepository to product.
     *
     * @param ProductRepository $product
     */

    public function __construct(ProductRepository $product, HomepageRepository $homepage)
    {
        $this->product = $product;
        $this->homepage = $homepage;
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
        $productList = $this->product->getAll();
        return view('product::homepage', compact('productList'));
    }

    public function updateHomePage(Request $request)
    {
        $slider1 = $this->homepage->imageSlider($request->file('slider1'));
        $slider2 = $this->homepage->imageSlider($request->file('slider2'));
        $slider3 = $this->homepage->imageSlider($request->file('slider3'));
        $promote1 = $this->homepage->imagePromote($request->file('promote1'));
        $promote2 = $this->homepage->imagePromote($request->file('promote2'));
        $promote3 = $this->homepage->imagePromote($request->file('promote3'));
        $weekly = json_encode($request->input('weekly'));

        $attributes = array([
            'slider1'=> $slider1,
            'slider2' => $slider2,
            'slider3'=> $slider3,
            'promote1'=> $promote1,
            'writeup1'=> $request->input('write1'),
            'link1'=> $request->input('link1'),
            'promote2'=> $promote2,
            'writeup2'=> $request->input('write2'),
            'link2'=> $request->input('link2'),
            'promote3'=> $promote3,
            'writeup3'=> $request->input('write3'),
            'link3'=> $request->input('link3'),
            'weekly'=> $weekly,
            'created_At' => \Carbon\Carbon::now('Asia/Dhaka')
        ]);
        $this->homepage->create($attributes);
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
