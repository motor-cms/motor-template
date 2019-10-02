<?php

use Illuminate\Database\Seeder;
use Motor\Backend\Models\Client;
use Motor\Backend\Models\User;
use Motor\Backend\Models\Category;

/**
 * Class ClientsTableSeeder
 */
class NavigationTreesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user                  = User::first();
        $client                = Client::first();
        $language              = \Motor\Backend\Models\Language::first();
        $rootNode              = new \Motor\CMS\Models\Navigation();
        $rootNode->client_id   = $client->id;
        $rootNode->language_id = $language->id;
        $rootNode->scope       = 'main';
        $rootNode->name        = 'Main navigation';
        $rootNode->created_by  = $user->id;
        $rootNode->updated_by  = $user->id;
        $rootNode->saveAsRoot();

        $node              = new \Motor\CMS\Models\Navigation();
        $node->client_id   = $client->id;
        $node->language_id = $language->id;
        $node->scope       = 'main';
        $node->name        = 'Start';
        $node->parent_id   = $rootNode->id;
        $node->created_by  = $user->id;
        $node->updated_by  = $user->id;
        $node->save();
    }
}
