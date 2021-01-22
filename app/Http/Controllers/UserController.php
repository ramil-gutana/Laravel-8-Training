<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //Using Middleware
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Invoke Class
    public function __invoke()
    {
        //returning view using global view helper
        // return view('hello',['name'=>'Ramil']);
        // using View Facade
        return View::make('hello', ['name' => 'Ramil']);
    }
}
