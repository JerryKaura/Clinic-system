<?php

namespace App\Repositories;

use App\Models\Appointments;
use App\Repositories\BaseRepository;

/**
 * Class AppointmentsRepository
 * @package App\Repositories
 * @version January 30, 2020, 7:36 am UTC
*/

class AppointmentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'who_to_see',
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
        return Appointments::class;
    }
}
