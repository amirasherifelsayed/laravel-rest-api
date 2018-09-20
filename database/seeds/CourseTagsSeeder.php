<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class CourseTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courseIds = \App\Models\Courses::all()->pluck('course_id')->toArray();
        $tagIds = \App\Models\Tags::all()->pluck('tag_id')->toArray();

        $faker = Faker::create();
        foreach (range(1,50) as $index) {
            DB::table('course_tags')->insert([
                'course_id' => $faker->randomElement($courseIds),
                'tag_id' => $faker->randomElement($tagIds),
                'created_at' =>$faker->dateTime,
                'updated_at' =>$faker->dateTime,
            ]);
        }
    }
}
