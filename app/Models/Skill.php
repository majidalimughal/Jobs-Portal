<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Skill
 * @package App\Models
 * @version January 25, 2020, 11:00 am UTC
 *
 * @property string name
 * @property integer user_id
 * @property string start_date
 * @property string skill_level
 * @property string past_work_history
 * @property string any_other_information
 * @property string|\Carbon\Carbon admin_interview
 * @property integer admin_user_id
 * @property string score
 * @property string interview_requested
 * @property number interview_amount_paid
 */
class Skill extends Model
{
    use SoftDeletes;

    public $table = 'skills';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'user_id',
        'start_date',
        'skill_level',
        'past_work_history',
        'any_other_information',
        'admin_interview',
        'admin_user_id',
        'score',
        'interview_requested',
        'interview_amount_paid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'user_id' => 'integer',
        'start_date' => 'date',
        'skill_level' => 'string',
        'past_work_history' => 'string',
        'any_other_information' => 'string',
        'admin_interview' => 'datetime',
        'admin_user_id' => 'integer',
        'score' => 'string',
        'interview_requested' => 'string',
        'interview_amount_paid' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'user_id' => 'required',
        'start_date' => 'required',
        'interview_requested' => 'required'
    ];

    
}
