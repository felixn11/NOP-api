<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $owner = new Role();
        $owner->name = 'admin';
        $owner->display_name = 'Admin Owner';
        $owner->description = "description";
        $owner->save();
    }
}
