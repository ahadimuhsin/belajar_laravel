<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');


        //membuat data dummy sebanyak 50
        for ($x = 1; $x <=50; $x++){
          DB::table('siswa')->insert([
            'nama' => $faker->name,
            'alamat'=> $faker->address,
          ]);
        }
    }
}
