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
        $users = config('ecommerce_db_faker.users');

        foreach ($users as $user){
            $newUser = new User();
            $newUser->email = $user['email'];
            $newUser->password = bcrypt($user['password']);
            $newUser->role = $user['role'];
            $newUser->save();
        }
    }
}
