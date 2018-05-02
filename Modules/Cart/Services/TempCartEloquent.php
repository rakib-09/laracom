<?php
/**
 * Created by PhpStorm.
 * User: rakib
 * Date: 4/12/2018
 * Time: 12:56 AM
 */
namespace Modules\Cart\Services;

use Modules\Cart\Entities\TempCart as TempCart;
use Modules\Cart\Repositories\TempCartRepository;

class TempCartEloquent implements TempCartRepository
{
    /**
     * @var $model
     */
    private $model;

    /**
     * EloquentTask constructor.
     *
     * @param TempCart $model
     */
    public function __construct(TempCart $model)
    {
        $this->model = new $model;
    }

    /**
     * Get all Products.
     *
     * @return TempCart
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
     * @return TempCart
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
     * @return TempCart
     */
    public function create(array $attributes)
    {
        //$this->model->create($attributes);
        return $this->model->insertGetId($attributes);

        // return $attributes;
    }

    /**
     * Update a Product.
     *
     * @param integer $id
     * @param array $attributes
     *
     * @return TempCart
     */
    public function update($id, array $attributes)
    {
        return $this->model->find($id)->update($attributes);
    }

    /**
     * Delete from Cart.
     *
     * @param integer $id
     *
     * @return boolean
     */
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }

    public function withProduct()
    {
        return $this->model->all()->product_info;
    }
}