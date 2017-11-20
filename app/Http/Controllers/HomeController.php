<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
        return view('home');
    }

    public function login()
    {
        return redirect('/');
    }

    public function event($id)
    {
        return view('event')->with('eid', $id);
    }

    public function memberlist()
    {
        return view('form.user.table');
    }

    public function user($name)
    {
        return view('user')->with('name', $name);
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
    }

    public function statement()
    {
        return view('form.user.statement');
    }
}
