<?php
/**
 * Created by PhpStorm.
 * User: rakib
 * Date: 3/15/2018
 * Time: 1:03 AM
 */
namespace Modules\Product\Services;

use Modules\Product\Entities\Product as Product;
use Modules\Product\Repositories\ProductRepository;
use Image;
use Storage;
use File;


class ProductEloquent implements ProductRepository
{
    /**
     * @var $model
     */
    private $model;

    /**
     * EloquentTask constructor.
     *
     * @param Product $model
     */
    public function __construct(Product $model)
    {
        $this->model = new $model;
    }

    /**
     * Get all Products.
     *
     * @return Product
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * Get task by id.
     *
     * @param integer $id
     *
     * @return Product
     */
    public function getById($id)
    {
        return $this->model->find($id);
    }

    /**
     * Create a new Product.
     *
     * @param array $attributes
     *
     * @return Product
     */
    public function create(array $attributes)
    {
        //$this->model->create($attributes);
        return $this->model->insert($attributes);

       // return $attributes;
    }

    /**
     * Update a Product.
     *
     * @param integer $id
     * @param array $attributes
     *
     * @return Product
     */
    public function update($id, array $attributes)
    {
        return $this->model->where('id',$id)->update($attributes[0]);
    }

    /**
     * Delete a Product.
     *
     * @param integer $id
     *
     * @return boolean
     */
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
    /**
     * Upload Images
     *
     * @param Image
     *
     * @return fileName
     */
    public function imageUpload($image)
    {
        $fileName   = time() . '.' . $image->getClientOriginalExtension();
        $img = Image::make($image->getRealPath());
        $img->resize(200, 300);
        $img->stream('jpg',90); // <-- Key point
        Storage::disk('local')->put('public/images/products'.'/'.$fileName, $img, 'public');
        return $fileName;
    }

    /**
     * Return the File Name
     *
     * @param array $array
     * @param $key
     * @param $value
     * @return fileName
     * @internal param $Array , string, string
     *
     */
    public function fileLink(Array $array, $key, $value)
    {
        foreach ($array as $subArray)
        {
            if (isset($subArray[$key]) && $subArray[$key] == $value)
                return $subArray;
        }
    }

    /**
     * File Upload to Google Drive
     *
     * @param $file
     * @return fileName
     * @internal param array $array
     * @internal param $Array , string, string
     */
    public function fileUpload($file)
    {
        Storage::cloud()->put($file->getClientOriginalName(),  File::get($file));

        //get all the uploaded file information from GOOGLE DRIVE.
        $listContents = Storage::cloud()->listContents();

        $nameOnly = preg_replace('/\..+$/', '', $file->getClientOriginalName());

        $id = $this->fileLink($listContents, 'filename', $nameOnly);

        // Change permissions to public
        $service = Storage::cloud()->getAdapter()->getService();
        $permission = new \Google_Service_Drive_Permission();
        $permission->setRole('reader');
        $permission->setType('anyone');
        $permission->setAllowFileDiscovery(false);
        $service->permissions->create($id['basename'], $permission);

        return $id;
    }

}

