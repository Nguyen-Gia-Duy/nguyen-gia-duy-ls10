<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class NgdNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker=Faker::create();
        foreach(range(1,100) as $index){
            DB::table('ngdnhacc')->insert([
                'ngdNhaCC'=>$faker->uuid(),
                'ngdTenNCC'=>$faker->sentence(5),
                'ngdDiaChi'=>$faker->address(),
                'ngdDienThoai'=>$faker->phoneNumber(),
                'ngdemail'=>$faker->email(),
                'ngdstatus'=>$faker->boolean()
            ]);
        }
    }
}
