<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserStatus
 */
class UserStatus extends Model
{
    protected $table = 'user_statuses';

    public $timestamps = true;

    protected $fillable = [
        'name'
    ];

    protected $guarded = [];

        
}