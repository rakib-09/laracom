<?php
/**
 * Created by PhpStorm.
 * User: rakib
 * Date: 4/12/2018
 * Time: 12:24 AM
 */
namespace Modules\Cart\Repositories;

interface TempCartRepository
{

    function getAll();

    function getById($id);

    function create(array $attributes);

    function update($id, array $attributes);

    function delete($id);

}