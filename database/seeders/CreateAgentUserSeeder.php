<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CreateAgentUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $agent_user = User::create([
            'name' => 'Agent Shellgrow',
            'email' => 'agent@gmail.com',
            'password' => Hash::make(123123),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Role::create([
            'name' => 'agent-user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $agent_user->assignRole('agent-user');
    }
}
