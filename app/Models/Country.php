<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 */
class Country extends Model
{
    protected $table = 'countries';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'code',
        's3_region_id',
        'currency_id'
    ];

    protected $guarded = [];

        
}