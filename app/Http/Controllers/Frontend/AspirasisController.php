<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AspirasisController extends Controller
{
    public function index()
    {
        return view('users.listAspirasi');
    }
    public function show()
    {
        return view('users.detailAspirasi');
    }
    public function create()
    {
        return view('users.createAspirasi');
    }
}
