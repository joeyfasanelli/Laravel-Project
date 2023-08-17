<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index()
    {

        $users = [
            [
                'name' => 'Joey',
                'age'=> 29,
            ],
            [
                'name' => 'Emily',
                'age' => 27,

            ]
        ];

        return view('dashboard');
    }
}
