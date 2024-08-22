<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaSeeder extends Seeder
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
            DB::table('kriteria')->insert([
                'nama' => $faker->name,
                'qty' => $faker->numberBetween(25, 40),
                'keterangan' => $faker->sentence(2, 4),
                'kategori_id' => $faker->numberBetween(25, 40),
            ]);
        }
    }
}