<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class NgdVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('ngdvattu')->insert([
        //     'ngdMaVTu'=>'DD01',
        //     'ngdTenVtu'=>'DVD',
        //     'ngdDviTinh'=>'Bo',
        //     'ngdPhanTram'=>40,
        // ]);
        // DB::table('ngdvattu')->insert([
        //     'ngdMaVTu'=>'DD02',
        //     'ngdTenVtu'=>'CDC',
        //     'ngdDviTinh'=>'Bo',
        //     'ngdPhanTram'=>50,
        // ]);
        $faker=Faker::create();
        foreach(range(1,50)as$index){
            DB::table('ngdvattu')->insert([
                'ngdMaVTu'=>$faker->word(4),
                //'MaNCC'=>$faker->word(15),
                'ngdTenVtu'=>$faker->sentences(5),
                'ngdDviTinh'=>$faker->word(3),
                'ngdPhanTram'=>$faker->randomFloat('2',0,100),
                
            ]);
    }
}
