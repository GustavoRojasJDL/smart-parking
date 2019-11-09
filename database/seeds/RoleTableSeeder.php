<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description  = 'User is allowed to manage and edit other users'; // optional
        $admin->save();

        $user = User::where('name', '=', 'administrador%')->firstOrFail();
        $user->attachRole($admin); // parameter can be an Role object, array, or id

        $viewer = new Role();
        $viewer->name         = 'viewer';
        $viewer->display_name = 'User viewer'; // optional
        $viewer->description  = 'User is only allowed to view'; // optional
        $viewer->save();

        $user = User::all();
        $len = sizeof($user);
        for($i = 2; $i < $len; $i++){
            $user = User::find($i);
            $user->attachRole($viewer); // parameter can be an Role object, array, or id
        }
        //
    }
}
