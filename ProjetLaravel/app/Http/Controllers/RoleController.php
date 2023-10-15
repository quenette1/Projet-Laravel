<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function getRole()
    {
        $role = Auth::user()->Role;
        return view('dashboard', compact('role'));
    }
}
