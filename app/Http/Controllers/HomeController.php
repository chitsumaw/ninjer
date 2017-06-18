<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recent_jobs = DB::table('jobs')->get();
        // echo '<pre>';
        //     print_r($recent_jobs);
        // echo '</pre>';
        // exit;
        return view('welcome',['recent_jobs'=>$recent_jobs]);
    }
}
