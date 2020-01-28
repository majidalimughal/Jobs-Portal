<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrganizationUser
 * @package App\Models
 * @version January 25, 2020, 10:59 am UTC
 *
 * @property integer user_id
 * @property integer organization_id
 * @property string start_date
 * @property string end_date
 * @property string role
 */
class OrganizationUser extends Model
{
    use SoftDeletes;

    public $table = 'organization_user';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'organization_id',
        'start_date',
        'end_date',
        'role'
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
        'start_date' => 'date',
        'end_date' => 'date',
        'role' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'organization_id' => 'required'
    ];

    
}
