<?php

namespace App\Repositories\Interfaces;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface BaseRepositoryInterface
{
    public function all();
    public function pagination(
        array $column = ['*'],
        array $condition = [],
        array $join = [],
        int $prerPage = 20
    );
    public function findById(int $id);
}