<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create roles and assign existing permissions
        $role = Role::create(['name' => 'user']);
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'moderator']);
        $role = Role::create(['name' => 'fundation']);
    }
}
