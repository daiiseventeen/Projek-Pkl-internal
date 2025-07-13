<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'Admin@example.com',
            'is_admin' => true,
            'password' => bcrypt('Admin@example.com'),
        ]);
        User::create([
            'name' => 'User',
            'email' => 'User@example.com',
            'is_admin' => false,
            'password' => bcrypt('User@example.com'),
        ]);
    }
}

// @extends('layouts.admin')

// @section('content')
//     <div class="container py-5">
//         <div class="card shadow rounded-3">
//             <div class="card-body text-center">
//                 <h1 class="mb-3">You are logged in!</h1>
//                 <p class="text-muted">Welcome to the Admin Dashboard, {{ Auth::user()->name }}.</p>
//             </div>
//         </div>
//     </div>
// @endsection
