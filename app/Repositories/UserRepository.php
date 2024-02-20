<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
/**
 * Class UserService
 * @package App\Services
 */
class UserRepository implements UserRepositoryInterface{
    protected $model;
    public function __construct(
        User $model
    ){
        $this->model = $model;
    }
    public function getAllPaginate(){

        return User::paginate(5);
    }

    public function create(array $payload = []){
        $model = $this->model->create($payload);
        return $model->fresh();
    }
}