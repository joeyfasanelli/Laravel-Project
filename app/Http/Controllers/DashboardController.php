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
                'age'=> 29
            ],
            [
                'name' => 'Emily',
                'age' => 27

            ],
            [
                'name' => 'Gypsy',
                'age' => '2'
            ],
            [
                'name' => 'Matches',
                'age' => '12'
            ]
        ];

        return view(
            'dashboard',
            [
                'users' => $users
            ]
        );
    }
}