<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NgdVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ngdvattu')->insert
        ([
            'ngdVattu'=>'DD01',
            'ngdTenVTu'=>'Dau DVD',
            'ngdDvTinh'=>'Bo',
            'ngdPhanTram'=>40,
    ]);
        DB::table('ngdvattu')->insert
        ([
            'ngdVattu'=>'DD02',
            'ngdTenVTu'=>'Dau CVC',
            'ngdDvTinh'=>'Bo',
            'ngdPhanTram'=>50,
        ]);

    }
}
