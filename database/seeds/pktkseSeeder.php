<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class pktkseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create('id_ID');
 
        // membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 50; $x++){
 
        	// insert data dummy pegawai dengan faker
        	DB::table('pktkse')->insert([
                'id' => $x,
        		'rencanakerja' =>$faker->word,
            	'justifikasi' => $faker->word,
           		'tgl_plan' => $faker->dateTimeThisCentury()->format('Y-m-d'),
           		'drk' => $faker->word,
           		'rencanabiaya' => $faker-> numberBetween(100000,10000000),
            	'kategori' => $faker->word,
           		'pic' => $faker->firstName,
          		'status' => $faker->randomElement($array = array ('belum dipublikasi','sudah dipublikasi')),
        	]); 
        }
    }
}