<?php

namespace App\Repositories;

use App\Models\Job;
use App\Repositories\BaseRepository;

/**
 * Class JobRepository
 * @package App\Repositories
 * @version January 25, 2020, 10:56 am UTC
*/

class JobRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Job::class;
    }
}
