<?php

namespace App\Repositories;

use App\Models\Organization;
use App\Repositories\BaseRepository;

/**
 * Class OrganizationRepository
 * @package App\Repositories
 * @version January 25, 2020, 10:58 am UTC
*/

class OrganizationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Organization::class;
    }
}
