<?php

namespace App\Repositories;

use App\Models\Skill;
use App\Repositories\BaseRepository;

/**
 * Class SkillRepository
 * @package App\Repositories
 * @version January 25, 2020, 11:00 am UTC
*/

class SkillRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Skill::class;
    }
}
