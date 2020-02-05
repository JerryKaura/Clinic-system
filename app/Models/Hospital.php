<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Hospital
 * @package App\Models
 * @version February 5, 2020, 12:59 pm UTC
 *
 * @property string name
 * @property string subcounty
 */
class Hospital extends Model
{
    use SoftDeletes;

    public $table = 'hospitals';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'subcounty'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'subcounty' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'subcounty' => 'required'
    ];

    
}
