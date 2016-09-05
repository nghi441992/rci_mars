<?php

namespace App\Models;
use app\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class Merchant
 */
class Merchant extends Model
{
    protected $table = 'merchants';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'country_id',
        'city',
        'public',
        'user_id',
        'operation_country'
    ];

    protected $guarded = [];

     public static function getListMerchant()
     {
         $data = DB::table('merchants')
             ->join('users', 'users.id', '=', 'merchants.user_id')
             ->leftjoin('invoice_zonal_algorithms','invoice_zonal_algorithms.merchant_id','=','merchants.id')
             ->leftjoin('receipt_zonal_algorithms','receipt_zonal_algorithms.merchant_id','=','merchants.id')
             ->leftjoin('receipt_types','receipt_types.id','=','receipt_zonal_algorithms.receipt_type_id')
             ->leftjoin('invoice_types','invoice_types.id','=','invoice_zonal_algorithms.invoice_type_id')
             ->join('countries','countries.id','=','merchants.country_id')
             ->leftjoin('algorithm_types','algorithm_types.id','=','receipt_zonal_algorithms.algorithm_type_id')
//             ->leftjoin('algorithm_types','algorithm_types.id','=','invoice_zonal_algorithms.algorithm_type_id')
             ->select('merchants.name', 'merchants.public', 'users.email','countries.code as countries_code '
                 ,'merchants.city','receipt_types.code as receipt_types_code','invoice_types.code as invoice_types_code','algorithm_types.code as algorithm_types_code')
             ->get();
         return $data;
     }
}