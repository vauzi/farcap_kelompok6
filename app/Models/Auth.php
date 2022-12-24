<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

// class Auth extends Model
// {
//     use HasFactory;
//     public $guarded = ["id"];
//     protected $table = "Auths";

//     protected static function boot ()
//     {
//         parent::boot();
//         static::creating(function(Auth $auth)
//         {
//             $auth->password = Hash::make($auth->password);
//         });
//         static::updating(function(Pengguna $auth)
//         {
//             if($auth->isDirty(["password"])){
//                 $auth->password = Hash::make($auth->password);
//             }
//         });
//     }
//}