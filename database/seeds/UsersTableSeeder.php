<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $user = new User();
        $user->name = "administrador";
        $user->email = "admin@une.edu.mx";
        $user->password = Hash::make('12345678');
        $user->save();
        for($i = 0; $i < 1 ; $i++){
            $user = new User();
            $user->name = $faker->name;
            $user->email = $faker->unique()->email;
            $user->password = Hash::make('12345678');
            $user->save();
        }

        
        //
    }
}
