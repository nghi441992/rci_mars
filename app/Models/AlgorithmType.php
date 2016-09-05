<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AlgorithmType
 */
class AlgorithmType extends Model
{
    protected $table = 'algorithm_types';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'code'
    ];

    protected $guarded = [];

        
}