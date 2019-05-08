<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class pemesanSeeder extends Seeder
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

        for($i = 200001; $i <=201000; $i++){
            DB::table('pemesans')->insert([
                'id_pemesan'=> $i,
                'nama_pemesan' => $faker->name,
                'no_telfon_pemesan'=>$faker->phoneNumber,
                'tempat_lahir_pemesan'=>$faker->city,
                'tanggal_lahir_pemesan'=>$faker->date($format = 'Y-m-d', $max = 'now'),
                'alamat'=>$faker->streetAddress,
                'jenis_kelamin'=>$faker->randomElement($array = array ('L','P')),
                'username'=>$faker->word,
                'password'=>$faker->word
            ]);
        }
    }
}
