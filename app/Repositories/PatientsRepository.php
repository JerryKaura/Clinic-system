<?php

namespace App\Repositories;

use App\Models\Patients;
use App\Repositories\BaseRepository;

/**
 * Class PatientsRepository
 * @package App\Repositories
 * @version January 30, 2020, 7:33 am UTC
*/

class PatientsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'id_number',
        'bloodgroup',
        'gender',
        'phone',
        'email',
        'dob',
        'address',
        'guardian',
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
        return Patients::class;
    }
}
