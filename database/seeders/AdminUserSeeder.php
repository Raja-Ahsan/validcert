<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user if it doesn't exist
        $admin = User::firstOrCreate(
            ['email' => 'admin@validcertpk.com'],
            [
                'name' => 'Admin',
                'email' => 'admin@validcertpk.com',
                'password' => Hash::make('admin123'), // Default password - CHANGE THIS!
                'email_verified_at' => now(),
            ]
        );

        if ($admin->wasRecentlyCreated) {
            $this->command->info('Admin user created successfully!');
            $this->command->info('Email: admin@validcertpk.com');
            $this->command->info('Password: admin123');
            $this->command->warn('⚠️  Please change the password after first login!');
        } else {
            $this->command->info('Admin user already exists.');
        }
    }
}

