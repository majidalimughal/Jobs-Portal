<?php

namespace App\Repositories;

use App\Models\OrganizationUser;
use App\Repositories\BaseRepository;

/**
 * Class OrganizationUserRepository
 * @package App\Repositories
 * @version January 25, 2020, 10:59 am UTC
*/

class OrganizationUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'organization_id',
        'start_date',
        'end_date',
        'role'
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
        return OrganizationUser::class;
    }
}
