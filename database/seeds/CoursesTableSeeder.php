<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,50) as $index) {
            DB::table('courses')->insert([
                'title'=> $faker->sentence,
                'description'=> $faker->paragraph,
                'duration_unit'=> $faker->word,
                'duration_value'=> $faker->randomDigit,
                'level'=> $faker->numberBetween(1,3),
                'status'=> $faker->numberBetween(1,3),
                'visibility'=> $faker->numberBetween(0,1),
                'created_at' =>$faker->dateTime,
                'updated_at' =>$faker->dateTime,
            ]);
    }
}
}
