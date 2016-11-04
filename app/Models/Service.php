<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Service
 * @package App\Models
 * @version November 3, 2016, 9:02 am UTC
 */
class Service extends Model
{
    use SoftDeletes;

    public $table = 'service';
    
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
