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
        'name' => 'today',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
    }
}
