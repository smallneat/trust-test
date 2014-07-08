<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class PermissionsTableSeeder extends Seeder {

	public function run()
	{
        Permission::create([
            'name' => 'CreatePages',
            'description' => 'Create Pages',
        ]);

        Permission::create([
            'name' => 'CreateTemplates',
            'description' => 'Create Templates',
        ]);

        Permission::create([
            'name' => 'CreateContent',
            'description' => 'Create New Content',
        ]);

        Permission::create([
            'name' => 'EditContent',
            'description' => 'Edit existing content',
        ]);

        Permission::create([
            'name' => 'DeleteContent',
            'description' => 'Delete existing content',
        ]);
    }

}
