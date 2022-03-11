<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name'=>'Savani Utsav',
                'email'=>'utsav@gmail.com',
                'password'=>Hash::make('utsav'),
                'mobile'=>'9823457687',
                'role'=>'delivery-boy',
                'city'=>'surat',
                'area'=>'varachha',
                'pincode'=>'395006'
               
            ],
            [
                'name'=>'Devani Trunal',
                'email'=>'trunal@gmail.com',
                'password'=>Hash::make('trunal'),
                'mobile'=>'9856567687',
                'role'=>'delivery-boy',
                'city'=>'surat',
                'area'=>'Katargam',
                'pincode'=>'395004'
            ],
            [
                'name'=>'Patel Reena',
                'email'=>'reena@gmail.com',
                'password'=>Hash::make('reena'),
                'mobile'=>'9823654687',
                'role'=>'delivery-boy',
                'city'=>'surat',
                'area'=>'Amroli',
                'pincode'=>'395032'
            ],
            [
                'name'=>'Vaghela Dhruvit',
                'email'=>'dhruvit@gmail.com',
                'password'=>Hash::make('dhruvit'),
                'mobile'=>'9823457687',
                'role'=>'delivery-boy',
                'city'=>'surat',
                'area'=>'Pal',
                'pincode'=>'395002'
            ],
            [
                'name'=>'Patel Manav',
                'email'=>'manav@gmail.com',
                'password'=>Hash::make('manav'),
                'mobile'=>'9823457687',
                'role'=>'delivery-boy',
                'city'=>'surat',
                'area'=>'Jakatnaka',
                'pincode'=>'395054'
            ]
               
               
        ]);

    }
}
