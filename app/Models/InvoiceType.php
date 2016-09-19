<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class InvoiceType
 */
class InvoiceType extends Model
{
    protected $table = 'invoice_types';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'code'
    ];

    protected $guarded = [];

    public static function getCountryInvoiceByCode($code = null)
    {
        if($code == null)
            return false;
        $data = DB::table('invoice_types')->where('code','=',$code)->first();
        return $data;
    }
}