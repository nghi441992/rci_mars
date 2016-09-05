<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvoiceZonalAlgorithm
 */
class InvoiceZonalAlgorithm extends Model
{
    protected $table = 'invoice_zonal_algorithms';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'algorithm_type_id',
        'merchant_id',
        'invoice_type_id',
        'keywords'
    ];

    protected $guarded = [];

        
}