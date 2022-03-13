<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       \Schema::disableForeignKeyConstraints();
        $this->call([
            UserSeeder::class
        ]);
        \Schema::enableForeignKeyConstraints();
        // \App\Models\User::factory(10)->create();
    }
}
