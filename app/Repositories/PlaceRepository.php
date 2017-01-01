<?php

namespace App\Repositories;

use App\Models\Place;
use InfyOm\Generator\Common\BaseRepository;

class PlaceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Place::class;
    }
}
