<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

use App\Http\Requests;

class countryController extends Controller
{
    public function getList()
    {
        $listcountry = Country::all(array('id','name'))->toArray();
        return json_encode($listcountry) ;
    }

    
}
