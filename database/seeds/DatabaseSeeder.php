<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'super user',
            'email' => 'admin@everest.com',
            'contact' => 9842251119,
            'address'=> 'Butwal',
            'image'=> '',
            'password' => bcrypt('password@002'),
        ]);
    }
}
