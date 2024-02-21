<?php

namespace App\Repositories\Interfaces;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface UserRepositoryInterface
{
    public function getAllPaginate();
    public function create();
    public function update(int $id = 0, array $payload = []);
    public function delete(int $id = 0);
    public function forceDelete(int $id = 0);
    public function pagination(
        array $column = ['*'],
        array $condition = [],
        array $join = [],
        int $prerpage = 20
    );
    public function findById(int $id);
}