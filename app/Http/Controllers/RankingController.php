<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RankingController extends Controller
{
    public function index() {
        return view ('ranking', [
            'users' => User::withCount('elephpants')->orderBy('elephpants_count', 'desc')->get(),
            'title' => 'Ranking',
        ]);
    }
}
