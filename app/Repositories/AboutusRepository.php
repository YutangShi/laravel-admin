<?php

namespace App\Repositories;

use App\Models\Aboutus;
use InfyOm\Generator\Common\BaseRepository;

class AboutusRepository extends BaseRepository
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
        'rank'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Aboutus::class;
    }
}
