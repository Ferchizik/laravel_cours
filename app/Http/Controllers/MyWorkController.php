<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class MyWorkController extends Controller
{
    public function index()
    {
        $work = Work::find('2');
        dump($work->id);
        dump($work->name);
        dump($work->level);
    }
}
