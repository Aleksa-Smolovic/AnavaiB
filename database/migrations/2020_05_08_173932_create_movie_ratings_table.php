<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_ratings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('rating');
            $table->text('title');
            $table->text('text');
            $table->unsignedBigInteger("movie_id");
            $table->unsignedBigInteger("create_user_id");

            $table->timestamps();
            $table->foreign("create_user_id")->references("id")->on("users");
            $table->foreign("movie_id")->references("id")->on("movies");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_ratings');
    }
}
