<?php

namespace App\Repositories;

use App\Models\Invitation;
use App\Repositories\BaseRepository;

/**
 * Class InvitationRepository
 * @package App\Repositories
 * @version January 25, 2020, 10:55 am UTC
*/

class InvitationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'sender_contact',
        'receiver_user_id',
        'organization_id',
        'job_id',
        'interview_status',
        'date_of_interview',
        'invitation_note',
        'employer_interview_note',
        'jobseeker_post_interview_review'
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
        return Invitation::class;
    }
}
