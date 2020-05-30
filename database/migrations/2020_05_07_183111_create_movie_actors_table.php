<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_actors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("character");
            $table->unsignedBigInteger("movie_id");
            $table->unsignedBigInteger("actor_id");
            $table->unsignedBigInteger("create_user_id");
            $table->timestamps();
            
            $table->foreign("create_user_id")->references("id")->on("users");
            $table->foreign("movie_id")->references("id")->on("movies");
            $table->foreign("actor_id")->references("id")->on("actors");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_actors');
    }
}
