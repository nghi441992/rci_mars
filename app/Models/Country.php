<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public static function getCountryByCode($code = null)
    {
        if($code == null)
            return false;
        $data = DB::table('countries')->where('code','=',$code)->first();
        return $data;
    }
}