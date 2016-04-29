<?php

use Illuminate\Database\Seeder;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
            \App\User::create([
                'email' => $faker->email,
                'password' => bcrypt('secret'),
            ]);
        };
    }
}
