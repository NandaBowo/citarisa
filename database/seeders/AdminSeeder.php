<?php

namespace Database\Seeders;

use App\Models\Sadmin; 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Sadmin::create([
            'name' => 'admin2',
            'email' => 'admin2@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password'), 
        ]);
    }
}
