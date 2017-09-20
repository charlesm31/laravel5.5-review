<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Restrict User from accesing if not login.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('guest');
     }
     

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // GET /tasks
        return view('layouts.welcome');
    }
}
