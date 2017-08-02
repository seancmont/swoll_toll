<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('groups')->insert([
        'name' => 'Chest',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
        DB::table('groups')->insert([
        'name' => 'Back',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
        DB::table('groups')->insert([
        'name' => 'Legs',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
        DB::table('groups')->insert([
        'name' => 'Shoulders',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
        DB::table('groups')->insert([
        'name' => 'Biceps',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
        DB::table('groups')->insert([
        'name' => 'Triceps',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
        DB::table('groups')->insert([
        'name' => 'Abs',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    }

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
