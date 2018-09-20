<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call(UsersTableSeeder::class);
     //   $this->call(AuthorTableSeeder::class);
     //   $this->call(LanguagesTableSeeder::class);
     //   $this->call(BookTableSeeder::class);
        $this->call(UsersTypeTableSeeder::Class);
       $this->call(CoursesDetailsSeeder::Class);
        $this->call(CoursesTableSeeder::Class);
        $this->call(CategoriesSeeder::Class);
        $this->call(TagsTableSeeder::Class);
       $this->call(CourseCategoriesSeeder::Class);
        $this->call(CourseTagsSeeder::Class);


    }

}
