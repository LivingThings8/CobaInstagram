<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'user_id' => '1',
            'caption' => 'My Pamiliy in Telkom Bandung of Institute',
            'image' => 'Daspro2017.jpeg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('post')->insert([
            'user_id' => '2',
            'caption' => 'Numpang Promosi Ni Anak',
            'image' => 'BPH.jpeg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
