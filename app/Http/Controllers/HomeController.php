<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use MihaiBlebea\GenericApp\Models\Role;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function test(User $user)
    {
        // $role = Role::find(1);
        // dd($role->user);
        $roles = $user->roles;
        foreach($roles as $role)
        {
            var_dump($role->name);
        }
        dd($user->hasRole('editor'));
    }
}
