<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = HttpClient::fetch(
            "GET",
            "http://127.0.0.1:8000/api/users/index"
        );
        return view('User.index', compact('users'));
    }

    public function update(Request $request)
    {
        $users = HttpClient::fetch(
            "POST",
            "http://127.0.0.1:8000/api/users/update",
            $request->all()
        );
        return redirect()->route('users');
    }
}
