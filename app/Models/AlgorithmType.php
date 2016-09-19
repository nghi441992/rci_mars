<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class AlgorithmType
 */
class AlgorithmType extends Model
{
    protected $table = 'algorithm_types';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'code'
    ];

    protected $guarded = [];
    public static function getCountryAlgoByCode($code = null)
    {
        if($code == null)
            return false;
        $data = DB::table('algorithm_types')->where('code','=',$code)->first();
        return $data;
    }
        
}