<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->string('id', 32)->primary();
            $table->string('user_id', 32);
            $table->string('first_name',150);
            $table->string('last_name', 150);
            $table->date('date_of_birth');
            $table->string('phone',20)->unique();
            $table->string('image');
            $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::dropIfExists('user_profiles');
    }
}
