<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


use Faker\Factory as Faker;


class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        //DB::table('users')->delete(); //delete all records
     //  App\Models\Users::truncate();

        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'image' => $faker->imageUrl(),
               // 'ip_address' => $faker->creditCardNumber,
                'type' => $faker->randomDigit,
                'role' => $faker->word,
                'status' => $faker->numberBetween(1,0),
                'password' =>$faker->password,
                'created_at' =>$faker->dateTime,
                'updated_at' =>$faker->dateTime,
            ]);
        }

//        for ($i = 0; $i < 20; $i++) {
//
//            $first_name = str_random(6);
//            $last_name = str_random(6);
//
//            DB::table('users')->insert([
//                'first_name' => $first_name,
//                'last_name' => $last_name,
//                'phone' => mt_rand(200,999).'-'.mt_rand(100,999).'-'.mt_rand(1000,9999),
//                'email' => strtolower($first_name . '@domain.com'),
//                'password' => bcrypt('1234'),
//                'ip_address' => mt_rand(0,255).'.'.mt_rand(0,255).'.'.mt_rand(0,255).'.'.mt_rand(0,255),
//                'role' => 'colaborator',
//                //'created_at' => date('Y-m-d H:i:s')
//                //'created_at' => \Carbon\Carbon::now(),
//                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
//            ]);
//
//        }
    }

}
