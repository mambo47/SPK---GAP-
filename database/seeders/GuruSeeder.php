<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            $faker = Faker::create('id_ID');
            

            //insert data ke table pegawai menggunakan Faker
            DB::table('guru')->insert([
                'nip' => $faker->randomDigit(),
                'nama' => $faker->name,
                'kelamin' => $faker->sentence(1,2),
                'alamat' => $faker->address

            ]);
        }
    }
}