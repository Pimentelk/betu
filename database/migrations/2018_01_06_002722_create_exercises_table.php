<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->increments('id');
			
            $table->integer('workout_id')->unsigned();
            $table->foreign('workout_id')->references('id')->on('workouts')->onDelete('cascade');

			$table->string('name');
			$table->integer('sets');
			$table->integer('reps');
			$table->string('weight');
			$table->string('duration');
            
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercises');
    }
}
