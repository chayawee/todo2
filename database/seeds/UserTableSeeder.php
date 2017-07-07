<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new  \App\User();
        $user->user_type_id = 1;
        $user->name = "Chayawee Chueapanya";
        $user->username = "kitkat08";
        $user->email = "kit_katza@hotmail";
        $user->password = bcrypt("1234");
        $user->save();
    }
}
