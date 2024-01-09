<?php

namespace App\Http\Controllers;

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
        if (Gate::allows('isAdmin', Auth::user())) {
            return view('pages.user');
        }
        return abort(403);
    }
}
