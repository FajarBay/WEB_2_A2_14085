<?php

use Illuminate\Database\Seeder;

class Fajar_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker

        $limit = 10; //limit berapa banyak data

        for($i = 0; $i < $limit; $i++){
        	DB::table('Tabel member')->insert([//mengisi data di database
        		'nama' => $faker->name,
        		'email' => $faker->unique()->email, //email unique sehingga tidak ada yg sama
        		'password' => $faker->password,
				'macAddress' =>$faker->randomNumber,
        	]);
        }	
    }
}
