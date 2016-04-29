<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $createPost = new Permission();
        $createPost->name = 'create-post';
        $createPost->display_name = 'Create Posts'; //optional
        //Allow a user to
        $createPost->description = 'create new blog posts'; //optional
        $createPost->save();

        $createPost = new Permission();
        $createPost->name = 'create-page';
        $createPost->display_name = 'Create Page'; //optional
        //Allow a user to
        $createPost->description = 'create new pages'; //optional
        $createPost->save();
    }
}
