<?php namespace App\Repositories;

use App\Models\Technology;

class TechnologyRepository extends BaseRepository
{
    protected $model;

    public function __construct(Technology $model)
    {
        parent::__construct($model);
    }
}