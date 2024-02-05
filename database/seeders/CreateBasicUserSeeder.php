<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CreateBasicUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
        'name' => 'User',
        'email' => 'maxZin@gmail.com',
        'password' => Hash::make(123123),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

        Role::create([
            'name' => 'basic-user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $user->assignRole('basic-user');
    }
}
