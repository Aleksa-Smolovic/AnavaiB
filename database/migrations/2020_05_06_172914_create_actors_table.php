<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("full_name");
            $table->string("slug")->unique();
            $table->string("country");
            $table->date("birth_date");
            $table->text("image");
            $table->text("overview");
            $table->text("biography");
            
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
        Schema::dropIfExists('actors');
    }
}
