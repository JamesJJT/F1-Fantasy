<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTeamsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('driver_1_id');
            $table->integer('driver_2_id');
            $table->integer('driver_3_id');
            $table->integer('driver_4_id');
            $table->integer('driver_5_id');
            $table->integer('team_1_id');
            $table->integer('points')->default('0');
            $table->boolean('wildcard');
            $table->integer('value')->default('0');
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
        //
    }
}
