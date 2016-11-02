<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Course
 * @package App\Models
 * @version November 2, 2016, 2:36 pm UTC
 */
class Course extends Model
{
    use SoftDeletes;

    public $table = 'course';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'typeid' => 'integer',
        'title' => 'string',
        'filedata' => 'string',
        'content' => 'string',
        'cn_title' => 'string',
        'cn_content' => 'string',
        'eng_title' => 'string',
        'eng_content' => 'string',
        'status' => 'integer',
        'rank' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
