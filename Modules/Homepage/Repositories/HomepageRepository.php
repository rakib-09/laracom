<?php
/**
 * Created by PhpStorm.
 * User: rakib
 * Date: 3/21/2018
 * Time: 12:40 AM
 */
namespace Modules\Homepage\Repositories;

interface HomePageRepository
{

    function getAll();

    function getById($id);

}