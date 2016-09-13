<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchant;
use App\Http\Requests;

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
        $merchant = new Merchant();
        $merchant->name = $data['Merchant[merchantName]'];
        $merchant->country_id = 228;
        $merchant->city = $data['Merchant[city]'];
        $merchant->public = 1;
        $merchant->user_id = 1;
        $merchant->operation_country = 228;
        $merchant->status = 1;
        $merchant->save();
        return response()->json(['status' => true]);
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
