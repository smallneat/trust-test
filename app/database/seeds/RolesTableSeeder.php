<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class RolesTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();

        $admin = Role::create([
            'name' => 'Admin'
        ]);

        $editor = Role::create([
            'name' => 'Editor'
        ]);

        $blogger = Role::create([
            'name' => 'Blogger'
        ]);


        // attach some permissions to the roles
        $admin->attachPermissions(Permission::all());
        $editor->attachPermissions([1, 2, 3]);
        $blogger->attachPermissions([1, 4, 5]);
	}

}
