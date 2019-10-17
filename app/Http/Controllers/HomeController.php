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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        logger()->info('User join home.');
        return view('home');
    }

    public function graph()
    {
        logger()->info('User join graph.');
        return view('graph');
    }

    public function all()
    {
        logger()->info('User join all responses.');
        return view('all');
    }
}
