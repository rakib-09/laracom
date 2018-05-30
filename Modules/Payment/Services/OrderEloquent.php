<?php
/**
 * Created by PhpStorm.
 * User: rakib
 * Date: 5/29/2018
 * Time: 12:05 AM
 */
namespace Modules\Payment\Services;

use Modules\Payment\Entities\Order as Order;
use Modules\Payment\Repositories\OrderRepository;

class OrderEloquent implements OrderRepository
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
    public function __construct(Order $model)
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
     * Get all Products by id.
     *
     * @param string $id
     * @return TempCart
     */
    public function getAllById($id = "")
    {
        return $this->model->all()->where('user_id', $id);
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