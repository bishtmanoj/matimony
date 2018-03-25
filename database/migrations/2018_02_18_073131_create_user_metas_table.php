<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_metas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('manglik_id')->nullable();
            $table->integer('marital_status_id')->nullable();
            $table->integer('religion_id')->nullable();
            $table->integer('address_id')->nullable();
            $table->integer('education_id')->nullable();
            $table->integer('caste_id')->nullable();
            $table->integer('user_height_id')->nullable();
            $table->integer('profile_post_id');
            $table->integer('employment_id')->nullable();
            $table->integer('language_id')->nullable();
            $table->text('about_me')->nullable();
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
        Schema::dropIfExists('user_metas');
    }
}
