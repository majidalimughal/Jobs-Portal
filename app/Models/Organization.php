<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Organization
 * @package App\Models
 * @version January 25, 2020, 10:58 am UTC
 *
 * @property integer user_id
 * @property string name
 * @property string description
 * @property string contact_details
 * @property string city
 * @property string state
 * @property string country
 * @property integer country_id
 */
class Organization extends Model
{
    use SoftDeletes;

    public $table = 'organizations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'name',
        'description',
        'contact_details',
        'city',
        'state',
        'country',
        'country_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'contact_details' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country' => 'string',
        'country_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'name' => 'required',
        'description' => 'required',
        'country_id' => 'required'
    ];

    
}
