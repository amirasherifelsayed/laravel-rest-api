<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class CoursesDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CourseIds = \App\Models\Courses::all()->pluck('course_id')->toArray();

        $faker = Faker::create();
        foreach (range(1,50) as $index) {
            DB::table('courses_details')->insert([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
                'course_id' => $faker->randomElement($CourseIds),
                'created_at' =>$faker->dateTime,
                'updated_at' =>$faker->dateTime,
            ]);
        }
    }
}
