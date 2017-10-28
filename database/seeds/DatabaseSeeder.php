<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;

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

        $admin = User::create([
        'name' => 'admin',
        'email' => str_random(10).'@gmail.com',
        'password' => bcrypt('test123'),
    ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'user',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('test123'),
        ]);
        $admin->assignRole('user');

        $moderator = User::create([
            'name' => 'moderator',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('test123'),
        ]);
        $admin->assignRole('moderator');

        $fundation = User::create([
            'name' => 'fundation',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('test123'),
        ]);
        $admin->assignRole('fundation');


    }
}
