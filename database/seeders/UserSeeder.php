<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('users')->insert([
            [
                'name'=>'Binal Bhaliya',
                'email'=>'binal@gmail.com',
                'password'=>Hash::make('binal'),
                'city'=>'Surat',
                'mobile'=>'8976576754',
                'area'=>null,
                'pincode'=>null,
                'role'=>'user'
            ],
            [
                'name'=>'Nensi Dhamelia',
                'email'=>'nensi@gmail.com',
                'password'=>Hash::make('nensi'),
                'city'=>'Ahmedabad',
                'mobile'=>'8976590754',
                'area'=>null,
                'pincode'=>null,
                'role'=>'user'
            ],
            [
                'name'=>'Harshid Kukadiya',
                'email'=>'harshid@gmail.com',
                'password'=>Hash::make('harshid'),
                'city'=>'Aanand',
                'mobile'=>'8967576754',
                'area'=>null,
                'pincode'=>null,
                'role'=>'user'
            ],
            [
                'name'=>'Rutvik Jagani',
                'email'=>'rutvik@gmail.com',
                'password'=>Hash::make('rutvik'),
                'mobile'=>'9823457687',
                'role'=>'admin',
                'city'=>'surat',
                'area'=>null,
                'pincode'=>null
            ],
            [
                'name'=>'Dhruvit Vaghela',
                'email'=>'dhruvit@gmail.com',
                'password'=>Hash::make('dhruvit'),
                'city'=>'Surat',
                'area'=>'Katargam',
                'pincode'=>'789876',
                'mobile'=>'8975678754',
                'role'=>'delivery-boy'
            ],
            [
                'name'=>'Parth Jagani',
                'email'=>'parth@gmail.com',
                'password'=>Hash::make('parth'),
                'city'=>'Surat',
                'area'=>'Amroli',
                'pincode'=>'390001',
                'mobile'=>'8976895754',
                'role'=>'delivery-boy'
            ],
            [
                'name'=>'Fenil Harsoda',
                'email'=>'fenil@gmail.com',
                'password'=>Hash::make('fenil'),
                'city'=>'Ahmedabad',
                'area'=>'Vastral',
                'pincode'=>'390022',
                'mobile'=>'8967906754',
                'role'=>'delivery-boy'
            ],
            [
                'name'=>'Pratik Bhingradiya',
                'email'=>'pratik@gmail.com',
                'password'=>Hash::make('pratik'),
                'city'=>'Surat',
                'area'=>'mota varachha',
                'pincode'=>'390004',
                'mobile'=>'8975564754',
                'role'=>'manager'
            ],
            [
                'name'=>'Sanjay Patel',
                'email'=>'sanjay@gmail.com',
                'password'=>Hash::make('sanjay'),
                'city'=>'Ahmedabad',
                'area'=>'SG Highway',
                'pincode'=>'390066',
                'mobile'=>'8974367754',
                'role'=>'manager'
            ],
            [
                'name'=>'Nikunj Jadav',
                'email'=>'nikunj@gmail.com',
                'password'=>Hash::make('nikunj'),
                'city'=>'Aanand',
                'area'=>'Main Bajar',
                'pincode'=>'390065',
                'mobile'=>'8967564754',
                'role'=>'manager'
            ]

        ]);
    } 
}
