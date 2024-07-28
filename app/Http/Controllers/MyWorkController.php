<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class MyWorkController extends Controller
{
    public function index()
    {
        $work = Work::find(1);
        dump($work->id);
        dump($work->name);
        dump($work->level);
    }

    public function create()
    {
        $work = Work::create([
            'name' => 'Богат',
            'level' => '1',
        ]);
        dd($work);
    }

    public function delete()
    {
        $work = Work::find(5);
        $work->delete();
        dd('delete');
    }

    public function firstOrCreate()
    {
        $work = Work::firstOrCreate([
            'level' => 5,
        ],[
            'name' => 'Вонючка',
            'level' => 10,
        ]);
        dump($work->name);
//        dd('finish');
    }
}
