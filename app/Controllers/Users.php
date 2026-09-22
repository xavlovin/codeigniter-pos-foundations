<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'Mika Flores',
                'role' => 'Administrator',
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Rafael Garcia',
                'role' => 'Store Manager',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Sofia Ramos',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Ivan Dela Cruz',
                'role' => 'Cashier',
            ],
            [
                'username' => 'inventory01',
                'full_name' => 'Nina Bautista',
                'role' => 'Inventory Staff',
            ],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'active' => 'users',
            'users' => $users,
        ]);
    }
}
