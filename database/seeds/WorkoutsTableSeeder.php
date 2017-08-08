<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class WorkoutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workouts')->insert([
        'name' => 'Sunday August 6 2017',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
        DB::table('workouts')->insert([
        'name' => 'Monday August 7 2017',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
    }
}
