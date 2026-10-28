<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'phone' => '09123456789',
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '09234567890',
            ],
            [
                'full_name' => 'Pedro Reyes',
                'email' => 'pedro@example.com',
                'phone' => '09345678901',
            ],
            [
                'full_name' => 'Ana Garcia',
                'email' => 'ana@example.com',
                'phone' => '09456789012',
            ],
            [
                'full_name' => 'Jose Mendoza',
                'email' => 'jose@example.com',
                'phone' => '09567890123',
            ],
        ];

        foreach ($customers as $customer) {
            Customer::updateOrCreate(
                ['email' => $customer['email']],
                $customer
            );
        }

        $users = [
            [
                'username' => 'admin',
                'full_name' => 'Admin User',
                'email' => 'admin@example.com',
                'role' => 'Administrator',
            ],
            [
                'username' => 'mark',
                'full_name' => 'Mark Santos',
                'email' => 'mark@example.com',
                'role' => 'Cashier',
            ],
            [
                'username' => 'sarah',
                'full_name' => 'Sarah Reyes',
                'email' => 'sarah@example.com',
                'role' => 'Manager',
            ],
            [
                'username' => 'john',
                'full_name' => 'John Garcia',
                'email' => 'john@example.com',
                'role' => 'Cashier',
            ],
            [
                'username' => 'lisa',
                'full_name' => 'Lisa Mendoza',
                'email' => 'lisa@example.com',
                'role' => 'Staff',
            ],
        ];

        foreach ($users as $userData) {
            $user = User::firstOrNew([
                'email' => $userData['email'],
            ]);

            $user->fill($userData);

            if (! $user->exists) {
                $user->password = Hash::make(Str::random(32));
            }

            $user->save();
        }
    }
}