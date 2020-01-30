<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patients
 * @package App\Models
 * @version January 30, 2020, 7:33 am UTC
 *
 * @property string name
 * @property integer id_number
 * @property string bloodgroup
 * @property string gender
 * @property string phone
 * @property string email
 * @property string dob
 * @property string address
 * @property string guardian
 * @property boolean status
 */
class Patients extends Model
{
    use SoftDeletes;

    public $table = 'patients';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'id_number' => 'integer',
        'bloodgroup' => 'string',
        'gender' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'dob' => 'string',
        'address' => 'string',
        'guardian' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'id_number' => 'required',
        'bloodgroup' => 'required',
        'gender' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'dob' => 'required',
        'address' => 'required',
        'guardian' => 'required',
        'status' => 'required'
    ];

    
}
