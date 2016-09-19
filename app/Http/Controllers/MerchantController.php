<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchant;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Mockery\CountValidator\Exception;
use App\Models\Country;
use App\Models\InvoiceType;
use App\Models\ReceiptType;
use App\Models\ReceiptZonalAlgorithm;
use App\Models\InvoiceZonalAlgorithm;
use App\Models\AlgorithmType;

class MerchantController extends Controller
{
    protected $_keyword = '';
    protected $_alphabet = '';
    protected $_status = '';
    public function show()
    {
        $listMerchant = Merchant::getListMerchant();
        return view('merchant.index',[
            'data' => $listMerchant
        ]);
    }
    public function search(Request $rq)
    {
        $this->clearData();
        $keyword = $rq->input('keyword'); session(['keyword' => $keyword]);
        $alphabet = $rq->input('alphabet');session(['alphabet' => $alphabet]);
        $status = $rq->input('status');session(['status' => $status]);
        $this->setData();
        $products = Merchant::searchMerchantByKeyword($this->_keyword,$this->_alphabet,$this->_status);
        $products = $products->paginate(20);
        return view('ajax.listmerchant',[
            'data'=>$products,
        ]);
    }
    public function pagine(Request $rq)
    {
        $this->setData();
        $products = Merchant::searchMerchantByKeyword($this->_keyword,$this->_alphabet,$this->_status);
        $products = $products->paginate(20);
        return view('merchant.index',[
            'data'=>$products,
        ]);
    }
    public function addNew(Request $rq)
    {
        $data = json_decode($rq->input('data'),true);
        DB::beginTransaction();
        try
        {
            $merchant = new Merchant();
            $receipt = ReceiptType::getCountryReceiptByCode($data['Merchant[documentType]']);
            $invoice = InvoiceType::getCountryInvoiceByCode($data['Merchant[documentType]']);
            $merchant->name = $data['Merchant[merchantName]'];
            $merchant->country_id = Country::getCountryByCode($data['Merchant[posCountry]'])->id;
            $merchant->city = $data['Merchant[city]'];
            $merchant->public = 1;
            $merchant->user_id = 1;
            $merchant->operation_country = Country::getCountryByCode($data['Merchant[hqCountry]'])->id;
            $merchant->status = 1;
            $merchant->postal_code = '';
            $merchant->captova_category = '';
            $merchant->algo_key_name = $data['Merchant[algoKeyName]'];
            if($data['Merchant[optionsRadios]'] == 1)
                $merchant->line_items = $data['Merchant[optionsRadios]'];
            else
                $merchant->line_items = '';
            $merchant->inferred_algo_name = $data['Merchant[inferredAlgoName]'];
            $merchant->save();
            if($receipt != null)
            {
                $receiptZonalAlgorithms = new ReceiptZonalAlgorithm();
                $receiptZonalAlgorithms->name = $data['Merchant[inferredAlgoName]'];
                $receiptZonalAlgorithms->algorithm_type_id = AlgorithmType::getCountryAlgoByCode($data['Merchant[alogoType]'])->id;
                $receiptZonalAlgorithms->merchant_id = $merchant->id;
                $receiptZonalAlgorithms->receipt_type_id = $receipt->id;
                $receiptZonalAlgorithms->keywords = json_encode($data['Merchant[listKeyWord]']);
                $receiptZonalAlgorithms->save();

            }else {
                $invoiceZonalAlgorithms = new InvoiceZonalAlgorithm();
                $invoiceZonalAlgorithms->name = $data['Merchant[inferredAlgoName]'];
                $invoiceZonalAlgorithms->algorithm_type_id = AlgorithmType::getCountryAlgoByCode($data['Merchant[alogoType]'])->id;
                $invoiceZonalAlgorithms->merchant_id = $merchant->id;
                $invoiceZonalAlgorithms->invoice_type_id = $invoice->id;
                $invoiceZonalAlgorithms->keywords = json_encode($data['Merchant[listKeyWord]']);
                $invoiceZonalAlgorithms->save();
            }
            DB::commit();
            return response()->json(['status' => true]);
            
        }catch (Exception $ex)
        {
            DB::rollback();
            return response()->json(['status' => false]);
            throw new $ex;
        }
       
    }

    private function setData()
    {
        if(session()->get('keyword') != null)
            $this->_keyword = session()->get('keyword');
        if(session()->get('alphabet') != null)
            $this->_alphabet = session()->get('alphabet');
        if(session()->get('status') != null)
            $this->_status = session()->get('status');
    }
    private function clearData()
    {
        if(session()->get('keyword') != null)
            $this->_keyword = null;
        if(session()->get('alphabet') != null)
            $this->_alphabet = null;
        if(session()->get('status') != null)
            $this->_status = null;
    }
    
}
