<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        // Temporary customer records stored in a static PHP array
        $customers = [
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan.delacruz@example.com',
                'phone' => '09171234567',
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria.santos@example.com',
                'phone' => '09182345678',
            ],
            [
                'full_name' => 'Carlo Reyes',
                'email' => 'carlo.reyes@example.com',
                'phone' => '09193456789',
            ],
            [
                'full_name' => 'Angela Garcia',
                'email' => 'angela.garcia@example.com',
                'phone' => '09204567890',
            ],
            [
                'full_name' => 'Mark Mendoza',
                'email' => 'mark.mendoza@example.com',
                'phone' => '09215678901',
            ],
        ];

        return view('customers', ['customers' => $customers]);
    }
}
