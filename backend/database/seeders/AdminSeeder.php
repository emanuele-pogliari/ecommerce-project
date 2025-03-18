<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $admins = conifg('ecommerce_db_faker.admins');

       foreach ($admins as $admin){
            $newAdmin = new Admin();
            $newAdmin->user_id = $admin['user_id'];
            $newAdmin->save();
        }
    }
}
