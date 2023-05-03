<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'name' => "Davr",
            'addres' => "Buxoro",
            'phone' =>  "965644",
            'email' =>  "davr@sjkdf.com",
            'status' => 0
        ]);
    }
}
