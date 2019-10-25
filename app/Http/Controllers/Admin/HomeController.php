<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin'); //make sure the user has admin role 
    }

    public function index()
    {
      return view('admin.home');
    }
}
