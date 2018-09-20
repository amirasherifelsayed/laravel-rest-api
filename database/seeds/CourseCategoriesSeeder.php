<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class CourseCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CourseIds = \App\Models\Courses::all()->pluck('course_id')->toArray();
        $CategoryIds = \App\Models\Categories::all()->pluck('category_id')->toArray();

        $faker = Faker::create();
        foreach (range(1,50) as $index) {
            DB::table('course_categories')->insert([
                'course_id' => $faker->randomElement($CourseIds),
                'category_id' => $faker->randomElement($CategoryIds),
                'created_at' =>$faker->dateTime,
                'updated_at' =>$faker->dateTime,
            ]);
        }
    }
}
