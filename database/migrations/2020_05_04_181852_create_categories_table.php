<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name")->unique();
            $table->text("image");

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
        Schema::dropIfExists('categories');
    }
}
