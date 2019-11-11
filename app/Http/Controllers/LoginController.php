<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;

class LoginController extends Controller
{
    public function index(Request $req){
        $client = new Client();
        $response = $client->post(env('API_CONN')."/api/login", [
            'json' => [
                "email" => $req->email,
                "password" => $req->password
            ]
        ]);

        $result = json_decode($response->getBody());
        
        if(property_exists($result, 'error')){
            return back();
        } else {
            if($result->isAdmin)
                return view('admin');
            else
                return view('user');
        }
    }
}