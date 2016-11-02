<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Team
 * @package App\Models
 * @version November 2, 2016, 2:41 pm UTC
 */
class Team extends Model
{
    use SoftDeletes;

    public $table = 'team';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'picture',
        'title',
        'content',
        'status',
        'rank',
        'current_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'picture' => 'string',
        'title' => 'string',
        'content' => 'string',
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
