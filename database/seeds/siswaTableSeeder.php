<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class siswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 100 ; $i++) {
        $faker = Faker::create();
        DB::table('siswas')->insert([
          'nisn' => $faker->randomNumber(6) ,
          'nis' => $faker->randomNumber,
          'name' => $faker->name,
          'grade' => 'RPL',
          'gender' => 'male',
          'address' => $faker->address,
        ]);
      }
    }
}
