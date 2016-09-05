<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchant;

use App\Http\Requests;

class MerchantController extends Controller
{
    public function show()
    {
        $listMerchant = Merchant::getListMerchant();
        return view('merchant.index',[
            'data' => $listMerchant
        ]);
    }
}
