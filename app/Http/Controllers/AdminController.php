<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::query()->orderBy('is_admin', 'asc')->orderBy('created_at', 'desc')->get();
        return view('User.index', compact('users'));
    }

    public function update(Request $request)
    {
        $admin = User::query()->where('id', $request->id)->first();
        $admin->update([
            'is_admin' => true
        ]);
        return redirect()->route('users');
    }
}
