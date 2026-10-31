<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        // Temporary staff records stored in a PHP array
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'Adrian Cruz',
                'role' => 'Administrator',
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Patricia Lopez',
                'role' => 'Manager',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Bianca Reyes',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Daniel Santos',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier03',
                'full_name' => 'Kevin Ramos',
                'role' => 'Cashier',
            ],
        ];

        return view('users', ['users' => $users]);
    }
}
