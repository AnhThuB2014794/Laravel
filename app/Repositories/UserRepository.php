<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

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

    public function update(int $id = 0, array $payload = []){
        $model = $this->findById($id);
        return $model->update($payload);
    }
    public function delete(int $id =0){
        return $this->findById($id)->delete();
    }
    public function forceDelete(int $id = 0){
        return $this->findById($id)->forceDelete();
    }

    public function pagination(
        array $column = ['*'],
        array $condition = [],
        array $join = [],
        int $prerPage = 20
    ){
        $query = $this->model->select($column)->where($condition);
        if(!empty($join)){
            $query->join(...$join);
        }
        return $query->paginate($prerPage);
    }
    public function findById(
        int $modelId,
        array $column = ['*'],
        array $relation = []
    ){
        return $this->model->select($column)->with($relation)->findOrFail($modelId);
    }
}