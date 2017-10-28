<?php

use Carbon\Carbon;
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

        \App\Event::create([
            'name' => 'Pomoc dla ubogich',
            'location' => 'Warsaw',
            'date' => Carbon::parse('2017-11-13'),
            'description' => "TEST xD",
        ]);
    }
}
