<?php
/**
 * Created by PhpStorm.
 * User: rakib
 * Date: 3/21/2018
 * Time: 12:42 AM
 */
namespace Modules\Homepage\Services;

use Modules\Homepage\Repositories\HomePageRepository;
use Modules\Product\Entities\Product as Product;


class HomePageEloquent implements HomePageRepository
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

}

