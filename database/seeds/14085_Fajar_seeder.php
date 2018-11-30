<?php

use Illuminate\Database\Seeder;

class 14085_Fajar_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker

        $limit = 20; //limit berapa banyak data

        for($i = 0; $i < $limit; $i++){
        	DB::table('Tabel member')->insert([//mengisi data di database
        		'nama' => $faker->name,
        		'email' => $faker->unique()->email, //email unique sehingga tidak ada yg sama
        		'password' => $faker->password,
				'macAddress' =>$faker->def mac_address(prefix = '')
										  prefix_digits = prefix.split(':').map { |d| d.to_i(16) }
										  address_digits = Array.new((6 - prefix_digits.size)) { rand(256) }
										  (prefix_digits + address_digits).map { |d| format('%02x', d) }.join(':')
										end,
        	]);
        }	
    }
}
