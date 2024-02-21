<?php

namespace App\Repositories;
use App\Repositories\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;
/**
 * Class UserService
 * @package App\Services
 */
class BaseRepository implements BaseRepositoryInterface{
    protected $model;
    public function __construct(
        Model $model
    ){
        $this->model = $model;
    }

    public function all(){
        return $this->model->all();
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