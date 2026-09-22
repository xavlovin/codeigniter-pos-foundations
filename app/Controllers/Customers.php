<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            [
                'full_name' => 'Alyssa Mercado',
                'email' => 'alyssa.mercado@example.com',
                'phone' => '0917-204-1188',
            ],
            [
                'full_name' => 'Benito Santos',
                'email' => 'benito.santos@example.com',
                'phone' => '0928-771-4301',
            ],
            [
                'full_name' => 'Camille Reyes',
                'email' => 'camille.reyes@example.com',
                'phone' => '0935-620-5524',
            ],
            [
                'full_name' => 'Daryl Cruz',
                'email' => 'daryl.cruz@example.com',
                'phone' => '0949-305-7742',
            ],
            [
                'full_name' => 'Erika Lim',
                'email' => 'erika.lim@example.com',
                'phone' => '0966-419-8830',
            ],
        ];

        return view('customers/index', [
            'title' => 'Customer Accounts',
            'active' => 'customers',
            'customers' => $customers,
        ]);
    }
}
