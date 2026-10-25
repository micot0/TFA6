<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): View
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'role' => 'Administrator'
            ],
            [
                'id' => 2,
                'name' => 'Mark Santos',
                'email' => 'mark@example.com',
                'role' => 'Cashier'
            ],
            [
                'id' => 3,
                'name' => 'Sarah Reyes',
                'email' => 'sarah@example.com',
                'role' => 'Manager'
            ],
            [
                'id' => 4,
                'name' => 'John Garcia',
                'email' => 'john@example.com',
                'role' => 'Cashier'
            ],
            [
                'id' => 5,
                'name' => 'Lisa Mendoza',
                'email' => 'lisa@example.com',
                'role' => 'Staff'
            ]
        ];

        return view('users', ['users' => $users]);
    }
}