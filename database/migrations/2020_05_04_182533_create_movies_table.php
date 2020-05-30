<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title");
            $table->string("slug")->unique();
            $table->text("image");
            $table->text("text");
            $table->string("trailer");
            $table->double("run_time");
            $table->date("release_date");
            $table->integer('rated_by')->default(0);
            $table->double('rating')->default(0.0);
            $table->unsignedBigInteger("category_id");
            $table->foreign("category_id")->references("id")->on("categories");
                    
            $table->unsignedBigInteger("create_user_id");
            $table->unsignedBigInteger("update_user_id")->nullable();
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign("create_user_id")->references("id")->on("users");
            $table->foreign("update_user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
