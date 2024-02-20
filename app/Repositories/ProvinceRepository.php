<?php

namespace App\Repositories;
use App\Repositories\Interfaces\ProvinceRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\Province;
/**
 * Class UserService
 * @package App\Services
 */
class ProvinceRepository extends BaseRepository implements ProvinceRepositoryInterface{

    protected $model;
    public function __construct(
        Province $model
    )
    {
        $this->model = $model;
    }
    public function findById(
        int $modelId,
        array $column = ['*'],
        array $relation = []
    ){
        return $this->model->select($column)->with($relation)->findOrFail($modelId);
    }
}