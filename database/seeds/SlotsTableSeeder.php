<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Slot;

class SlotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i < 8 ; $i++){
            $slot = new Slot;
            $slot->name = 'Cajon'.$i;
            $slot->status = 1;
            $slot->created_at = $faker->dateTime();
            $slot->updated_at = null;
            $slot->save();
        }
        //
    }
}
