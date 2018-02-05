<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('servings')->default(0);
            $table->float('size')->default(0);

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->enum('meal_type',array_values(Config::get('constants.MEALTYPES')));
            
            $table->float('sugar')->default(0);
            $table->float('calories')->default(0);
            $table->float('carbs')->default(0);
            $table->float('fat')->default(0);
            $table->float('protein')->default(0);
            $table->text('notes');
            
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
        Schema::dropIfExists('journals');
    }
}
