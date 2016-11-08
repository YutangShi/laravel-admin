<?php

namespace App\Repositories;

use App\Models\Faq;
use InfyOm\Generator\Common\BaseRepository;

class FaqRepository extends BaseRepository
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
        return Faq::class;
    }
}
