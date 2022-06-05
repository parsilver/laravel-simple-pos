<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class DefaultUsersSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(CreatesNewUsers $createNewUser)
    {
        $users = [
            'admin@admin.com' => [
                'name' => 'Admin',
                'password' => 'password',
                'role' => 'admin',
            ],
        ];

        foreach ($users as $email => $user) {
            $createNewUser->create([
                'name' => $user['name'],
                'email' => $email,
                'password' => $user['password'],
                'role' => $user['role'],
            ]);
        }
    }
}
