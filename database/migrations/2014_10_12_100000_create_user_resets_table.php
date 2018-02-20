<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_resets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('token')->nullable();
            $table->integer('opt')->nullable();
            $table->enum('type',['password','email','phone'])->default('email');
            $table->enum('status',['expired','unused'])->default('unused');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_resets');
    }
}
