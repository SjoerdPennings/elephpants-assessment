<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Elephpant;
use App\Models\User;

class ElephpantController extends Controller
{
    public function index()
    {
        return view('species', [
            'elephpants' => Elephpant::all(),
            'title' => 'Species'
        ]);
    }

    public function show(int $id = null)
    {


        if ($id == null) {
            $title = "Your Herd";
            $id = auth()->id();
        } else {
            $title = 'Herd of ' . User::find($id)->name;
        }
        if (User::find($id) == null) {
            abort(404);
        }

        return view('species', [
            'elephpants' => User::find($id)->elephpants,
            'title' => $title
        ]);
    }
}
