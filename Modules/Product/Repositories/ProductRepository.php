<?php
/**
 * Created by PhpStorm.
 * User: rakib
 * Date: 3/15/2018
 * Time: 12:58 AM
 */
namespace Modules\Product\Repositories;

interface ProductRepository
{

    function getAll();

    function getById($id);

    function create(array $attributes);

    function update($id, array $attributes);

    function delete($id);
}
