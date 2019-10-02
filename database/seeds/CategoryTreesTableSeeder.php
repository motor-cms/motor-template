<?php

use Illuminate\Database\Seeder;
use Motor\Backend\Models\User;
use Motor\Backend\Models\Category;

/**
 * Class ClientsTableSeeder
 */
class CategoryTreesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user                 = User::first();
        $rootNode             = new Category();
        $rootNode->scope      = 'media';
        $rootNode->name       = 'Media';
        $rootNode->created_by = $user->id;
        $rootNode->updated_by = $user->id;
        $rootNode->saveAsRoot();

        $node             = new Category();
        $node->scope      = 'media';
        $node->name       = 'Misc';
        $node->parent_id  = $rootNode->id;
        $node->created_by = $user->id;
        $node->updated_by = $user->id;
        $node->save();
    }
}
