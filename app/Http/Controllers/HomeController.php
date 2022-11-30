<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

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
        $user = Auth::user();
        if ($user->role == 'admin') {
            return view('home');
        } else {
            return view('welcome');
        }
    }

    public function english(){
        $user =  Auth::user();
        $input['lang'] = 'en';
        $user->update($input);
        return redirect()->back()->with('success',Lang::get('menubar.lang'));
    }

    public function gujarati(){
        $user =  Auth::user();
        $input['lang'] = 'guj';
        $user->update($input);
        return redirect()->back()->with('success',Lang::get('menubar.lang'));
    }
}
