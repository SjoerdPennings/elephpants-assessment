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
            $title = 'Herd of ' . User::find($id)?->name;
        }

        return view('species', [
            'elephpants' => User::find($id)->elephpants,
            'title' => $title
        ]);
    }

    public function add(int $elephpant_id)
    {
        $user = auth()->user();
        $user->elephpants()->attach($elephpant_id);
        return redirect()->back();
    }
}
