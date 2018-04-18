<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('age_from')->nullable();
            $table->integer('age_to')->nullable();
            $table->integer('user_height_id')->nullable();
            $table->integer('language_id')->nullable();
            $table->integer('martial_status_id')->nullable();
            $table->integer('religion_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('education_id')->nullable();
            $table->integer('employer_id')->nullable();
            $table->integer('profile_post_id')->nullable();
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
        Schema::dropIfExists('preferences');
    }
}
