<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Job
 * @package App\Models
 * @version January 25, 2020, 10:56 am UTC
 *
 * @property integer user_id
 * @property integer organization_id
 * @property integer country_id
 * @property string title
 * @property integer skills_required
 * @property string Description
 * @property string work_type
 * @property string job_type
 * @property string status
 */
class Job extends Model
{
    use SoftDeletes;

    public $table = 'jobs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'organization_id',
        'country_id',
        'title',
        'skills_required',
        'Description',
        'work_type',
        'job_type',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'organization_id' => 'integer',
        'country_id' => 'integer',
        'title' => 'string',
        'skills_required' => 'integer',
        'Description' => 'string',
        'work_type' => 'string',
        'job_type' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'title' => 'required',
        'skills_required' => 'required',
        'Description' => 'required',
        'work_type' => 'required',
        'job_type' => 'required'
    ];

    
}
