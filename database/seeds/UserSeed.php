<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = "Admin";
        $user->email = "admin@test.com";
        $user->password = bcrypt('123456');
        $user->is_admin = true;
        $user->save();
    }
}
