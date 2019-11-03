<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // Generate Waktu

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Rahadian Aldi',
            'email' => 'rahadianaldi@gmail.com',
            'password' => bcrypt('rahadian'),
            'avatar' => 'Me.jpeg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Tania Ayu',
            'email' => 'tanay@gmail.com',
            'password' => bcrypt('tanay'),
            'avatar' => 'TanAy.jpeg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
