<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 */
class User extends Model
{
    protected $table = 'users';

    public $timestamps = true;

    protected $fillable = [
        'forename',
        'surname',
        'email',
        'password',
        'verified',
        'user_status_id',
        'user_role_id',
        'currency_id',
        'country_id',
        'remember_token',
        'verification_code',
        'stripe_id',
        'card_last_four',
        'trial_ends_at',
        'card_brand'
    ];

    protected $guarded = [];

        
}