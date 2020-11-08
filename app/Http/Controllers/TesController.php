<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class TesController extends Controller
{
    public function index()
    {
        $user = User::find(1)->with('Role');
        return  $user->roles;
    }
}
