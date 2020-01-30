<?php

namespace App\Repositories;

use App\Models\Departments;
use App\Repositories\BaseRepository;

/**
 * Class DepartmentsRepository
 * @package App\Repositories
 * @version January 30, 2020, 8:05 am UTC
*/

class DepartmentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Departments::class;
    }
}
