<?php
/**
 * Created by PhpStorm.
 * User: alexandr
 * Date: 2019-02-14
 * Time: 20:44
 */

namespace App\Repositories;


interface RepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function show($id);
}