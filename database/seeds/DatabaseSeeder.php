<?php

use Illuminate\Database\Seeder;
use App\siswa;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(siswaTableSeeder::class);
        factory(App\siswa::class, 100)->create();
    }
}
