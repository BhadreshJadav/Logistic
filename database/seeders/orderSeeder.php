<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\order;
use Illuminate\Support\Facades\DB;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        order::truncate();
        DB::table('orders')->insert([
            [
                'user_id'=>'1',
                'status'=>'Pick Up',
                'awb_no'=>'10001'
            ],
            [
                'user_id'=>'1',
                'status'=>'City Warehouse',
                'awb_no'=>'10002'
            ],
            [
                'user_id'=>'2',
                'status'=>'Area Warehaouse',
                'awb_no'=>'10003'
            ],
            [
                'user_id'=>'2',
                'status'=>'Shipped',
                'awb_no'=>'10004'
            ],
            [
                'user_id'=>'2',
                'status'=>'Done',
                'awb_no'=>'10005'
            ],
            [
                'user_id'=>'2',
                'status'=>'Done',
                'awb_no'=>'10006'
            ],
            [
                'user_id'=>'3',
                'status'=>'Shipped',
                'awb_no'=>'10007'
            ],
            [
                'user_id'=>'1',
                'status'=>'Done',
                'awb_no'=>'10008'
            ],
            [
                'user_id'=>'2',
                'status'=>'City Warehouse',
                'awb_no'=>'10009'
            ], 
            [
                'user_id'=>'3',
                'status'=>'Done',
                'awb_no'=>'100010'
            ],
            [
                'user_id'=>'2',
                'status'=>'Area Warehaouse',
                'awb_no'=>'100011'
            ] 
        ]);
    }
}
