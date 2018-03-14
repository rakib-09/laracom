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

class ProductEloquent implements ProductRepository
{
    /**
     * @var $model
     */
    private $model;

    /**
     * EloquentTask constructor.
     *
     * @param App\Task $model
     */
    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    /**
     * Get all tasks.
     *
     * @return Illuminate\Database\Eloquent\Collection
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
     * @return App\Task
     */
    public function getById($id)
    {
        return $this->model->find($id);
    }

    /**
     * Create a new task.
     *
     * @param array $attributes
     *
     * @return App\Task
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * Update a task.
     *
     * @param integer $id
     * @param array $attributes
     *
     * @return App\Task
     */
    public function update($id, array $attributes)
    {
        return $this->model->find($id)->update($attributes);
    }

    /**
     * Delete a task.
     *
     * @param integer $id
     *
     * @return boolean
     */
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
}

