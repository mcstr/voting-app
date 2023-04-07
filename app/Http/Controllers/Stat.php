<?php

namespace App\Http\Controllers;

use App\Models\User;
use \App\Models\Order;

class Stat extends Controller
{


    public function index()
    {
        return view('stats');
    }
}
