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
            'name' => 'Adam Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('test123'),
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'John Alco',
            'email' => 'user@gmail.com',
            'password' => bcrypt('test123'),
        ]);
        $user->assignRole('user');

        $moderator = User::create([
            'name' => 'moderator',
            'email' => str_random(10) . '@gmail.com',
            'password' => bcrypt('test123'),
        ]);
        $moderator->assignRole('moderator');

        $fundation = User::create([
            'name' => 'fundation',
            'email' => 'fundation@gmail.com',
            'password' => bcrypt('test123'),
        ]);
        $fundation->assignRole('fundation');


        \App\Event::create([
            'name' => 'Pomoc dla ubogich',
            'location' => 'Warsaw',
            'date' => Carbon::parse('2017-11-13'),
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",
            'owner_id' => 1
        ]);
        $faker = Faker\Factory::create();
        for ($i = 0; $i <= 100; $i++) {
            \App\Event::create([
                'name' => $faker->word,
                'location' => $faker->city,
                'date' => $faker->date($format = 'Y-m-d', $min = 'now'),
                'description' => $faker->text,
                'owner_id' => 1
            ]);
        }
        $admin->events()->attach([1,2,3,4]);
    }
}
