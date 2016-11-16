<?php

namespace App\Repositories;

use App\Models\Team;
use InfyOm\Generator\Common\BaseRepository;

class TeamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'picture',
        'title',
        'content',
        'status',
        'rank',
        'keywords',
        'description',
        'current_at'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Team::class;
    }
}
