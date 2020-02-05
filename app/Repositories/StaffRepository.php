<?php

namespace App\Repositories;

use App\Models\Staff;
use App\Repositories\BaseRepository;

/**
 * Class StaffRepository
 * @package App\Repositories
 * @version February 5, 2020, 1:23 pm UTC
*/

class StaffRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'phone',
        'gender',
        'id_number',
        'hospital',
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
        return Staff::class;
    }
}
