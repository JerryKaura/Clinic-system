<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Appointments
 * @package App\Models
 * @version January 30, 2020, 7:36 am UTC
 *
 * @property string name
 * @property string who_to_see
 * @property string description
 * @property string date
 */
class Appointments extends Model
{
    use SoftDeletes;

    public $table = 'appointments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'who_to_see',
        'description',
        'date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'who_to_see' => 'string',
        'description' => 'string',
        'date' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'who_to_see' => 'required',
        'description' => 'required',
        'date' => 'required'
    ];

    
}
