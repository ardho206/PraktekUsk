<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function user()
    {
        $userData = User::all();

        if (Gate::allows('isAdmin', Auth::user())) {
            return view('pages.user', compact('userData'));
        }

        return abort(403);
    }
}
