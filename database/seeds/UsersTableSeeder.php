<?php

use Illuminate\Database\Seeder;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $registered = new Role();
        $registered->name         = 'registered';
        $registered->display_name = 'Registered User'; // optional
        $registered->description  = 'User is a registered one'; // optional
        $registered->save();

        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description  = 'User is allowed to manage and edit other users'; // optional
        $admin->save();


        $user = new \App\User();
        $user->name = 'Usman';
        $user->email = 'usman.akram@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();

        $user->attachRole($admin);
        $user->attachRole($registered);

        //$user->readings()->saveMany(factory(App\Reading::class,60)->make());
    }
}
