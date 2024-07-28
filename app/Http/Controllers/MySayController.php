<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MySayController extends Controller
{
    public function sayHello()
    {
        return 'Hello user!';
    }
}
