<?php

namespace Database\Seeders;

use App\Models\Area as ModelsArea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class area extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //    Area::truncate();
           DB::table('areas')->insert([
                [
                    'name'=>'amroli',
                    'city_id'=>'1'
                ],
                [
                    'name'=>'varachha',
                    'city_id'=>'1'
                ]
                    
                
                
           ]);
    }
}
