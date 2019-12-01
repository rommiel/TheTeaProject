<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;

class AdminController extends Controller
{
    public function dashboard(Request $req){
        return view('admin.dashboard');
    }
}