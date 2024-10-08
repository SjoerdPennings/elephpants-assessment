<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Elephpant;

class ElephpantController extends Controller
{
    public function index()
    {
        return view('species', [
            'elephpants' => Elephpant::all(),
            'title' => 'Species'
        ]);
    }

    public function show()
    {
        return view('species', [
            'elephpants' => Elephpant::where('user_id' , '=', auth()->id())->get(),
            'title' => 'Herd'
        ]);
    }
}
