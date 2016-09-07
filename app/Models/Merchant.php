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

    //    1->DRAFT
//    2->READY
//    3->PROD-D
//    4->PROD-Z
//    5->EDIT
//    6->UPDATE
    protected $fillable = [
        'name',
        'country_id',
        'city',
        'public',
        'user_id',
        'operation_country',
        'status'
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
                 ,'merchants.city','receipt_types.code as receipt_types_code'
                 ,'invoice_types.code as invoice_types_code','algorithm_types.code as algorithm_types_code','merchants.status')
             ->limit(20)
             ->get();
         return $data;
     }
    public static function searchMerchantByKeyword($keyword = null,$alphabet = null,$status = null)
    {
        $query = DB::table('merchants')
            ->join('users', 'users.id', '=', 'merchants.user_id')
            ->leftjoin('invoice_zonal_algorithms', 'invoice_zonal_algorithms.merchant_id', '=', 'merchants.id')
            ->leftjoin('receipt_zonal_algorithms', 'receipt_zonal_algorithms.merchant_id', '=', 'merchants.id')
            ->leftjoin('receipt_types', 'receipt_types.id', '=', 'receipt_zonal_algorithms.receipt_type_id')
            ->leftjoin('invoice_types', 'invoice_types.id', '=', 'invoice_zonal_algorithms.invoice_type_id')
            ->join('countries', 'countries.id', '=', 'merchants.country_id')
            ->leftjoin('algorithm_types', 'algorithm_types.id', '=', 'receipt_zonal_algorithms.algorithm_type_id')
//             ->leftjoin('algorithm_types','algorithm_types.id','=','invoice_zonal_algorithms.algorithm_type_id')
            ->select('merchants.name', 'merchants.public', 'users.email', 'countries.code as countries_code '
                , 'merchants.city', 'receipt_types.code as receipt_types_code', 'invoice_types.code as invoice_types_code'
                , 'algorithm_types.code as algorithm_types_code','merchants.status');
        if($keyword != null)
        {
            $query->where('invoice_zonal_algorithms.keywords','like','%'.$keyword.'%');
            $query->orWhere('receipt_zonal_algorithms.keywords','like','%'.$keyword.'%');
        }
        if($alphabet != null)
        {
            $query->where('merchants.name','like', $alphabet.'%');
        }
        if(strtolower($status) == 'draft')
        {
            $query->where('merchants.status','=',1);
        }
        elseif(strtolower($status) == 'ready')
        {
            $query->where('merchants.status','=',2);
        }
        elseif(strtolower($status) == 'prod-d')
        {
            $query->where('merchants.status','=',3);
        }
        elseif(strtolower($status) == 'prod-z')
        {
            $query->where('merchants.status','=',4);
        }
        elseif(strtolower($status) == 'edit')
        {
            $query->where('merchants.status','=',5);
        }
        elseif(strtolower($status) == 'update')
        {
            $query->where('merchants.status','=',6);
        }
        $query->limit(20);
        $data = $query->get();
        return $data;
    }
}