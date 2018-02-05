<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finances', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            			// Income
            
            $table->float('wages',8,2)->nullable();
            $table->float('interest',8,2)->nullable();
            $table->float('refunds',8,2)->nullable();
            $table->float('savings',8,2)->nullable();
            $table->float('miscallaneous',8,2)->nullable();
            
            // Expenses
            
            $table->float('mortgage',8,2)->nullable();
            $table->float('utilities',8,2)->nullable();
            $table->float('home_phone',8,2)->nullable();
            $table->float('cell_phone',8,2)->nullable();
            $table->float('home_repairs',8,2)->nullable();
            $table->float('home_improvements',8,2)->nullable();
            $table->float('home_security',8,2)->nullable();
            $table->float('garden_supplies',8,2)->nullable();
            
            // Daily living
            
            $table->float('groceries',8,2)->nullable();
            $table->float('house_cleaning_service',8,2)->nullable();
            $table->float('dry_cleaning',8,2)->nullable();
            $table->float('dining_out',8,2)->nullable();
            $table->float('dog_walker',8,2)->nullable();
            $table->float('daily_living_other',8,2)->nullable();

            // Transportation
            $table->float('gas',8,2)->nullable();
            $table->float('car_insurance',8,2)->nullable();
            $table->float('car_repairs',8,2)->nullable();
            $table->float('car_wash',8,2)->nullable();
            $table->float('parking',8,2)->nullable();
            $table->float('public_transportation',8,2)->nullable();

            // Health
            $table->float('health_club_dues',8,2)->nullable();
            $table->float('health_insurance',8,2)->nullable();
            $table->float('prescriptions',8,2)->nullable();
            $table->float('drugs',8,2)->nullable();
            $table->float('co_payment',8,2)->nullable();
            $table->float('pet_medicines',8,2)->nullable();
            $table->float('life_insurance',8,2)->nullable();
                     
            // Holidays
            $table->float('air_fare',8,2)->nullable();
            $table->float('accommodations',8,2)->nullable();
            $table->float('food',8,2)->nullable();
            $table->float('souvenirs',8,2)->nullable();
            $table->float('pet_boarding',8,2)->nullable();
            $table->float('car_rental',8,2)->nullable();
            
            // Month
            $table->float('starting_balance',8,2)->nullable();

            // Dues/subscriptions
            $table->float('magazines',8,2)->nullable();
            $table->float('newspapers',8,2)->nullable();
            $table->float('internet_connection',8,2)->nullable();
            $table->float('public_radio',8,2)->nullable();
            $table->float('public_television',8,2)->nullable();
            $table->float('religious_org',8,2)->nullable();
            $table->float('charity',8,2)->nullable();
            
            // Financial Obligations
            $table->float('long_term_savings',8,2)->nullable();
            $table->float('retirement',8,2)->nullable();
            $table->float('credit_card_payments',8,2)->nullable();
            $table->float('income_tax',8,2)->nullable();
            $table->float('other_obligations',8,2)->nullable();

            // Personal
            $table->float('clothings',8,2)->nullable();
            $table->float('gifts',8,2)->nullable();
            $table->float('salon_barber',8,2)->nullable();
            $table->float('books',8,2)->nullable();
            $table->float('music',8,2)->nullable();

            // Entertainment
            $table->float('cable_tv',8,2)->nullable();
            $table->float('video_rentals',8,2)->nullable();
            $table->float('movies_plays',8,2)->nullable();
            $table->float('concerts_clubs',8,2)->nullable();
            
            // Recreation  
            $table->float('gym_fees',8,2)->nullable();
            $table->float('sports_equipment',8,2)->nullable();
            $table->float('team_dues',8,2)->nullable();
            $table->float('toys_child_gear',8,2)->nullable();
            
            // Misc Payments            
            $table->float('other')->nullable();
            
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
        Schema::dropIfExists('finances');
    }
}
