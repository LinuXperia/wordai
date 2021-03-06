<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function verifySignup()
    {
    	$verify = DB::table('users')->where('id', request('id'))->update(['isVerify' => 1]);

    	return response()->json($verify);
    }

    public function userList()
    {
    	return User::where('isAdmin', 0)->get();
    }
}
