<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyApi extends Controller
{
    //

    public function index()
    {
        //
        return ["index" => "its indexing 1", "index1" => "its indexing 1", "index2" => "its indexing 1" ];
    }


}
