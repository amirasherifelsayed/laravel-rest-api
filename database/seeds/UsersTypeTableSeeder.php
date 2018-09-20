<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class UsersTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userIds = \App\Models\Users::all()->pluck('user_id')->toArray();

        $faker = Faker::create();
        foreach (range(1,50) as $index) {
            DB::table('users_types')->insert([
                'user_id' => $faker->randomElement($userIds),
                'name' => $faker->word,
                'description' => $faker->paragraph,
                'created_at' =>$faker->dateTime,
                'updated_at' =>$faker->dateTime,
            ]);
        }
    }
}
