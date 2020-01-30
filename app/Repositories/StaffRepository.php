<?php

namespace App\Repositories;

use App\Models\Staff;
use App\Repositories\BaseRepository;

/**
 * Class StaffRepository
 * @package App\Repositories
 * @version January 30, 2020, 7:34 am UTC
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
        'user_id',
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
