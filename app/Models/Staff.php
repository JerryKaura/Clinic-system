<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Staff
 * @package App\Models
 * @version February 5, 2020, 1:23 pm UTC
 *
 * @property string name
 * @property string email
 * @property string phone
 * @property string gender
 * @property integer id_number
 * @property string hospital
 * @property boolean status
 */
class Staff extends Model
{
    use SoftDeletes;

    public $table = 'staff';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'phone',
        'gender',
        'id_number',
        'hospital',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'gender' => 'string',
        'id_number' => 'integer',
        'hospital' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'gender' => 'required',
        'id_number' => 'required',
        'hospital' => 'required',
        'status' => 'required'
    ];

    
}
