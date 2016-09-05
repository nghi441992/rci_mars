<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MerchantOperationCountry
 */
class MerchantOperationCountry extends Model
{
    protected $table = 'merchant_operation_country';

    public $timestamps = true;

    protected $fillable = [
        'merchant_id',
        'country_id'
    ];

    protected $guarded = [];

        
}