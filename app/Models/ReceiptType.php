<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReceiptType
 */
class ReceiptType extends Model
{
    protected $table = 'receipt_types';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'code'
    ];

    protected $guarded = [];

        
}