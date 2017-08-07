<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('musclegroups')->insert([
        'name' => 'Chest',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
        DB::table('musclegroups')->insert([
        'name' => 'Back',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
        DB::table('musclegroups')->insert([
        'name' => 'Legs',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
        DB::table('musclegroups')->insert([
        'name' => 'Shoulders',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
        DB::table('musclegroups')->insert([
        'name' => 'Biceps',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
        DB::table('musclegroups')->insert([
        'name' => 'Triceps',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
        DB::table('musclegroups')->insert([
        'name' => 'Abs',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    }
}
