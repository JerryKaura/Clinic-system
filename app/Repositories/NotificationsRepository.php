<?php

namespace App\Repositories;

use App\Models\Notifications;
use App\Repositories\BaseRepository;

/**
 * Class NotificationsRepository
 * @package App\Repositories
 * @version January 30, 2020, 7:50 am UTC
*/

class NotificationsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'date'
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
        return Notifications::class;
    }
}
