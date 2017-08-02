<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Store id for Chest in $chest_id
    $chest_id = DB::table('groups')
       ->select(DB::raw('id'))
       ->where('name', '=', 'Chest')
       ->get();
    }

        // Store id for Back in $back_id
    $back_id = DB::table('groups')
       ->select(DB::raw('id'))
       ->where('name', '=', 'Back')
       ->get();

        // Store id for Legs in $legs_id
    $legs_id = DB::table('groups')
       ->select(DB::raw('id'))
       ->where('name', '=', 'Legs')
       ->get();

       // Store id for Shoulders in $shoulders_id
    $shoulders_id = DB::table('groups')
       ->select(DB::raw('id'))
       ->where('name', '=', 'Shoulders')
       ->get();

       // Store id for Biceps in $biceps_id
    $biceps_id = DB::table('groups')
       ->select(DB::raw('id'))
       ->where('name', '=', 'Biceps')
       ->get();

       // Store id for Triceps in $triceps_id
    $triceps_id = DB::table('groups')
       ->select(DB::raw('id'))
       ->where('name', '=', 'Triceps')
       ->get();

       // Store id for Abs in $abs_id
    $abs_id = DB::table('groups')
       ->select(DB::raw('id'))
       ->where('name', '=', 'Abs')
       ->get();

       //under muscle_group_id 1
    DB::table('exercises')->insert([
        'group_id' => $chest_id[0]->id,
        'name' => 'Flat Bench Press',
        'weight' => '225',
        'total_reps' => '20'
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    DB::table('exercises')->insert([
        'group_id' => $chest_id[0]->id,
        'name' => 'Incline Bench Press',
        'weight' => '185',
        'total_reps' => '20'
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    DB::table('exercises')->insert([
        'group_id' => $chest_id[0]->id,
        'name' => 'Decline Bench Press',
        'weight' => '205',
        'total_reps' => '20'
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    DB::table('exercises')->insert([
        'group_id' => $chest_id[0]->id,
        'name' => 'Pec Fly',
        'weight' => '225',
        'total_reps' => '20'
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

      //under muscle_group_id 2
    DB::table('exercises')->insert([
        'group_id' => $back_id[0]->id,
        'name' => 'Deadlift',
        'weight' => '325',
        'total_reps' => '20'
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    DB::table('exercises')->insert([
        'group_id' => $back_id[0]->id,
        'name' => 'Lat Pulldown',
        'weight' => '200',
        'total_reps' => '20'
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    DB::table('exercises')->insert([
        'group_id' => $back_id[0]->id,
        'name' => 'Seated Rows',
        'weight' => '200',
        'total_reps' => '20'
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    DB::table('exercises')->insert([
        'group_id' => $back_id[0]->id,
        'name' => '',
        'weight' => '225',
        'total_reps' => '20'
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
