<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index(Request $req)
    {
        $valid = Validator::make($req->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($valid->fails()) {
            return response()->json(['status' => 'error', 'code' => 400, 'msg' => $valid->messages()->first()]);
        }
        $loginType = filter_var($req->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $login = [
            $loginType => $req->email,
            'password' => $req->password
        ];

        if (Auth::attempt($login)) {
            return response()->json([
                'success' => true
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Login Gagal!'
            ], 401);
        }
    }
    public function cek()
    {
        $login = request()->input('login');

        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        request()->merge([$fieldType => $login]);

        return $fieldType;
    }
    public function logout()
    {
        Auth::logout();
        return  redirect()->route('dashboard');
    }
}
