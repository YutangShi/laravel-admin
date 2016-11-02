<?php

namespace App\Repositories;

use App\Models\Manager;
use InfyOm\Generator\Common\BaseRepository;

class ManagerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
        'usertype',
        'remember_token'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Manager::class;
    }
}
