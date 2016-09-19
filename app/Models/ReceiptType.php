<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public static function getCountryReceiptByCode($code = null)
    {
        if($code == null)
            return false;
        $data = DB::table('receipt_types')->where('code','=',$code)->first();
        return $data;
    }
        
}