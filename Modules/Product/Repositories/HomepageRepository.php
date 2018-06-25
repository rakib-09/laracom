<?php
/**
 * Created by PhpStorm.
 * User: rakib
 * Date: 6/26/2018
 * Time: 4:36 AM
 */
namespace Modules\Product\Repositories;

interface HomepageRepository
{

    function getAll();

    function getById($id);

    function create(array $attributes);

    function update($id, array $attributes);

    function delete($id);

    function imageSlider($image);

    function imagePromote($image);

    function fileLink(Array $array, $key, $value);
}
