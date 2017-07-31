<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ExercisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
     	
        // Store id for Chest in $chest_id
	    $chest_id = DB::table('muscle_groups')
	       ->select(DB::raw('id'))
	       ->where('name', '=', 'Chest')
	       ->get();
	    

	        // Store id for Back in $back_id
	    $back_id = DB::table('muscle_groups')
	       ->select(DB::raw('id'))
	       ->where('name', '=', 'Back')
	       ->get();

	        // Store id for Legs in $legs_id
	    $legs_id = DB::table('muscle_groups')
	       ->select(DB::raw('id'))
	       ->where('name', '=', 'Legs')
	       ->get();

	       // Store id for Shoulders in $shoulders_id
	    $shoulders_id = DB::table('muscle_groups')
	       ->select(DB::raw('id'))
	       ->where('name', '=', 'Shoulders')
	       ->get();

	       // Store id for Biceps in $biceps_id
	    $biceps_id = DB::table('muscle_groups')
	       ->select(DB::raw('id'))
	       ->where('name', '=', 'Biceps')
	       ->get();

	       // Store id for Triceps in $triceps_id
	    $triceps_id = DB::table('muscle_groups')
	       ->select(DB::raw('id'))
	       ->where('name', '=', 'Triceps')
	       ->get();

	       // Store id for Abs in $abs_id
	    $abs_id = DB::table('muscle_groups')
	       ->select(DB::raw('id'))
	       ->where('name', '=', 'Abs')
	       ->get();

	       //under muscle_muscle_groups_id 1
	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $chest_id[0]->id,
	        'name' => 'Flat Bench Press',
	        'weight' => '225',
	        'total_reps' => '20',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $chest_id[0]->id,
	        'name' => 'Incline Bench Press',
	        'weight' => '185',
	        'total_reps' => '20',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $chest_id[0]->id,
	        'name' => 'Decline Bench Press',
	        'weight' => '205',
	        'total_reps' => '20',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $chest_id[0]->id,
	        'name' => 'Pec Fly',
	        'weight' => '225',
	        'total_reps' => '20',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $chest_id[0]->id,
	        'name' => 'Chest Dips',
	        'weight' => '233',
	        'total_reps' => '30',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);


	      //under muscle_muscle_groups_id 2
	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $back_id[0]->id,
	        'name' => 'Deadlift',
	        'weight' => '325',
	        'total_reps' => '20',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $back_id[0]->id,
	        'name' => 'Weighted PullUps',
	        'weight' => '213',
	        'total_reps' => '23',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $back_id[0]->id,
	        'name' => 'Lat Pulldown',
	        'weight' => '200',
	        'total_reps' => '24',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $back_id[0]->id,
	        'name' => 'Seated Rows',
	        'weight' => '200',
	        'total_reps' => '30',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $back_id[0]->id,
	        'name' => 'Lawn Mower',
	        'weight' => '90',
	        'total_reps' => '36',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    	//under muscle_muscle_groups_id 3
	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $legs_id[0]->id,
	        'name' => 'Squats',
	        'weight' => '225',
	        'total_reps' => '24',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $legs_id[0]->id,
	        'name' => 'Lying Leg Curls',
	        'weight' => '185',
	        'total_reps' => '36',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $legs_id[0]->id,
	        'name' => 'Calf Raises',
	        'weight' => '185',
	        'total_reps' => '45',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $legs_id[0]->id,
	        'name' => 'Leg Press',
	        'weight' => '415',
	        'total_reps' => '36',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $legs_id[0]->id,
	        'name' => 'Hip Adduction',
	        'weight' => '135',
	        'total_reps' => '30',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $legs_id[0]->id,
	        'name' => 'Hip Abduction',
	        'weight' => '136',
	        'total_reps' => '30',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    	//under muscle_muscle_groups_id 4
	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $shoulders_id[0]->id,
	        'name' => 'Shoulder Press',
	        'weight' => '215',
	        'total_reps' => '24',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $shoulders_id[0]->id,
	        'name' => 'Side Lateral Raises',
	        'weight' => '70',
	        'total_reps' => '36',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $shoulders_id[0]->id,
	        'name' => 'Front Lateral Raises',
	        'weight' => '90',
	        'total_reps' => '36',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $shoulders_id[0]->id,
	        'name' => 'Upright Barbell Row',
	        'weight' => '135',
	        'total_reps' => '36',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);
	    
	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $shoulders_id[0]->id,
	        'name' => 'Shrugs',
	        'weight' => '205',
	        'total_reps' => '30',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);


	    	//under muscle_muscle_groups_id 5
	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $biceps_id[0]->id,
	        'name' => 'Incline Hammer Curls',
	        'weight' => '30',
	        'total_reps' => '30',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $biceps_id[0]->id,
	        'name' => 'EZ Bar Curls',
	        'weight' => '80',
	        'total_reps' => '30',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $biceps_id[0]->id,
	        'name' => 'Bicep-Iso Barbell Curls',
	        'weight' => '75',
	        'total_reps' => '36',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $biceps_id[0]->id,
	        'name' => 'Cable Hammer Curls',
	        'weight' => '65',
	        'total_reps' => '24',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);


	    	//under muscle_muscle_groups_id 6
	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $triceps_id[0]->id,
	        'name' => 'Close Grip Bench Press',
	        'weight' => '185',
	        'total_reps' => '24',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $triceps_id[0]->id,
	        'name' => 'Weighted Dips',
	        'weight' => '233',
	        'total_reps' => '30',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $triceps_id[0]->id,
	        'name' => 'Dumbell Overhead Tri Press',
	        'weight' => '90',
	        'total_reps' => '36',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $triceps_id[0]->id,
	        'name' => 'SkullCrushers',
	        'weight' => '110',
	        'total_reps' => '27',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $triceps_id[0]->id,
	        'name' => 'Triceps Pushdown',
	        'weight' => '65',
	        'total_reps' => '24',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);


	    	// under muscle_muscle_groups_id 7
	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $abs_id[0]->id,
	        'name' => 'Leg Lifts',
	        'weight' => '188',
	        'total_reps' => '60',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $abs_id[0]->id,
	        'name' => 'Heismans',
	        'weight' => '188',
	        'total_reps' => '150',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $abs_id[0]->id,
	        'name' => 'Mountain Climbers',
	        'weight' => '188',
	        'total_reps' => '60',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);

	    DB::table('exercises')->insert([
	        'muscle_groups_id' => $abs_id[0]->id,
	        'name' => 'Crunches',
	        'weight' => '188',
	        'total_reps' => '200',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now(),
	    ]);


    }


}
