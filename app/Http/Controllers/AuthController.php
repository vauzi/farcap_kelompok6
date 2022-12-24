<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function registrasi (){
        return view ('register');
    }
    function register(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
            
        $data = $request->all();
        User::query()->create($data);
        return redirect("login");
    }
    function log () {
        return view ('login');  
    }

    public function Login(Request $request)
    {
        $auth = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($auth)) {
            $request->session()->regenerate();
            if (Auth::user()->is_admin == true) {
                // return view("home");
                return redirect()->to('home');
            }
            else {
                return redirect ()->route("home");
            }
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    // function Login (Request $request){
    //     if($request->method() === 'GET') {
    //         return view ('login');
    //     }
    //     $email = $request->input("email");
    //     $password = $request->input("password");
    //     $auth = Auth::query()
    //     ->where ("email", $email)
    //     ->first();
    //     if($auth == null){
    //         return redirect()
    //         ->back()
    //         ->withErrors([
    //             "msg" => "Email tidak ditemukan"
    //         ]);
    //     }
    //     if(!Hash::check($password, $auth->password)){
    //         return redirect()
    //         ->withErrors([
    //             "msg" => "Password Salah"
    //         ])->back();
    //     }
    //     if (!session ()->isStarted()) session()->start();
    //     session()->put("logged", true);
    //     session()->put("idAuth", $auth->id);
    //     if ($auth->is_admin==true){
    //         return redirect()->to('/dashboard');
    //     }
    //     return redirect ()->route("home");
    
    // function Logout () {
    //     session()->flush();
    //     return redirect()->route("login");
    // }
    function Logout (Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route("login");
    }
}