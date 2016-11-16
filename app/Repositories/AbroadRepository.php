<?php

namespace App\Repositories;

use App\Models\Abroad;
use InfyOm\Generator\Common\BaseRepository;

class AbroadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'typeid',
        'title',
        'filedata',
        'content',
        'cn_title',
        'cn_content',
        'eng_title',
        'eng_content',
        'status',
        'rank',
        'keywords',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Abroad::class;
    }
}
