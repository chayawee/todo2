<?php

use Illuminate\Database\Seeder;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user_type = new  \App\UserType();
        $user_type->name = "kitkat";
        $user_type->save();

        $user_type = new  \App\UserType();
        $user_type->name = "cckat";
        $user_type->save();

    }

}
