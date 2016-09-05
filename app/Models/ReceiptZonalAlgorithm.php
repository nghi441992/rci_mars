<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReceiptZonalAlgorithm
 */
class ReceiptZonalAlgorithm extends Model
{
    protected $table = 'receipt_zonal_algorithms';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'algorithm_type_id',
        'merchant_id',
        'receipt_type_id',
        'keywords'
    ];

    protected $guarded = [];

        
}