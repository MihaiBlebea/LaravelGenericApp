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
        $role = $user->permissions;
        // $user->assignRole('admin');
        // $user->cancelRole();
        $result = $user->hasPermissionTo('can approve');
        dd($result);
    }
}
