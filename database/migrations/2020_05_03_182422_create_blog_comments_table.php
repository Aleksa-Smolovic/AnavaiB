<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text("text");
            $table->timestamps();

            $table->unsignedBigInteger("create_user_id");
            $table->unsignedBigInteger("blog_id");
            $table->softDeletes();
            
            $table->foreign("create_user_id")->references("id")->on("users");
            $table->foreign("blog_id")->references("id")->on("blogs");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_comments');
    }
}
