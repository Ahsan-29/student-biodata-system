<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function Index()
    {
        return DB::select("SELECT * FROM users");
    }
}
