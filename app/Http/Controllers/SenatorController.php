<?php

namespace App\Http\Controllers;

use App\repositories\RepositorieSenator;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class SenatorController extends Controller
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
     * @return Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function find($id)
    {
        return RepositorieSenator::getSenators($id);

    }

}
