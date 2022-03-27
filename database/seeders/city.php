<?php

namespace Database\Seeders;

use App\Models\City as ModelsCity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class city extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // City::truncate();
        DB::table('cities')->insert([
            [
                'name' => 'surat'
            ],
            [
                'name' => 'rajkot'
            ],
            [
                'name' => 'bhavnagar'
            ],
            [
                'name' => 'ahmedabad'
            ],
            [
                'name' => 'vadodara'
            ],
            [
                'name' => 'aanand'
            ],
            [
                'name' => 'gandhinagar'
            ],
            [
                'name' => 'amreli'
            ],
        ]);
    }
}
