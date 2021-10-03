<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{

    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->timestamp('liked_at');
            $table->foreignId('post_id')->constrained();
            $table->foreignId('user_id')->constrained();
        });
    }


    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
