<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Product\Repositories\ProductRepository;
use Modules\Product\Entities\Product;
use Image;
use Storage;

class ProductController extends Controller
{
    private $product;
    /**
     * initiate ProductRepository to product.
     * @return Response
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
        $product_list = $this->product->getAll();
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

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $image      = $request->file('product_image');
        $fileName   = time() . '.' . $image->getClientOriginalExtension();
        $img = Image::make($image->getRealPath());
        $img->resize(200, 300);
        $img->stream('jpg',90); // <-- Key point
        Storage::disk('local')->put('images/products'.'/'.$fileName, $img, 'public');

        $filename = 'test.txt';
        Storage::cloud()->put($filename, \Carbon\Carbon::now()->toDateTimeString());
        $dir = '/';
        $recursive = false; // Get subdirectories also?
        $file = collect(Storage::cloud()->listContents($dir, $recursive))
            ->where('type', '=', 'file')
            ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
            ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
            ->sortBy('timestamp')
            ->last();
        return Storage::cloud()->get($file['path']);


    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {

        return view('product::show');
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
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
