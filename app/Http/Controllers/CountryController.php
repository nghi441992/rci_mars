<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

use App\Http\Requests;

class CountryController extends Controller
{
    public function getList()
    {
        $listcountry = Country::all(array('id','name','code'))->toArray();
        return json_encode($listcountry) ;
    }
}
