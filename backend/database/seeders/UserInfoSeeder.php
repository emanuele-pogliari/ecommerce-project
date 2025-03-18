<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_infos = config('ecommerce_db_faker.user_infos');
        foreach ($user_infos as $user_info){
            $newUserInfo = new UserInfo();
            $newUserInfo->user_id = $user_info['user_id'];
            $newUserInfo->first_name = $user_info['first_name'];
            $newUserInfo->surname = $user_info['surname'];
            $newUserInfo->phone = $user_info['phone'];
            $newUserInfo->address = $user_info['address'];
            $newUserInfo->image = $user_info['image'];
            $newUserInfo->tax_id_code = $user_info['tax_id_code'];
            $newUserInfo->save();
        }
    }
}
