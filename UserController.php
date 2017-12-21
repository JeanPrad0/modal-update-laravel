<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \DB::table('users')
                    ->paginate(15);
    
        return view('index', compact('users'));
    }


    public function edit($id)
    {
        $user = \DB::table('users')
                        ->where('id', $id)
                        ->get();
        
        return view('edit', compact('user'));

    }
}
