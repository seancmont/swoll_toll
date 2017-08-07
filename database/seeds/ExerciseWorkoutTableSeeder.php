<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ExerciseWorkoutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercise_workout')->insert([
        'workout_id' => '1',
        'exercise_id' => '1',
        'weight' => '225',
        'total_reps' => '22',
        // 'created_at' => Carbon::now(),
        // 'updated_at' => Carbon::now(),
    ]);

       DB::table('exercise_workout')->insert([
        'workout_id' => '1',
        'exercise_id' => '2',
        'weight' => '205',
        'total_reps' => '21',
        // 'created_at' => Carbon::now(),
        // 'updated_at' => Carbon::now(),
    ]);

    DB::table('exercise_workout')->insert([
        'workout_id' => '1',
        'exercise_id' => '3',
        'weight' => '205',
        'total_reps' => '23',
        // 'created_at' => Carbon::now(),
        // 'updated_at' => Carbon::now(),
    ]);

    DB::table('exercise_workout')->insert([
        'workout_id' => '1',
        'exercise_id' => '4',
        'weight' => '225',
        'total_reps' => '25',
        // 'created_at' => Carbon::now(),
        // 'updated_at' => Carbon::now(),
    ]);

    DB::table('exercise_workout')->insert([
        'workout_id' => '1',
        'exercise_id' => '5',
        'weight' => '233',
        'total_reps' => '30',
        // 'created_at' => Carbon::now(),
        // 'updated_at' => Carbon::now(),
    ]); 
    }
}
