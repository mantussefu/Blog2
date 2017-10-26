<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_1 = new \App\User();
        $user_1->name = 'Bossu Mare';
        $user_1->email = 'boss@example.com';
        $user_1->password = bcrypt('secret');
        $user_1->save();
    }
}
