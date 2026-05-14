<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        AdminUser::create([
            'username' => 'admin',
            'password' => Hash::make('admin123'),
            'email' => 'admin@maatours.com',
        ]);
    }
}
