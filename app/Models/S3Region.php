<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class S3Region
 */
class S3Region extends Model
{
    protected $table = 's3_regions';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'code',
        'endpoint'
    ];

    protected $guarded = [];

        
}