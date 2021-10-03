<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowingsTable extends Migration
{

    public function up()
    {
        Schema::create('followings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('follower_id')->constrained('users');
            $table->foreignId('followed_id')->constrained('users');
        });
    }


    public function down()
    {
        Schema::dropIfExists('followings');
    }
}
