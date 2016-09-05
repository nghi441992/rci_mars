<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Currency
 */
class Currency extends Model
{
    protected $table = 'currencies';

    public $timestamps = true;

    protected $fillable = [
        'code',
        'name'
    ];

    protected $guarded = [];

        
}