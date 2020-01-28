<?php

namespace App\Repositories;

use App\Models\Country;
use App\Repositories\BaseRepository;

/**
 * Class CountryRepository
 * @package App\Repositories
 * @version January 25, 2020, 10:53 am UTC
*/

class CountryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'code',
        'currency',
        'phone_ext',
        'flag'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Country::class;
    }
}
