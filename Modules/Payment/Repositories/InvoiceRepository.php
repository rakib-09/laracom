<?php
/**
 * Created by PhpStorm.
 * User: rakib
 * Date: 5/29/2018
 * Time: 12:03 AM
 */
namespace Modules\Payment\Repositories;

interface InvoiceRepository
{

    function getAll();

    function getAllById($id);

    function getById($id);

    function create(array $attributes);

    function update($id, array $attributes);

    function delete($id);

    function withOrder($id);

}